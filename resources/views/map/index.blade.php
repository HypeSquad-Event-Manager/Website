@php
    use App\Events;
@endphp

@section('title', 'Map')
@section('content')
    @extends('layouts.base')

<style type="text/css">
    #map { height: 700px; }
</style>
    <section class="hero is-medium is-primary">
        <div class="hero-head">@include ('layouts.nav')</div>
            <div id="map"></div>
    </section>
  <script>
var center = [0, 0];
var map = L.map('map').setView(center, 3);
L.tileLayer(
  'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 30
  }).addTo(map);

@foreach (Events::all() as $event)
var marker = L.marker([{{ $event->location }}]).addTo(map);

marker.bindPopup("<b>{{ $event->title }} (#{{ $event->id }})</b><br>This is the location you need on {{ $event->date }}", {autoClose: false}).openPopup();
@endforeach
  </script>

@endsection

