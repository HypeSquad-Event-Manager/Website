@php
use App\Events;
@endphp

@section('title', 'Dashboard')
@section('content')
@extends('layouts.base')

<section class="hero is-medium is-primary bg">
    <div class="hero-head">@include ('layouts.nav')</div>

        <div class="container" style="z-index: 10;">
        <div class="columns is-multiline is-centered">
            @foreach (Events::all() as $event)
            @if ($event->eventID == $eventID)
            <div class="column">
                <div class="box is-parent" style="max-width: 500px; min-height: 400px;">
                    <div class="content has-text-centered" style="white-space: inherit;
                  word-break: break-word;">
                        <p class="title" style="padding: 10px;">{{ $event->title }}</p>
                        <p class="subtitle" style="padding: 10px;">{{ $event->date }}</p>
                        <div class="content">
                            <p>{{ $event->address }}</p>
                            <small><p>Created by: {{ $event->creator }} <br /><br /> Event ID: {{$eventID}}</p></small>

                            <br />
                            <button class="button is-large is-primary is-outlined">More Info</button>
                        </div>
                    </div>
                </div>
            </div>

            @endif
            @endforeach
        </div>

        </div>

    <br />
    <br />

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
    @if ($event->eventID == $eventID)
    var marker = L.marker([{{ $event->lat }}, {{ $event->lon }}]).addTo(map);

    marker.bindPopup("<b>{{ $event->title }} (#{{ $event->id }})</b><br>Event date: {{ $event->date }}<br /><br />{{ $event->address }} <br /><br />Event ID: {{ $event->eventID }}", {autoClose: false})
    @endif
    @endforeach
</script>

<style type="text/css">
    #map { height: 500px;   width: 50%;  margin: auto;  padding: 10px;
    }
</style>

@endsection
