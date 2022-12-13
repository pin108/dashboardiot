<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Iot Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('style/template/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('style/template/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('style/template/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('style/template/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('style/template/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/template/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->4
    <link rel="stylesheet" href="{{ asset('style/template/css/vertical-layout-light/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"
        integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
    
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
        height: 400px;
        width: 100%;
    }
</style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="/dashboard"><img
                        src="{{ asset('style/template/images/logoudinus.png') }}" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="/dashboard"><img
                        src="{{ asset('style/template/images/logoudinus.png') }}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="icon-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
                                aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Comming Soon</p>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{ asset('style/template/images/faces/face28.jpg') }}" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile Edit') }}
                                    </x-dropdown-link>
                            </a>
                            <i class="ti-settings text-primary"></i>

                            <a class="dropdown-item">
                                <i class="ti-power-off text-primary"></i>
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                                </form>

                            </a>
                        </div>
                        {{-- </li>
                <li class="nav-item nav-settings d-none d-lg-flex">
                <a class="nav-link" href="#">
                    <i class="icon-ellipsis"></i>
                </a>
                </li> --}}
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/menu/daerah" aria-expanded="false" aria-controls="ui-basic">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">List Daerah</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="menu/daerah/pati">Pati</a></li>
                                <li class="nav-item"> <a class="nav-link" href="menu/daerah/demak">Demak</a></li>
                                <li class="nav-item"> <a class="nav-link" href="menu/daerah/brebes">Brebes</a></li>
                                <li class="nav-item"> <a class="nav-link" href="menu/daerah/tegal">Tegal</a></li>
                                <li class="nav-item"> <a class="nav-link" href="menu/daerah/boyolali">Boyolali</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="menu/daerah/kendal">Kendal</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="menu/daerah/temanggung">Temanggung</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/menu/peta" aria-expanded="false" aria-controls="form-elements">
                            <i class="icon-columns menu-icon"></i>
                            <span class="menu-title">Peta Sensor</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/menu/tabel">
                            <i class="icon-bar-graph menu-icon"></i>
                            <span class="menu-title">Tabel</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="row">
                                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                    <h3 class="font-weight-bold">Selamat Datang {{ Auth::user()->name }}</h3>
                                    <h6 class="font-weight-normal mb-0">All systems are running smoothly! <span
                                            class="text-primary"></span></h6>
                                </div>
                                <div class="col-12 col-xl-4">
                                    <div class="justify-content-end d-flex">
                                        <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                            <button class="btn btn-sm btn-light bg-white dropdown-toggle"
                                                type="button" id="dropdownMenuDate2" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="true">
                                                <i class="mdi mdi-calendar"></i> Today (<?php
                                                $t = time();
                                                echo date('Y-m-d', $t);
                                                ?>)
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card tale-bg">
                                <div class="card-people mt-auto">
                                    <img src="{{ asset('style/template/images/dashboard/people.svg') }}"
                                        alt="people">
                                    <a class="weatherwidget-io" href="https://forecast7.com/en/n7d01110d44/semarang/"
                                        data-label_1="SEMARANG" data-label_2="WEATHER" data-days="3"
                                        data-theme="pure">SEMARANG WEATHER</a>
                                    <script>
                                        ! function(d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0];
                                            if (!d.getElementById(id)) {
                                                js = d.createElement(s);
                                                js.id = id;
                                                js.src = 'https://weatherwidget.io/js/widget.min.js';
                                                fjs.parentNode.insertBefore(js, fjs);
                                            }
                                        }(document, 'script', 'weatherwidget-io-js');
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin transparent">
                            <div class="row">
                                <div class="col-md-6 mb-4 stretch-card transparent">
                                    <div class="card card-tale">
                                        <div class="card-body">
                                            <a href='/menu/tabel'><p class="mb-4">List Semua Data</p></a>
                                            
                                            <p class="fs-30 mb-2">Table Iot</p>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 stretch-card transparent">
                                    <div class="card card-dark-blue">
                                        <div class="card-body">
                                            <a href='/menu/daerah'><p class="mb-4">Lihat Sensor IoT</p></a>
                                     
                                            <p class="fs-30 mb-2">7</p>
                                            <p>Daerah dan Realtime</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                                    <div class="card card-light-blue">
                                        <div class="card-body">
                                            <a href='/menu/peta'><p class="mb-4">Peta Lokasi</p></a>
                                            <p class="fs-30 mb-2">58</p>
                                            <p>Alat IoT</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 stretch-card transparent">
                                    <div class="card card-light-danger">
                                        <div class="card-body">
                                            <p class="mb-4">Comming Soon</p>
                                            <p class="fs-30 mb-2">88%</p>
                                            <p>Prediksi Sekarang</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">Peta</p>
                                    <center><div id="map"></div></center>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="card-title">Download Datasheet</p>
                                    </div>
                                    <p class="font-weight-500">Total Jumlah DataSheet Saat Ini Adalah : </p>
                                    <a href="http://103.30.1.54:900/api/tabel/export"><button type="button"
                                            class="btn btn-primary">Download Data</button></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">IoT
                            dashboard</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Developer Team IoT <i
                                class="ti-heart text-danger ml-1"></i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
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
    <!-- plugins:js -->
    <script src="{{ asset('style/template/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('style/template/vendors/chart.js/Chart.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->

    <script src="{{ asset('style/template/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('style/template/js/off-canvas.js') }}"></script>
    <script src="{{ asset('style/template/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('style/template/js/template.js') }}"></script>
    <script src="{{ asset('style/template/js/settings.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('style/template/js/dashboard.js') }}"></script>
    <script src="{{ asset('style/template/js/Chart.roundedBarCharts.js') }}"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

    <!-- End custom js for this page-->
</body>

</html>
