# ==============================================================================
# Stage 1: PHP Base & Dependencies (`base`)
#
# We start with a clean PHP-FPM image and install system dependencies
# and required PHP extensions. This becomes the foundation for subsequent stages.
# ==============================================================================
ARG PHP_VERSION=8.2
ARG NODE_VERSION=18
FROM php:${PHP_VERSION}-fpm-alpine AS base

# Set working directory
WORKDIR /var/www/html

# Install system dependencies needed for common PHP extensions.
# - 'build-base' is for compiling.
# - 'libzip-dev', 'libpng-dev', etc., are for specific extensions.
# - 'fcgi' is needed for the healthcheck.
RUN apk add --no-cache \
    build-base \
    libzip-dev \
    libpng-dev \
    jpeg-dev \
    freetype-dev \
    oniguruma-dev \
    libxml2-dev \
    supervisor \
    nginx \
    fcgi

# Install common Laravel PHP extensions
# gd: for image manipulation
# pdo_mysql: for MySQL/MariaDB database connection
# bcmath: for precision math, used by some packages
# sockets: for things like Laravel Echo Server or WebSockets
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
    pdo pdo_mysql \
    zip \
    gd \
    bcmath \
    mbstring \
    exif 

# Install Composer globally
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy custom PHP config
# This is where you would place your opcache.ini or other settings.
COPY .docker/php/conf.d/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

RUN sed -i 's/;ping.path/ping.path/' /usr/local/etc/php-fpm.d/www.conf && \
    sed -i 's/;pm.status_path/pm.status_path/' /usr/local/etc/php-fpm.d/www.conf

# ==============================================================================
# Stage 2: Composer Vendor Dependencies (`vendor`)
#
# This stage is dedicated to installing Composer dependencies.
# By copying only composer.json/lock first, Docker can cache this layer.
# It will only be re-run if your composer files change.
# ==============================================================================
FROM base AS vendor
COPY database/ composer.json composer.lock ./

# Install Composer dependencies for production
RUN composer install --no-interaction --no-dev --no-scripts --prefer-dist --optimize-autoloader

# ==============================================================================
# Stage 3: Frontend Asset Build (`frontend`)
#
# This stage builds your JavaScript and CSS assets. It uses a Node.js
# image, builds the assets, and then they are copied to the final image.
# ==============================================================================
FROM node:${NODE_VERSION}-alpine AS frontend
WORKDIR /app
COPY package.json package-lock.json ./
RUN npm ci
COPY . .
RUN npm run build

# ==============================================================================
# Final Stage: The Production Image
#
# This is the final, lean image. We copy artifacts from the previous
# stages (vendor files, compiled assets, application code) into a clean
# base image.
# ==============================================================================
FROM base AS final

# Copy vendor files from the 'vendor' stage
COPY --from=vendor /var/www/html/vendor /var/www/html/vendor

# Copy frontend assets from the 'frontend' stage
COPY --from=frontend /app/public/build /var/www/html/public/build

# Copy the rest of the application code
COPY . .

# Run Laravel optimizations
# Caching configuration, routes, and views is crucial for performance.
RUN composer dump-autoload --optimize && \
    php artisan route:cache && \
    php artisan view:cache && \
    php artisan event:cache

# Set correct permissions for storage and bootstrap cache.
# The web server user (www-data) needs to be able to write to these dirs.
RUN chown -R www-data:www-data \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache

# Copy the healthcheck script
COPY .docker/php/docker-healthcheck /usr/local/bin/docker-healthcheck
RUN chmod +x /usr/local/bin/docker-healthcheck

# Healthcheck to make sure FPM is running and responsive
HEALTHCHECK --interval=15s --timeout=3s --start-period=5s \
  CMD [ "docker-healthcheck" ]

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]