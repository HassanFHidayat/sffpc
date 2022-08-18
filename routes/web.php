<?php

use App\Http\Controllers\TingkatKepentinganController;
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
    return view('list', [
        "title" => "SPK SFF-PC | List"
    ]);
});

Route::get('/hitung', [TingkatKepentinganController::class, 'index']);
