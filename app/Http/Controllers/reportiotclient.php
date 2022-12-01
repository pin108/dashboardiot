<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class reportiotclient extends Controller
{
    //  public function table(){
        
    //     $response = Http::get('http://compute.dinus.ac.id:900/api/get/ssensor');
    //     $data = json_decode($response, True);
    //     $datatable = view('main', compact('data'));
    //     return $datatable;
    // }

    public function table(){
        $url = "http://compute.dinus.ac.id:900/api/get/ssensor/";
        // $url = 'http://compute.dinus.ac.id:900/api/get/reportiotssawah/3';
        $response = Http::get($url);
        $data = json_decode($response, true);
       
            $sswahpage = view('main', compact('data'));
            return $sswahpage; 
        }
}
