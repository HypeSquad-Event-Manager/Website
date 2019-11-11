@php
use App\Events;
@endphp
@section('title', 'New Event')
@section('content')
    @extends('layouts.base')
<style type="text/css">
    #map { height: 400px; }
</style>
    <section class="hero is-medium is-primary">
        <div class="hero-head">@include ('layouts.nav')</div>
                <form action="{{ url('/organize/new/event') }}" method="post">
                    @csrf
                    <form action="/organize/new/event">

                    <label class="label">Event Information</label>
                    <div class="field is-grouped">
                        <div class="control is-expanded">
                            <input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" placeholder="Event Title">
                            @if ($errors->has('title'))
                                <p class="help has-text-danger">{{ $errors->first('title') }}</p>
                            @endif
                        </div>
                    </div>
                        <div class="field is-grouped">
                            <div class="control is-expanded">

                                            <div id="map"></div>

                                  <script>


var center = [0, 0];


var map = L.map('map').setView(center, 3);

L.tileLayer(
  'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 30
  }).addTo(map);

@foreach (Events::all() as $event)
var marker = L.marker([{{ $event->location }}]).addTo(map);


marker.bindPopup("<b>{{ $event->title }}</b><br>This is the location you need on {{ $event->date }}", {autoClose: false}).openPopup();
@endforeach
var popup = L.popup();

map.on('click', function(e){

  var coord = e.latlng;
  var lat = coord.lat;
  var lng = coord.lng;
      var marker = L.marker([lat, lng]).addTo(map);

      marker.bindPopup("<b>New Event</b><br>This is the new location for an event", {autoClose: false}).openPopup();


  console.log("You clicked the map at latitude: " + lat + " and longitude: " + lng);

            document.getElementById("location").innerHTML = lat + ' ' + lng;

  });




  </script>

  <div class="{{ $errors->has('location') ? 'is-danger' : '' }}" type="text" id="location"  name="location" placeholder="Event Information"></div>

{{--                                   <input class="input {{ $errors->has('location') ? 'is-danger' : '' }}" type="text"  name="location" placeholder="Event Information">
                                @if ($errors->has('location'))
                                    <p class="help has-text-danger">{{ $errors->first('location') }}</p>
                                @endif --}}


                            </div>
                        </div>  

                        <input type="date" name="date" class="input">
                        <br />
                        <br />
                        <button class="button is-dark is-fullwidth">Submit</button>



                </form>

    </section>

@endsection

