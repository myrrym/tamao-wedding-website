<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Symfony\Component\HttpFoundation\IpUtils;
use Symfony\Component\HttpFoundation\Response;

class SetMinioEndpoint
{
    /**
     * The trusted proxies for the application.
     * This is crucial when using Cloudflare.
     *
     * @var array|string|null
     */
    protected $proxies = '*'; // Or be more specific with Cloudflare IPs

    /**
     * The internal network range.
     *
     * @var string
     */
    protected $internalSubnet = '192.168.0.0/16';

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Set trusted proxies to correctly resolve the client's IP behind Cloudflare
        Request::setTrustedProxies(
             [$request->server->get('REMOTE_ADDR')],
             Request::HEADER_X_FORWARDED_FOR |
             Request::HEADER_X_FORWARDED_HOST |
             Request::HEADER_X_FORWARDED_PORT |
             Request::HEADER_X_FORWARDED_PROTO |
             Request::HEADER_X_FORWARDED_AWS_ELB
        );

        // Check if the request IP is within the internal network range
        if (IpUtils::checkIp($request->ip(), $this->internalSubnet)) {
            $internalEndpoint = env('MINIO_INTERNAL_ENDPOINT');
            
            if ($internalEndpoint) {
                // Override the s3 endpoint config for this request only
                Config::set('filesystems.disks.s3.endpoint', $internalEndpoint);
            }
        }
        
        return $next($request);
    }
}
