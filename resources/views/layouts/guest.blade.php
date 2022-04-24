<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Graqle - E-Voting') }}</title>

        <!-- Fav Icon  -->
        <link rel="shortcut icon" href="./images/favicon.png">

        <!-- Page Title  -->
        <title>Graqle - E-Voting</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=2.7.0') }}">
        <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=2.7.0') }}">

        <!-- Scripts -->
        {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
    </head>
    <body class="nk-body bg-lighter ">
        {{ $slot }}
        <x-footer/>
    </body>
</html>