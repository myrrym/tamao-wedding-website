<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="assets/logo.svg">

        @vite(['resources/css/app.scss', 'resources/js/app.js'])

        <title>Ashaari & Miriam</title>
        <style>
            @font-face {
                font-family: JacquesFrancois;
                src: url(assets/fonts/JacquesFrancois-Regular.ttf);
            }
            body {
                height: 100dvh;
                width: 100dvw;
                font-family: JacquesFrancois;
            }
            .messages {
                height: 100dvh;
                background-color: #007099;
            }
            .memories {
                height: 100dvh;
                background-color: #E86049;
            }
            .bar {
                width: 3%;
                height: 100dvh;
                position: absolute;
            }
            .bar-messages {
                box-shadow: -4px 0px 4px 0px rgba(0, 0, 0, 0.25);
            }
            .bar-memories {
                box-shadow: 4px 0px 4px 0px rgba(0, 0, 0, 0.25);
            }
            .bar-messages-left {
                background-color: #019BD3;
                left: 44%;
            }
            .bar-messages-right {
                background-color: #00BBFF;
                left: 47%;
                z-index: 50;
            }
            .bar-memories-left {
                background-color: #EFD7D3;
                left: 50%;
                z-index: 50;
            }
            .bar-memories-right {
                background-color: #EA9080;
                left: 53%;
            }
            @yield('style')
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">

                <div class="messages col-6">
                    <div class="bar bar-messages bar-messages-left"></div>
                    <div class="bar bar-messages bar-messages-right"></div>
                </div>

                <div class="memories col-6">
                    <div class="bar bar-memories bar-memories-left"></div>
                    <div class="bar bar-memories bar-memories-right"></div>
                </div>

            </div>
            @yield('content')
        </div>
    </body>
</html>