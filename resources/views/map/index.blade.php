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


navigator.geolocation.getCurrentPosition(function(position) {
    var positionInfo = "Your current position is (" + "Latitude: " + position.coords.latitude + ", " + "Longitude: " + position.coords.longitude + ")";
    console.log(positionInfo)
});

var center = [0,0];

var map = L.map('map').setView(center, 3);
L.tileLayer(
  'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 30
  }).addTo(map);

@foreach (Events::all() as $event)
var marker = L.marker([{{ $event->lat }}, {{ $event->lon }}]).addTo(map);

marker.bindPopup("<b>{{ $event->title }} (#{{ $event->id }})</b><br>Event date: {{ $event->date }}<br /><br />{{ $event->address }}", {autoClose: false})
@endforeach
  </script>

@endsection

