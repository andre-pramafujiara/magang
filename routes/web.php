<?php

use App\Http\Controllers\AgamaController;
use App\Http\Controllers\AsuransiController;
use App\Http\Controllers\BayiController;
use App\Http\Controllers\PasienbController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PenanggungjawabController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PengantarController;
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
    return view('welcome');
});

Route::resource('pasien', PasienController::class);

Route::resource('pendidikan', PendidikanController::class);

Route::resource('agama', AgamaController::class);

Route::resource('asuransi', AsuransiController::class);

Route::resource('pekerjaan', PekerjaanController::class);

Route::resource('pasienb', PasienbController::class);

Route::resource('penaggungjawab', PenanggungjawabController::class);

Route::resource('pengantar', PengantarController::class);

Route::resource('bbl', BayiController::class);



