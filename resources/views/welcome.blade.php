<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<!-- CSS Files -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/azzara.min.css') }}">

<!-- CSS Just for demo purpose, don't include it in your project -->
<link rel="stylesheet" href="{{ asset('css/demo.css') }}">
        <!-- Styles -->
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
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
 <!-- Page Content --><br>
 <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Redditch Hockey Club Members</h1>
            <p class="lead">This website is for playing members of Redditch Hockey club</p>
            <p class="lead">If you are looking for our club website please click <a href="https://www.redditchhc.co.uk">Here</a></p>
            <hr class="my-4">
            <p class="lead">
                @auth
                <script>window.location = "/home";</script>
            @else
            <a href="{{ route('login') }}"><button class="btn btn-primary btn-round btn-lg">Login</button></a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"><button class="btn btn-primary btn-border btn-round btn-lg">Register</button></a>
                @endif
                @endauth
            </p>
          </div>
 </div>
    </body>
</html>
