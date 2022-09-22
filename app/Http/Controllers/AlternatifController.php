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
            'link' => 'required'
        ]);

        $validateData['penjual_id'] = auth()->user()->id;
        $validateData['kapasitas_ssd'] = $request->kapasitas_ssd;
        $validateData['kapasitas_hdd'] = $request->kapasitas_hdd;

        Alternatif::Create($validateData);

        // membuat matriks x
        $cpu = Alternatif::select('kecepatan_cpu')->get();
        $i = 0;
        foreach($cpu as $c) {
            $ghz[$i] = $c->cpu->base_clock;
            $i++;
        }
        // $cpu_sekarang = CPU::where('id', $request->kecepatan_cpu)->get();
        // foreach($cpu_sekarang as $c) {
        //     $ghz[$i] = $c->base_clock;
        // }

        $gpu = Alternatif::select('kecepatan_gpu')->get();
        $i = 0;
        $j = 0;
        foreach($gpu as $g) {
            $mhz[$i] = $g->gpu->base_clock;
            $i++;
        }
        // $gpu_sekarang = GPU::where('id', $request->kecepatan_gpu)->select('base_clock')->get();
        // foreach($gpu_sekarang as $g) {
        //     $mhz[$i] = $g->base_clock;
        // }

        $rams = Alternatif::select('kapasitas_ram')->get();
        $i = 0;
        foreach($rams as $r) {
            $ram[$i] = $r->kapasitas_ram;
            $i++;
        }
        // $ram[$i] = (int)$request->kapasitas_ram;

        $ssds = Alternatif::select('kapasitas_ssd')->get();
        $i = 0;
        foreach($ssds as $s) {
            $ssd[$i] = $s->kapasitas_ssd;
            $i++;
        }
        // $ssd[$i] = (int)$request->kapasitas_ssd;

        $hdds = Alternatif::select('kapasitas_hdd')->get();
        $i = 0;
        foreach($hdds as $h) {
            $hdd[$i] = $h->kapasitas_hdd;
            $i++;
        }
        // $hdd[$i] = (int)$request->kapasitas_hdd;

        $hargas = Alternatif::select('harga')->get();
        $i = 0;
        foreach($hargas as $hrg) {
            $harga[$i] = $hrg->harga;
            $i++;
        }
        // $harga[$i] = (double)$request->harga;

        // mencari max dan min dari tiap kriteria
        $maxGhz = max($ghz);
        $maxMhz = max($mhz);
        $maxRam = max($ram);
        $maxSsd = max($ssd);
        $maxHdd = max($hdd);
        $minHarga = min($harga);

        // Normalisasi
        $i = 0;
        foreach($ghz as $g) {
            $normalisasi_cpu[$i] = round($g/$maxGhz, 4);
            $i++;
        }
        // $validateData['normalisasi_kecepatan_cpu'] = $normalisasi_cpu[$i - 1];
        
        $i = 0;
        foreach($mhz as $m) {
            $normalisasi_gpu[$i] = round($m/$maxMhz, 4);
            $i++;
        }
        // $validateData['normalisasi_kecepatan_gpu'] = $normalisasi_gpu[$i - 1];
        
        $i = 0;
        foreach($ram as $r) {
            $normalisasi_ram[$i] = round($r/$maxRam, 4);
            $i++;
        }
        // $validateData['normalisasi_kapasitas_ram'] = $normalisasi_ram[$i - 1];
        
        $i = 0;
        foreach($ssd as $s) {
            $normalisasi_ssd[$i] = round($s/$maxSsd, 4);
            $i++;
        }
        // $validateData['normalisasi_kapasitas_ssd'] = $normalisasi_ssd[$i - 1];
        
        $i = 0;
        foreach($hdd as $h) {
            $normalisasi_hdd[$i] = round($h/$maxHdd, 4);
            $i++;
        }
        // $validateData['normalisasi_kapasitas_hdd'] = $normalisasi_hdd[$i - 1];
        
        $i = 0;
        foreach($harga as $hrg) {
            $normalisasi_harga[$i] = round($minHarga/$hrg, 4);
            $i++;
        }
        // $validateData['normalisasi_harga'] = $normalisasi_harga[$i - 1];

        // dd($ghz, $mhz, $ram);
        // dd($normalisasi_cpu, $normalisasi_gpu, $normalisasi_ram, $normalisasi_ssd, $normalisasi_hdd, $normalisasi_harga);

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
        return view('penjual.alternatif.show', [
            'title' => 'Alternatif',
            'alternatif' => Alternatif::where('id', $alternatif->id)->get()
        ]);
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
            'link' => 'required'
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
