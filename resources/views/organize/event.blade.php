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
                    <input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" placeholder="Event Title"> @if ($errors->has('title'))
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

var popup = L.popup();

map.on('click', function(e) {

    var coord = e.latlng;
    var lat = coord.lat;
    var lon = coord.lng;
    var apiUrl = 'https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=' + lat + '&lon=' + lon;
    fetch(apiUrl).then(response => {
        return response.json();
    }).then(data => {
        // console.log(data)
        document.getElementById('address').value = data['display_name'];

        var markersecond = L.marker([lat, lon]).addTo(map);

        markersecond.bindPopup(`<b>New Event</b><br>Location: ${data['display_name']}`, {
            autoClose: false
        }).openPopup();

    // console.log("You clicked the map at latitude: " + lat + " and longitude: " + lon);

    document.getElementById("lat").value = lat;
    document.getElementById("lon").value = lon;


    map.on('click', function() {
        map.removeLayer(markersecond);
    });
        }).catch(err => {
        console.log(err)
    });
});
</script>

                    <input class="is-invisible {{ $errors->has('lat') ? 'is-danger' : '' }}" type="text" id="lat" name="lat" placeholder="Event Information"></input>

                    <input class="is-invisible {{ $errors->has('lon') ? 'is-danger' : '' }}" type="text" id="lon" name="lon" placeholder="Event Information"></input>


                    <input class="is-invisible {{ $errors->has('address') ? 'is-danger' : '' }}" type="text" id="address" name="address" placeholder="Event Information"></input>
                </div>
            </div>

            <input type="date" name="date" class="input">
            <br />
            <br />
            <button class="button is-dark is-fullwidth">Submit</button>

        </form>

</section>

@endsection

