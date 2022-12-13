<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class reportiotclient extends Controller
{
    //  public function table(){

    //     $response = Http::get('http://103.30.1.54:900/api/get/ssensor');
    //     $data = json_decode($response, True);
    //     $datatable = view('main', compact('data'));
    //     return $datatable;
    // }

    public function table()
    {
        $data = DB::connection('pgsql2')->table('iotapimodels')->get();

        return view('table', compact('data'));
    }

    public function iotreport(Request $request)
    {
        $titik = request('id');


        $url = "http://103.30.1.54:900/api/get/dataiot/" .$titik;
        // $url = 'http://103.30.1.54:900/api/get/reportiotssawah/3';
        $response = Http::get($url);
        $data = json_decode($response, true);
        if ($data == null) {
            return view('/datanotfound');
        } else {
            $user_data = $data;
            $user_data = array_slice($user_data, 0);
            $sswahpage = view('Mdaerah/output',compact('data'));
        return $sswahpage; 
        }
    }

}