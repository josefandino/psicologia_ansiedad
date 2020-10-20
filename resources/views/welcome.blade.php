<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Psicologia de la ansiedadansiedad</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            body::-webkit-scrollbar {width:1px;height:20px;background:#49d2fe;}
            body::-webkit-scrollbar-thumb {background:#024358;border-radius: 2px;}

            .bgCreate {width:100%;height:100%;
            top:0px;left: 0;
            position:absolute;z-index:-2;}
            .bgCreate img{width:100%;height:100%;
            object-fit:cover;position:fixed}

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

            .content {
                text-align: center;
            }

            .title {display:block;
                line-height:2rem;
                padding: 2rem;
                background:#02e3eb;;
                border-radius:1rem;
                font-size: 3rem;
                font-style: italic
            }
            .links {
                background: #02e3eb;
                border-radius:5px;
            }

            .links > a {                
                color: #636b6f;
                padding: .5rem 1.5rem;
                display:inline-block;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                transition:all .2s ease;;
            }
            .links > a:nth-child(1){border-right:1px solid #ededed;}
            .links > a:hover{transform:scale(1.02) translateY(-2px);
                box-shadow:0 0 3px 3px rgba(0,0,0,.2);border-radius:5px;}

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
                        <a href="{{ url('/dashboard') }}">Panel</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Mi registro de pulsaciones
                </div>

                
            </div>
        </div>
        <div class="bgCreate">
            <img src="{{ asset('img/bgHome.jpg') }}" alt="">
         </div>
    </body>
</html>
