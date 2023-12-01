@extends('master.layoutsAdmin')

@section('link')
<link rel="stylesheet" href="css/manajemenProfil.css">

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

@section('isi')

<div class="row g-2 halaman-peta">
    <div class="col-sm">
        <div class="title-peta rounded border-bottom">
            <h3 class="m-0">Filter Lokasi Ibu Hamil Belum Terdaftar</h3>
        </div>
        <div class="bg-filter-peta rounded">
            
            <div class="input-group input-group-merge filter-peta">
              <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
              <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31" />
            </div>  

            <div class="filter-peta">        
                <select class="formbold-form-input" name="Desa" id="Desa">
                  <option value="Pilih Desa">Pilih Kecamatan/Kelurahan</option>
                  <option value="Desa1">Desa 1</option>
                  <option value="Desa2">Desa 2</option>
                  <option value="Desa3">Desa 3</option>
                </select>
            </div>

            <div class="filter-peta">        
                <select class="formbold-form-input" name="Desa" id="Desa">
                  <option value="Pilih Desa">Pilih Desa</option>
                  <option value="Desa1">Desa 1</option>
                  <option value="Desa2">Desa 2</option>
                  <option value="Desa3">Desa 3</option>
                </select>
            </div>

            <div class="d-grid gap-2 filter-peta">
                <button class="btn btn-primary" type="button">Cari Lokasi</button>
            </div>
              
        </div>
    </div>

    <div class="col-sm-7">
        <div id="map"></div>
    </div>
      
</div>

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