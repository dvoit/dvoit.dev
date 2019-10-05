<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><span>Welcome to DVOIT.DEV</span></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

        <!-- Custom Styles -->
        <link rel="stylesheet" href="{{HTML::style('css/welcome_blade.css')}}}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
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
                    <b>dvoit.dev</b>
                </div>

                <div class="links">
                    <!--
                       <a href="https://laravel.com/docs">Docs</a>
                       <a href="https://laracasts.com">Laracasts</a>
                        <a href="https://laravel-news.com">News</a>
                          <a href="https://blog.laravel.com">Blog</a>
                        <a href="https://nova.laravel.com">Nova</a>
                        <a href="https://forge.laravel.com">Forge</a>
                    -->
                    <a href="https://github.com/dvoit"><i class="fab fa-github-alt fa-3x"></i></a>
                    <a href="https://www.linkedin.com/in/dillon-voit-a392a8175/"><i class="fab fa-linkedin-in fa-3x"></i></a>
                    <a href="mailto:dillon.voit@gmail.com"><i class="far fa-envelope fa-3x"></i></a>
                </div>
            </div>
        </div>
    </body>
</html>
