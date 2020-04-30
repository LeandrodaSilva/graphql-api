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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
        <style>
            html, body {
                background-color: #131313;
                color: #969c9c;
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

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            @media screen and (min-width: 1360px) {
                .title {
                    font-size: 84px;
                }
            }

            @media screen and (max-width: 1100px) {
                .title {
                    font-size: 7vw;
                }
            }

            @media screen and (max-width: 900px) {
                .title {
                    font-size: 8vw;
                }
            }

            @media screen and (max-width: 600px) {
                .title {
                    font-size: 9vw;
                }
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
                white-space: nowrap;
            }

            .links > a:hover {
                color: #3c96ff;
            }

            .links > a:hover>.icon {
                transform: scale(1.2);
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .icon {
                fill: currentColor;
                display: inline-block;
                font-size: inherit;
                height: 2em;
                overflow: visible;
                vertical-align: -.125em;
                padding-right: 5px;
                transition: transform .2s;
            }

            .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20px; }
            .toggle.ios .toggle-handle { border-radius: 20px; }
            .btn-default .toggle-on {
                color: #797878;
                background-color: #2d2a2a !important;
            }
            .btn-default .toggle-off {
                color: #797878;
                background-color: #000000 !important;
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
                        <a href="{{ route('login') }}" title="Login">@svg('solid/sign-in-alt')</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">@svg('solid/user-plus')</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="top-left links">
                <a>
                    <label class="checkbox-inline">
                        <input id="toggle-event"
                               type="checkbox"
                               data-toggle="toggle"
                               data-size="small"
                               data-style="ios"
                               data-onstyle="default"
                               data-offstyle="default"> Animação
                    </label>
                </a>
            </div>
            <div class="content">
                <div class="title m-b-md">
                    {{ config('app.name', 'Laravel') }}
                </div>

                <div class="links">
                    <a href="https://github.com/LeandrodaSilva">
                        @svg('brands/github') GitHub
                    </a>
                    <a href="https://www.linkedin.com/in/leandro-da-silva-874463a4">
                        @svg('brands/linkedin') LinkedLn
                    </a>
                    <a href="https://www.instagram.com/leandrolds13/">
                        @svg('brands/instagram') Instagram
                    </a>
                    <a href="https://www.facebook.com/leandro.ds13">
                        @svg('brands/facebook') Facebook
                    </a>
                    <a href="https://twitter.com/ld_silva13">
                        @svg('brands/twitter') Twitter
                    </a>
                    <a href="mailto:ld_silva13@gmail.com?subject=Hello&body=Hello Leandro!">
                        @svg('solid/envelope') Email
                    </a>
                    <a href="https://www.youtube.com/user/leleonline100">
                        @svg('brands/youtube') Youtube
                    </a>
                </div>
            </div>
        </div>
        <script src="/js/three.min.js"></script>
        <script src="/js/vanta.waves.min.js"></script>
        <script>
            const options = {
                el: "body",
                mouseControls: true,
                touchControls: true,
                minHeight: 200.00,
                minWidth: 200.00,
                scale: 1.00,
                scaleMobile: 1.00,
                color: 0xc0c0c,
                shininess: 9.00,
                waveHeight: 8.50,
                zoom: 0.65
            };
            let effect;
            if(localStorage.getItem('animation') === 'true' || localStorage.getItem('animation') === null) {
                effect =  VANTA.WAVES(options);
                $('#toggle-event').bootstrapToggle('on');
            } else {
                $('#toggle-event').bootstrapToggle('off');
            }
            $(function() {
                $('#toggle-event').change(function() {
                    if($(this).prop('checked') && localStorage.getItem('animation') === 'false') {
                       effect = VANTA.WAVES(options);

                        localStorage.setItem('animation', 'true');
                    } else {
                        localStorage.setItem('animation', 'false');
                        effect.destroy();
                    }
                })
            })
        </script>
    </body>
</html>
