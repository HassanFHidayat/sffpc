<?php

use App\Models\TingkatKepentingan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginPenjualController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegisterPenjualController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\HitungController;
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
        // 'title' => "SPK SFF-PC | Home"
        abort(403)
    ]);
});

// Route::get('/list', function () {
//     return view('pembeli.list', [
//         'title' => "SPK SFF-PC | List",
//         'active' => 'list'
//     ]);
// });

// Route::get('/hitung', [TingkatKepentinganController::class, 'index']);

Route::resource('/rekomendasi', TingkatKepentinganController::class)->except('show')->middleware('pembeli');
// ->middleware('auth')

// Route::get('/penjual', function () {
//     return view('penjual.index', [
//         'title' => "SPK SFF-PC | Home",
//     ]);
// });

Route::resource('/dashboard/alternatif', AlternatifController::class)->except('show')->middleware('penjual');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login/penjual', [LoginPenjualController::class, 'index'])->middleware('guest');
Route::post('/login/penjual', [LoginPenjualController::class, 'authenticate']);
Route::post('/logout', [LoginPenjualController::class, 'logout']);

Route::get('/register/penjual', [RegisterPenjualController::class, 'index'])->middleware('guest');
Route::post('/register/penjual', [RegisterPenjualController::class, 'store']);

Route::get('/dashboard', function () {
    return view('penjual.index', [
        'title' => "SPK SFF-PC | Home",
    ]);
})->middleware('penjual');

Route::get('/rekomendasi/hasil', [HitungController::class, 'index']);
// Route::get('/dashboard/alternatif', function () {
//     return view('penjual.alternatif.index', [
//         'title' => "SPK SFF-PC | Home",
//     ]);
// });