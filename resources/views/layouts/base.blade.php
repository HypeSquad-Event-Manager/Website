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
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/leaflet.css') }}"> --}}
     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
   integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
   crossorigin=""></script>
    {{-- <script src="{{ asset('js/leaflet.js') }}"></script> --}}

       @yield('js')
</head>
<body>
@yield('content')
</body>
</html>
