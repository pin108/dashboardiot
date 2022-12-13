@extends('layouts.main')

@section('container')

{{-- @push('scripts')@endpush --}}

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
 integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="
 crossorigin=""/>
  <!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
 integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg="
 crossorigin=""></script>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
crossorigin=""></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




    <style type="text/css">
        #map {
            height: 500px;
            width: 90%;
        }
    </style>

    <div style="text-align: center;" class="mt-5">
        <h2 class="text-capitalize">Lokasi Sensor IoT</h2>
        <h2>IOT All</h2>
        <center><div id="map"></div></center>
    </div>

    <script>                            //coordinate lokasi
        var mymap = L.map('map').setView([-2.901303329199493, 110.01037334296285], 5);
        
        // Hybrid: s,h;
        // Satellite: s;
        // Streets: m;
        // Terrain: p;
        
        
        L.tileLayer('http://{s}.google.com/vt?lyrs=s&x={x}&y={y}&z={z}',{
        maxZoom: 15,
        subdomains:['mt0','mt1','mt2','mt3']
        }).addTo(mymap);
        
        
        $( document ).ready(function(){
        $.getJSON('http://103.30.1.54:900/api/get/peta', function(data) {
        $.each(data, function(index) {
        L.marker([parseFloat(data[index].latitude), parseFloat(data[index].longitude)])
                .bindPopup(data[index].nama_iot)
        .addTo(mymap);
         });
        });
        });
        
        </script>
        <br>
        <br>
<center>
<div class="col-lg-5 mb-3"><a href="javascript:window.history.back();">
    <button type="button" class="btn btn-primary">Kembali</button></a></div>
</center>
    {{-- <script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap"></script> --}}
</body>
@endsection
</html>