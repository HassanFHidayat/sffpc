<?php

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
        "title" => "Home"
    ]);
});

Route::get('/list', function () {
    return view('list', [
        "title" => "List"
    ]);
});

Route::get('/hitung', function () {
    return view('hitung', [
        "title" => "Rekomendasi"
    ]);
});
