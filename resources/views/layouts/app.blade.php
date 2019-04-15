<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CrazyMan') }} @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="icon" href="{{ config('app.url','http://localhost')  }}/img/bitbug_favicon.ico" type="image/x-icon">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts._header')

        <div class="py-4 container">
            @include('layouts._message')
            @yield('content')
        </div>

        @include('layouts._footer')
    </div>

    <script src="js/sweetalert.min.js"></script>

    <!-- Include this after the sweet alert js file -->
    @include('sweet::alert')
</body>
</html>
