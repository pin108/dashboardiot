 @extends('layouts.main')

 @section('container')
     <div class="row">
         <div class="col">
             <div class="row">
                 <div class="col-lg-6 mb-4">
                     <div class="card text-white bg-primary shadow">
                         <div class="card-body">
                             <p class="m-0">Brebes</p>
                             <a href="{{ url('/menu/daerah/brebes') }}"><button type="button"
                                     class="btn btn-primary">Lihat
                                     Selengkapnya</button></a>
                         </div>

                     </div>
                 </div>
                 <div class="col-lg-4 mb-4">
                     <div class="card text-white bg-primary shadow">
                         <div class="card-body">
                             <p class="m-0">Temanggung</p>
                             <a href="{{ url('/menu/daerah/temanggung') }}"><button type="button"
                                     class="btn btn-primary">Lihat
                                     Selengkapnya</button></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 mb-4">
                     <div class="card text-white bg-primary shadow">
                         <div class="card-body">
                             <p class="m-0">Demak</p>
                             <a href="{{ url('/menu/daerah/demak') }}"><button type="button"
                                     class="btn btn-primary">Lihat
                                     Selengkapnya</button></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 mb-4">
                     <div class="card text-white bg-primary shadow">
                         <div class="card-body">
                             <p class="m-0">Boyolali</p>
                             <a href="{{ url('/menu/daerah/boyolali') }}"><button type="button"
                                     class="btn btn-primary">Lihat
                                     Selengkapnya</button></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 mb-4">
                     <div class="card text-white bg-primary shadow">
                         <div class="card-body">
                             <p class="m-0">Pati</p>
                             <a href="{{ url('/menu/daerah/pati') }}"><button type="button"
                                     class="btn btn-primary">Lihat
                                     Selengkapnya</button></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 mb-4">
                     <div class="card text-white bg-primary shadow">
                         <div class="card-body">
                             <p class="m-0">Kendal</p>
                             <a href="{{ url('/menu/daerah/kendal') }}"><button type="button"
                                     class="btn btn-primary">Lihat
                                     Selengkapnya</button></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 mb-4">
                     <div class="card text-white bg-primary shadow">
                         <div class="card-body">
                             <p class="m-0">Tegal</p>
                             <a href="{{ url('/menu/daerah/tegal') }}"><button type="button"
                                     class="btn btn-primary">Lihat
                                     Selengkapnya</button></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     @endsection
