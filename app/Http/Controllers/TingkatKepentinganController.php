<?php

namespace App\Http\Controllers;

use App\Models\TingkatKepentingan;
use App\Models\Skala;
use Illuminate\Http\Request;

class TingkatKepentinganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pembeli.index', [
            "title" => "SPK SFF-PC | Rekomendasi",
            "tks" => TingkatKepentingan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembeli.create', [
            "title" => "SPK SFF-PC | Create",
            'skalas' => Skala::all()
        ]);

        // Membuat tabel yang berisikan skala untuk ditampilkan didalam file create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cpu_lokal' => 'required',
            'gpu_lokal' => 'required',
            'ram_lokal' => 'required',
            'storage_lokal' => 'required',
            'ssd_lokal' => 'required',
            'hdd_lokal' => 'required',
            'harga_lokal' => 'required'
        ]);
        
        $validatedData['pembeli_id'] = 2;
        $validatedData['cpu_global'] = lcg_value();
        $validatedData['gpu_global'] = lcg_value();
        $validatedData['ram_global'] = lcg_value();
        $validatedData['ssd_global'] = lcg_value();
        $validatedData['hdd_global'] = lcg_value();
        $validatedData['harga_global'] = lcg_value();

        TingkatKepentingan::create($validatedData);

        return redirect('/rekomendasi')->with('success', 'New has ben added');


        //menghitung bobot global kemudian baru disimpan
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TingkatKepentingan  $tingkatKepentingan
     * @return \Illuminate\Http\Response
     */
    public function show(TingkatKepentingan $rekomendasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TingkatKepentingan  $tingkatKepentingan
     * @return \Illuminate\Http\Response
     */
    public function edit(TingkatKepentingan $rekomendasi)
    {
        return view('pembeli.edit', [
            "title" => "SPK SFF-PC | Edit",
            "skalas" => Skala::all(),
            "tks" => $rekomendasi
        ]);

        // Membuat tabel yang berisikan skala untuk ditampilkan didalam file create
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TingkatKepentingan  $tingkatKepentingan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TingkatKepentingan $rekomendasi)
    {
        $validatedData = $request->validate([
            'cpu_lokal' => 'required',
            'gpu_lokal' => 'required',
            'ram_lokal' => 'required',
            'storage_lokal' => 'required',
            'ssd_lokal' => 'required',
            'hdd_lokal' => 'required',
            'harga_lokal' => 'required'
        ]);
        
        $validatedData['pembeli_id'] = 2;
        $validatedData['cpu_global'] = lcg_value();
        $validatedData['gpu_global'] = lcg_value();
        $validatedData['ram_global'] = lcg_value();
        $validatedData['ssd_global'] = lcg_value();
        $validatedData['hdd_global'] = lcg_value();
        $validatedData['harga_global'] = lcg_value();

        TingkatKepentingan::where('id', $rekomendasi->id)
            ->update($validatedData);

        return redirect('/rekomendasi')->with('success', 'Data has ben updated');

        //Karena tingkat kepentingan di update maka menghitung bobot global lagi kemudian baru disimpan
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TingkatKepentingan  $tingkatKepentingan
     * @return \Illuminate\Http\Response
     */
    public function destroy(TingkatKepentingan $rekomendasi)
    {

        TingkatKepentingan::destroy($rekomendasi->id);

        return redirect('/rekomendasi')->with('success', 'TK has ben deleted');
    }
}
