<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CobaDuaDatabase extends Controller
{
    public function test()
    {
        // memanggil tabel yang ada di database smartbawang_api
        return DB::connection('pgsql2')->table('lokasi_models')->get();
    }
    
    

}
