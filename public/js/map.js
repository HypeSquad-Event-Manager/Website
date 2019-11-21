
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
        // console.log(data['display_name'])
        document.getElementById('address').value = data['display_name'];
    }).catch(err => {
        console.log(err)
    });
    var markersecond = L.marker([lat, lon]).addTo(map);

    markersecond.bindPopup("<b>New Event</b><br>This is the new location for an event", {
        autoClose: false
    }).openPopup();

    console.log("You clicked the map at latitude: " + lat + " and longitude: " + lon);

    document.getElementById("lat").value = lat;
    document.getElementById("lon").value = lon;


    map.on('click', function() {
        map.removeLayer(markersecond);
    });
});