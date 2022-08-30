<?php

use App\Http\Controllers\TingkatKepentinganController;
use App\Http\Controllers\AlternatifController;
use App\Models\TingkatKepentingan;
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
    return view('home', [
        "title" => "SPK SFF-PC | Home"
    ]);
});

Route::get('/list', function () {
    return view('pembeli.list', [
        "title" => "SPK SFF-PC | List"
    ]);
});

// Route::get('/hitung', [TingkatKepentinganController::class, 'index']);

Route::resource('/rekomendasi', TingkatKepentinganController::class);

Route::get('/penjual', function () {
    return view('penjual.index', [
        "title" => "SPK SFF-PC | Home"
    ]);
});

Route::resource('/alternatif', AlternatifController::class);