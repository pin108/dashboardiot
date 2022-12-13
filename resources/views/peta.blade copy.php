<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Sensor IoT</title>
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

     <div id="map"></div>
     <style>
     #mapid { height: 700px; }

     .Label-bidang {
        font-size:10pt;
        color:aquamarine;
        text-align: center;
     }
    </style>
</head>
<body>
<p>pilih lokasi</p>
<select>
    <option value="1">1</option>
</select>

<div id="mapid"></div>

</body>

<script>                            //coordinate lokasi
var mymap = L.map('mapid').setView([-6.901303329199493, 109.01037334296285], 13);

// Hybrid: s,h;
// Satellite: s;
// Streets: m;
// Terrain: p;


L.tileLayer('https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
}).addTo(mymap);

$( document ).ready(function(){
    $.getJSON('http://103.30.1.54:900/api/get/location', function(data) {
    $.each(data, function(index) {
    L.marker([parseFloat(data[index].lokasi_latitude), parseFloat(data[index].lokasi_longitude)])
            .bindPopup(data[index].kabupaten)
    .addTo(mymap);

    
     });
});
});

    // $.getJSON('assets/map.geojson', function(json) {
    //     geoLayer = L.geoJson(json,{
    //         style: function(features){
                
    //             return {
    //                 fillOpacity : 1,
    //                 weight: 5,
    //                 opacity: 1,
    //                 color: "#ffbbcc"
    //             };

                
    //         },
    //         onEachFeature: function(features, layer){
    //             // window.alert(features.properties.nama)
    //             // var labelpop =  L.DivIcon({
    //             // className: 'my-div-icon',
    //             // html: '<img class="my-div-image" src="http://png-3.vector.me/files/images/4/0/402272/aiga_air_transportation_bg_thumb"/>'+
    //             //     '<span class="my-div-span">RAF Banff Airfield</span>'
    //             //         })
    //             // layer.on('click',(e)=>{
    //             //     $.getJSON('/lihat/hasiljson/', function(detail){
    //             //         $.each(detail, function(index){
    //             //             // alert(detail[index].alamat)

    //             //             var html ='<h5>Nama Lokasi : '+ detail[index].nama+'<h5>';
    //             //                 html+='<h3> Alamat : '+detail[index].alamat+'<h3>';
    //             //                 html+='<img src="assets/'+detail[index].gambar+'" height="100px" weight="30px">';
    //             //                 L.popup()
    //             //                         .setLatLng(layer.getBounds().getCenter())
    //             //                         .setContent(html)
    //             //                         .openOn(mymap);

    //             //         });
    //             //     });
    //             // });

                // L.marker(layer.getBounds().getCenter()).bindPopup(features.properties.nama)
                // .openPopup().addTo(mymap);
                

                
                // layer.addTo(mymap);
//             }
//         });
// });


</script>
</html>