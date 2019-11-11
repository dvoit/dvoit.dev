<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DVOIT.DEV</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css"/>

    <!-- Custom Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome_blade.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark shadow-lg-purple">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/transparent_dvoit_brand_logo.ico') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <!-- Auth links have been removed -->

                <!-- Custom links -->
                <!-- About Me -->
            </ul>
        </div>
    </div>
</nav>

<div id="brandDiv" class="flex-center position-ref">
    <div class="p p-1"></div>
    <div class="p p-2"></div>
    <div class="p p-3"></div>
    <div class="content">
        <div class="title">
            <b>dvoit . dev</b>
        </div>
    </div>
    <div class="links-laravel">
        <a class="links" style="font-size: 13px" href="https://github.com/dvoit"><i
                class="fab fa-github-alt fa-3x"></i></a>
        <a class="links" style="font-size: 13px" href="https://www.linkedin.com/in/dillon-voit-a392a8175/"><i
                class="fab fa-linkedin-in fa-3x"></i></a>
        <a class="links" style="font-size: 13px" href="mailto:dillon.voit@gmail.com"><i
                class="far fa-envelope fa-3x"></i></a>
    </div>
</div>
</body>
</html>
