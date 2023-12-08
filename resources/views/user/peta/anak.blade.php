@extends('master.header')

@section('link')
<link rel="stylesheet" href="css/user.css">

{{-- leaflets --}}
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
crossorigin=""/>

{{-- leaflets Javascript --}}
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
crossorigin=""></script>

@endsection

@section('title')
Peta Anak
@endsection

@section('isi')

<div class="title-peta">
    <h2>Peta Lokasi Anak</h2>
</div>

<div class="container-peta">
    <div id="map"></div>
</div>

@endsection

@section('addScript')
{{-- javascript untuk maps --}}
<script>
    var locations = [
      ["LOCATION_1", 11.8166, 122.0942],
      ["LOCATION_2", 11.9804, 121.9189],
      ["LOCATION_3", 10.7202, 122.5621],
      ["LOCATION_4", 11.3889, 122.6277],
      ["LOCATION_5", 10.5929, 122.6325]
    ];
    
    var map = L.map('map').setView([11.206051, 122.447886], 8);
    mapLink =
      '<a href="http://openstreetmap.org">OpenStreetMap</a>';
    L.tileLayer(
      'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; ' + mapLink + ' Contributors',
        maxZoom: 18,
      }).addTo(map);
    
    for (var i = 0; i < locations.length; i++) {
      marker = new L.marker([locations[i][1], locations[i][2]])
        .bindPopup(locations[i][0])
        .addTo(map);
    }
    
</script>
@endsection