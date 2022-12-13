<?php

use App\Http\Controllers\CobaDuaDatabase;
use App\Http\Controllers\DataController;
use App\Http\Controllers\petalokasi;
use App\Http\Controllers\PlaceMapController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\reportiotclient;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});


// Route::get('menu/peta', [PlaceMapController::class,'index'])->name('frontpage');
// Route::get('/place/data', [DataController::class, 'places'])->name('place.data'); // DATA TABLE CONTROLLER


// Route::get('/dashboard', [reportiotclient::class, 'table']);

Route::get('/dashboard', function () {
    return view('main');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/menu/tabel/', [reportiotclient::class, 'table']);
    Route::get('/menu/peta/', [petalokasi::class, 'show']);

    Route::get(
        '/menu/daerah',
        function () {
            return view('daerah');
        }
    );
    Route::get('/menu/daerah/kirim', [reportiotclient::class, 'iotreport']);
    Route::get('/menu/daerah/iot', function () {
        return view('Mdaerah/output');
    }
    );
    Route::get(
        '/menu/daerah/boyolali',
        function () {
            return view('Mdaerah/boyolali');
        }
    );
    Route::get(
        '/menu/daerah/brebes',
        function () {
            return view('Mdaerah/brebes');
        }
    );
    Route::get(
        '/menu/daerah/kendal',
        function () {
            return view('Mdaerah/kendal');
        }
    );
    Route::get(
        '/menu/daerah/tegal',
        function () {
            return view('Mdaerah/tegal');
        }
    );
    Route::get(
        '/menu/daerah/pati',
        function () {
            return view('Mdaerah/pati');
        }
    );
    Route::get(
        '/menu/daerah/kendal',
        function () {
            return view('Mdaerah/kendal');
        }
    );
    Route::get(
        '/menu/daerah/demak',
        function () {
            return view('Mdaerah/demak');
        }
    );
    Route::get(
        '/menu/daerah/temanggung',
        function () {
            return view('Mdaerah/temanggung');
        }
    );

});

Route::get('/test', [CobaDuaDatabase::class, 'test'])->name('test');

require __DIR__ . '/auth.php';