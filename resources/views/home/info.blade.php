@php 
use App\Events;
@endphp
@section('title', 'Information')
@section('content')
    @extends('layouts.base')

    <section class="hero is-medium is-primary">
        <div class="hero-head">@include ('layouts.nav')</div>
        <div class="split left is-primary">
            <div class="centered">
                <h1 class="title is-4" style="margin-top: -150%">About this project</h1>
                <p>
                    Lorem Ipsum
                </p>
            </div>
        </div>

        <div class="split right">
                <div id="map"></div>
    </section>
      <script>

var center = [0,0];

var map = L.map('map').setView(center, 3);
L.tileLayer(
  'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 30
  }).addTo(map);

// var me = L.marker([position.coords.latitude, position.coords.longitude]).addTo(map);

// me.bindPopup("<b>You are here</b>").openPopup();

@foreach (Events::all() as $event)
var marker = L.marker([{{ $event->lat }}, {{ $event->lon }}]).addTo(map);

marker.bindPopup("<b>{{ $event->title }} (#{{ $event->id }})</b><br>Event date: {{ $event->date }}<br /><br />{{ $event->address }}", {autoClose: false})
@endforeach
    // });
        // } else {
            // alert("Sorry, your browser does not support HTML5 geolocation.");
        // }
  </script>

@endsection
{{-- Create css file when not tired xD --}}
<style>
        #map { 
            padding-top: 10%;
            height: 900px;
             }

    .split {
        height: 100%;
        width: 50%;
        position: fixed;
        z-index: 1;
        top: 0;
        overflow-x: hidden;
        padding-top: 20px;
    }

    .left {
        left: 0;
    }

    .right {
        right: 0;
    }
    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }
    </style>
