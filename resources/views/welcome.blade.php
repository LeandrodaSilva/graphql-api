<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .opacity {
                opacity: 0;
            }

            .opacity:hover {
                transition: opacity ease-in-out 0.5s;
                opacity: 1;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                transition: color 0.5s;
            }
            .links > a:hover {
                color: #ff8500;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="opacity">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="opacity">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{ config('app.name', 'Laravel') }}
                </div>

                <div class="links">
                    <a href="https://github.com/LeandrodaSilva">GitHub</a>
                    <a href="https://www.linkedin.com/in/leandro-da-silva-874463a4">LinkedLn</a>
                    <a href="https://www.instagram.com/leandrolds13/">Instagram</a>
                    <a href="https://www.facebook.com/leandro.ds13">Facebook</a>
                    <a href="https://twitter.com/ld_silva13">Twitter</a>
                    <a href="mailto:ld_silva13@gmail.com?subject=Hello&body=Hello Leandro!">Email</a>
                    <a href="https://www.youtube.com/user/leleonline100">Youtube</a>
                </div>
            </div>
        </div>
    </body>
</html>
