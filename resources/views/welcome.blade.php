<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
        body, html {
        height: 100%;
        color: #777;
        line-height: 1.8;
        }

        /* Create a Parallax Effect */
        .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }

        /* First image (Logo. Full height) */
        .bgimg-1 {
        background-image: url('/w3images/parallax1.jpg');
        min-height: 100%;
        }

        /* Second image (Portfolio) */
        .bgimg-2 {
        background-image: url("/w3images/parallax2.jpg");
        min-height: 400px;
        }

        /* Third image (Contact) */
        .bgimg-3 {
        background-image: url("/w3images/parallax3.jpg");
        min-height: 400px;
        }

        .w3-wide {letter-spacing: 10px;}
        .w3-hover-opacity {cursor: pointer;}

        /* Turn off parallax scrolling for tablets and phones */
        @media only screen and (max-device-width: 1024px) {
        .bgimg-1, .bgimg-2, .bgimg-3 {
            background-attachment: scroll;
        }
        }
        </style>

        <title>Laboratorios</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <!--<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links2 {
                color: #636b6f;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>-->
    </head>
    <body>
        <div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    @if (Route::has('login'))
        @auth
        <a href="{{ url('/home') }}" class="w3-bar-item w3-button">Inicio</a>
            @else
            <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-user"></i> Login</a>
    <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-th"></i> Registrar</a>

                    @endauth
            @endif
    <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <br><br><br><br><br><br><br><br><span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Hola <span class="w3-hide-small">ACTIVIDADES</span> LABS</span>
  </div>
</div>  
    
    
    <!--
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Registrar</a>
                    @endauth
                </div>
            @endif

            
        </div>-->
    </body>
</html>

