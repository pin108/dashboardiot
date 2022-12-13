@extends('layouts.main')

@section('container')
    <style type="text/css">
        #map {
            height: 400px;
        }
    </style>
    <div class="container mt-5">
        <h2>Peta IoT Terkini</h2>
        <div id="map"></div>
    </div>

    <script type="text/javascript">
        @foreach ($data as $item)
            let map;
            let infoWindow;
            let mapOptions;
            let bounds;

            function initMap() {
                mapOptions = {
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                const myLatLng = {
                    lat: {{ $item['latitude'] }},
                    lng: {{ $item['longitude'] }}
                };
                infoWindow = new google.maps.InfoWindow;

                // const info = {{ $item['nama_iot'] }}
                bounds = new google.maps.LatLngBounds();

                map = new google.maps.Map(document.getElementById("map"), mapOptions);

                bounds.extend(myLatLng);
                var location;
                var marker;

                function addMarker(lat, lng, info) {
                    location = new google.maps.LatLng(lat, lng);
                    bounds.extend(location);
                    marker = new google.maps.Marker({
                        map: map,
                        position: location,
                        title: "{{ $item['nama_iot'] }}",
                    });
                    map.fitBounds(bounds);
                    bindInfoWindow(marker, map, infoWindow, info);
                }

                function bindInfoWindow(marker, map, infoWindow, html) {
                    google.maps.event.addListener(marker, 'click', function() {
                        infoWindow.setContent(html);
                        infoWindow.open(map, marker);
                    });
                }
                // new google.maps.Marker({
                //     position: myLatLng,
                //     map,
                //     title: "{{ $item['nama_iot'] }}",
                // });
                // map.fitBounds(bounds);
            }
        @endforeach
        window.initMap = initMap;
    </script>

    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap"></script>
@endsection
