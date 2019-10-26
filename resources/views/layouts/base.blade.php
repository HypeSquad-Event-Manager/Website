<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Hypesquad Events" />
    <meta property="og:description" content="An easy events tracker for Discord hypesquad members" />
    <meta name="title" content="Hypesquad Events">
    <meta name="description" content="Hypesquad events is an easy events tracker for Discord hypesquad members">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Hypesquad Events</title>
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')
</head>
<body>
@yield('content')
</body>
</html>
