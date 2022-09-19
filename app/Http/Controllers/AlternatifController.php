<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\CPU;
use App\Models\GPU;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('penjual.alternatif.index', [
            "title" => "Alternatif",
            "alt" => Alternatif::where('penjual_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penjual.alternatif.create', [
            'title' => 'Alternatif',
            'cpus' => CPU::all(),
            'gpus' => GPU::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kecepatan_cpu' => 'required',
            'kecepatan_gpu' => 'required',
            'kapasitas_ram' => 'required',
            'harga' => 'required',
        ]);

        $validateData['penjual_id'] = auth()->user()->id;
        $validateData['kapasitas_ssd'] = $request->kapasitas_ssd;
        $validateData['kapasitas_hdd'] = $request->kapasitas_hdd;

        Alternatif::Create($validateData);

        return redirect('/dashboard/alternatif')->with('success', 'New Alternative has ben added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function show(Alternatif $alternatif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function edit(Alternatif $alternatif)
    {
        return view('penjual.alternatif.edit', [
            'title' => 'Alternatif',
            'cpus' => CPU::all(),
            'gpus' => GPU::all(),
            'alternatifs' => $alternatif
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alternatif $alternatif)
    {
        $validateData = $request->validate([
            'kecepatan_cpu' => 'required',
            'kecepatan_gpu' => 'required',
            'kapasitas_ram' => 'required',
            'harga' => 'required',
        ]);

        $validateData['penjual_id'] = auth()->user()->id;
        $validateData['kapasitas_ssd'] = $request->kapasitas_ssd;
        $validateData['kapasitas_hdd'] = $request->kapasitas_hdd;

        Alternatif::Where('id', $alternatif->id)
            ->update($validateData);

        return redirect('/dashboard/alternatif')->with('success', 'Alternative has ben updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alternatif $alternatif)
    {
        Alternatif::destroy($alternatif->id);

        return redirect('/dashboard/alternatif')->with('delete', 'Alternative has ben deleted');
    }
}
