<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('slick/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('slick/slick-theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    </head>
    <body>
        @include('shared.navbar')
        @yield('content')

        <script src="{{ asset('js/libs/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('slick/slick.js') }}"></script>
        <script src="{{ asset('js/libs/wow.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
