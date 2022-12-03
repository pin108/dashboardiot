 @extends('layouts.main')

 @section('container')
     <div class="col-md-12 grid-margin stretch-card">
         <div class="card">
             <div class="card-body">

                 <p class="card-title">Table IoT</p>

                 <div class="row">
                     <div>
                     </div>
                     <div class="col-12">
                         <div class="table-responsive">
                             <table id="table" class="display expandable-table" style="width:100%">
                                 <thead>
                                     <tr>
                                         <th scope="col">NO</th>
                                         <th scope="col">Id_iot</th>
                                         <th scope="col">Alamat Daerah</th>
                                         <th scope="col">Data Kecepatan Angin</th>
                                         <th scope="col">Data Suhu Udara</th>
                                         <th scope="col">Data Kelembaban Udara</th>
                                         <th scope="col">Data Ph Tanah</th>
                                         <th scope="col">Data Kelembaban Tanah</th>
                                         <th scope="col">Data Suhu Tanah</th>
                                         <th scope="col">Status Alat</th>
                                         <th scope="col">Waktu</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     @foreach ($data as $dataiot)
                                         <tr>
                                             <th scope="row">{{ $dataiot->id }}</th>
                                             <td>{{ $dataiot->id_iot }}</td>
                                             <td>{{ $dataiot->alamat }}</td>
                                             <td>{{ $dataiot->datakecepatanangin }}</td>
                                             <td>{{ $dataiot->datasuhuudara }}</td>
                                             <td>{{ $dataiot->datakelembabanudara }}</td>
                                             <td>{{ $dataiot->dataphtanah }}</td>
                                             <td>{{ $dataiot->datakelembabantanah }}</td>
                                             <td>{{ $dataiot->datasuhutanah }}</td>
                                             <td>{{ $dataiot->statusalat }}</td>
                                             <td>{{ $dataiot->tanggal }}</td>
                                         </tr>
                                     @endforeach
                                 </tbody>

                             </table>
                         </div>

                         <div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <script>
         $(document).ready(function() {
             $('#table').DataTable();
         });
     </script>
     </div>
     </div>
     </div>
 @endsection
