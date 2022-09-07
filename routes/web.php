<?php

use App\Models\TingkatKepentingan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\TingkatKepentinganController;

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
        'title' => "SPK SFF-PC | Home",
        'active' => 'home'
    ]);
});

Route::get('/list', function () {
    return view('pembeli.list', [
        'title' => "SPK SFF-PC | List",
        'active' => 'list'
    ]);
});

// Route::get('/hitung', [TingkatKepentinganController::class, 'index']);

Route::resource('/rekomendasi', TingkatKepentinganController::class)->middleware('auth');

Route::get('/penjual', function () {
    return view('penjual.index', [
        'title' => "SPK SFF-PC | Home",
        'active' => 'home'
    ]);
});

Route::resource('/alternatif', AlternatifController::class)->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);