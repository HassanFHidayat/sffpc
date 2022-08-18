<?php

namespace App\Http\Controllers;

use App\Models\tingkat_kepentingan;
use Illuminate\Http\Request;

class TingkatKepentinganController extends Controller
{
    public function index() {
        return view('hitung', [
            "title" => "SPK SFF-PC | Rekomendasi",
            "tks" => tingkat_kepentingan::all()
        ]);
    }
}
