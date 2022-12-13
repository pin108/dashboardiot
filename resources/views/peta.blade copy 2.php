
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
 integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="
 crossorigin=""/>
  <!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
 integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg="
 crossorigin=""></script>

 !-- Load Leaflet from CDN -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
crossorigin=""></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<div id="map">
<div id="map">
<div class="row">
<div id="mapid">
<script>                            //coordinate lokasi
var mymap = L.map('mapid').setView([-2.901303329199493, 110.01037334296285], 5);

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