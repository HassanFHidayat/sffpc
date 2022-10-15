<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\TingkatKepentingan;
use App\Models\Skala;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TingkatKepentinganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pembeli.tingkat_kepentingan.index', [
            "title" => "SPK SFF-PC | Rekomendasi",
            "tks" => TingkatKepentingan::where('pembeli_id', auth()->user()->id)->get(),
            'alternatif' => Alternatif::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->done == false) {
            return view('pembeli.tingkat_kepentingan.create', [
                "title" => "SPK SFF-PC | Create",
                'skalas' => Skala::all()
            ]);
        } else {
            abort(403);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if tingkat kepentingan ada then redirect
        $tk = TingkatKepentingan::where('pembeli_id', auth()->user()->id)->get();
        if($tk->isEmpty()) {
            $validatedData = $request->validate([
                'cpu_lokal' => 'required',
                'gpu_lokal' => 'required',
                'ram_lokal' => 'required',
                'storage_lokal' => 'required',
                'ssd_lokal' => 'required',
                'hdd_lokal' => 'required',
                'harga_lokal' => 'required'
            ]);
    
            $bobotKriteriaLokal = $validatedData['cpu_lokal'] + 
                                    $validatedData['gpu_lokal'] + 
                                    $validatedData['ram_lokal'] + 
                                    $validatedData['storage_lokal'] + 
                                    $validatedData['harga_lokal'];
    
            $bobotSubKriteriaLokal = $validatedData['ssd_lokal'] + $validatedData['hdd_lokal'];
    
            $bobotKriteria = [
                $validatedData['cpu_lokal']/$bobotKriteriaLokal,
                $validatedData['gpu_lokal']/$bobotKriteriaLokal,
                $validatedData['ram_lokal']/$bobotKriteriaLokal,
                $validatedData['storage_lokal']/$bobotKriteriaLokal,
                $validatedData['harga_lokal']/$bobotKriteriaLokal
            ];
            
            $bobotSubKriteria = [
                $validatedData['ssd_lokal']/$bobotSubKriteriaLokal,
                $validatedData['hdd_lokal']/$bobotSubKriteriaLokal
            ];
    
            $bobotGlobal = [
                $bobotKriteria[0],
                $bobotKriteria[1],
                $bobotKriteria[2],
                $bobotSubKriteria[0]*$bobotKriteria[3],
                $bobotSubKriteria[1]*$bobotKriteria[3],
                $bobotKriteria[4]
            ];
    
            
            $validatedData['pembeli_id'] = auth()->user()->id;
            $validatedData['cpu_global'] = $bobotGlobal[0];
            $validatedData['gpu_global'] = $bobotGlobal[1];
            $validatedData['ram_global'] = $bobotGlobal[2];
            $validatedData['ssd_global'] = $bobotGlobal[3];
            $validatedData['hdd_global'] = $bobotGlobal[4];
            $validatedData['harga_global'] = $bobotGlobal[5];
    
            $collection = collect([
                $validatedData['cpu_lokal'],
                $validatedData['gpu_lokal'],
                $validatedData['ram_lokal'],
                $validatedData['storage_lokal'],
                $validatedData['ssd_lokal'],
                $validatedData['hdd_lokal'],
                $validatedData['harga_lokal']
            ]);
            
            $diff = $collection->duplicates();
            if($diff->count() >= 6) {
                return back()->withInput()->with('error', 'Semua tingkat kepentingan tidak boleh sama');
            } else {
                TingkatKepentingan::create($validatedData);
    
                User::where('id', auth()->user()->id)
                ->update(['done' => true]);
    
                return redirect('/rekomendasi')->with('success', 'Data has ben added');
            }
        } else {
            return redirect('/rekomendasi');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TingkatKepentingan  $tingkatKepentingan
     * @return \Illuminate\Http\Response
     */
    public function show(TingkatKepentingan $rekomendasi)
    {
        // $validatedData['cpu_lokal'] = 1;
        // $validatedData['gpu_lokal'] = 1;
        // $validatedData['ram_lokal'] = 1;
        // $validatedData['storage_lokal'] = 1;
        // $validatedData['ssd_lokal'] = 1;
        // $validatedData['hdd_lokal'] = 1;
        // $validatedData['harga_lokal'] = 1;
        
        // $validatedData['pembeli_id'] = auth()->user()->id;
        // $validatedData['cpu_global'] = 0;
        // $validatedData['gpu_global'] = 0;
        // $validatedData['ram_global'] = 0;
        // $validatedData['ssd_global'] = 0;
        // $validatedData['hdd_global'] = 0;
        // $validatedData['harga_global'] = 0;

        // TingkatKepentingan::where('id', $rekomendasi->id)
        //     ->update($validatedData);

        // return view('pembeli.tingkat_kepentingan.index', [
        //     "title" => "SPK SFF-PC | Index",
        //     "tks" => TingkatKepentingan::where('pembeli_id', auth()->user()->id)->get(),
        //     'alternatif' => Alternatif::all()
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TingkatKepentingan  $tingkatKepentingan
     * @return \Illuminate\Http\Response
     */
    public function edit(TingkatKepentingan $rekomendasi)
    {
        return view('pembeli.tingkat_kepentingan.edit', [
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
        
        $bobotKriteriaLokal = $validatedData['cpu_lokal'] + 
                                $validatedData['gpu_lokal'] + 
                                $validatedData['ram_lokal'] + 
                                $validatedData['storage_lokal'] + 
                                $validatedData['harga_lokal'];

        $bobotSubKriteriaLokal = $validatedData['ssd_lokal'] + $validatedData['hdd_lokal'];

        $bobotKriteria = [
            $validatedData['cpu_lokal']/$bobotKriteriaLokal,
            $validatedData['gpu_lokal']/$bobotKriteriaLokal,
            $validatedData['ram_lokal']/$bobotKriteriaLokal,
            $validatedData['storage_lokal']/$bobotKriteriaLokal,
            $validatedData['harga_lokal']/$bobotKriteriaLokal
        ];
        
        $bobotSubKriteria = [
            $validatedData['ssd_lokal']/$bobotSubKriteriaLokal,
            $validatedData['hdd_lokal']/$bobotSubKriteriaLokal
        ];

        $bobotGlobal = [
            $bobotKriteria[0],
            $bobotKriteria[1],
            $bobotKriteria[2],
            $bobotSubKriteria[0]*$bobotKriteria[3],
            $bobotSubKriteria[1]*$bobotKriteria[3],
            $bobotKriteria[4]
        ];

        dd($bobotKriteria, $bobotSubKriteria, $bobotGlobal);
        
        $validatedData['pembeli_id'] = auth()->user()->id;
        $validatedData['cpu_global'] = $bobotGlobal[0];
        $validatedData['gpu_global'] = $bobotGlobal[1];
        $validatedData['ram_global'] = $bobotGlobal[2];
        $validatedData['ssd_global'] = $bobotGlobal[3];
        $validatedData['hdd_global'] = $bobotGlobal[4];
        $validatedData['harga_global'] = $bobotGlobal[5];

        $collection = collect([
            $validatedData['cpu_lokal'],
            $validatedData['gpu_lokal'],
            $validatedData['ram_lokal'],
            $validatedData['storage_lokal'],
            $validatedData['ssd_lokal'],
            $validatedData['hdd_lokal'],
            $validatedData['harga_lokal']
        ]);
        // $collection = collect([3, 5, 3, 2, 4, 2, 5]);
        $diff = $collection->duplicates();
        if($diff->count() >= 6) {
            return back()->withInput()->with('error', 'Semua tingkat kepentingan tidak boleh sama');
        } else {
            TingkatKepentingan::where('id', $rekomendasi->id)
                ->update($validatedData);
            
            return redirect('/rekomendasi')->with('success', 'Data has ben updated');
        }

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
        
        User::where('id', auth()->user()->id)
            ->update(['done' => false]);

        return redirect('/rekomendasi')->with('success', 'TK has ben deleted');
    }
}
