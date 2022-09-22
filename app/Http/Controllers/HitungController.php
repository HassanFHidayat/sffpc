<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\TingkatKepentingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HitungController extends Controller
{
    public function index() {
        if(auth()->user()->done == true) {
            // // membuat matriks x
            // $cpu = Alternatif::select('kecepatan_cpu')->get();
            // // $maxCpu = Alternatif::select('kecepatan_cpu')->max('kecepatan_cpu');
            // $ghz = [];
            // $i = 0;
            // foreach($cpu as $c) {
            //     $ghz[$i] = $c->cpu->base_clock;
            //     $i++;
            // }

            // $gpu = Alternatif::select('kecepatan_gpu')->get();
            // $mhz = [];
            // $i = 0;
            // foreach($gpu as $g) {
            //     $mhz[$i] = $g->gpu->base_clock;
            //     $i++;
            // }

            // $rams = Alternatif::select('kapasitas_ram')->get();
            // $ram = [];
            // $i = 0;
            // foreach($rams as $r) {
            //     $ram[$i] = $r->kapasitas_ram;
            //     $i++;
            // }

            // $ssds = Alternatif::select('kapasitas_ssd')->get();
            // $ssd = [];
            // $i = 0;
            // foreach($ssds as $s) {
            //     $ssd[$i] = $s->kapasitas_ssd;
            //     $i++;
            // }

            // $hdds = Alternatif::select('kapasitas_hdd')->get();
            // $hdd = [];
            // $i = 0;
            // foreach($hdds as $h) {
            //     $hdd[$i] = $h->kapasitas_hdd;
            //     $i++;
            // }

            // $hargas = Alternatif::select('harga')->get();
            // $harga = [];
            // $i = 0;
            // foreach($hargas as $hrg) {
            //     $harga[$i] = $hrg->harga;
            //     $i++;
            // }

            // // mencari max dan min dari tiap kriteria
            // $maxGhz = max($ghz);
            // $maxMhz = max($mhz);
            // $maxRam = Alternatif::select('kapasitas_ram')->max('kapasitas_ram');
            // $maxSsd = Alternatif::select('kapasitas_ssd')->max('kapasitas_ssd');
            // $maxHdd = Alternatif::select('kapasitas_hdd')->max('kapasitas_hdd');
            // $minHarga = Alternatif::select('harga')->min('harga');

            // // Normalisasi
            // $normalisasi_cpu = [];
            // $i = 0;
            // foreach($ghz as $g) {
            //     $normalisasi_cpu[$i] = round($g/$maxGhz, 4);
            //     $i++;
            // }
            
            // $normalisasi_gpu = [];
            // $i = 0;
            // foreach($mhz as $m) {
            //     $normalisasi_gpu[$i] = $m/$maxMhz;
            //     $i++;
            // }
            
            // $normalisasi_ram = [];
            // $i = 0;
            // foreach($ram as $r) {
            //     $normalisasi_ram[$i] = $r/$maxRam;
            //     $i++;
            // }
            
            // $normalisasi_ssd = [];
            // $i = 0;
            // foreach($ssd as $s) {
            //     $normalisasi_ssd[$i] = $s/$maxSsd;
            //     $i++;
            // }
            
            // $normalisasi_hdd = [];
            // $i = 0;
            // foreach($hdd as $h) {
            //     $normalisasi_hdd[$i] = $h/$maxHdd;
            //     $i++;
            // }
            
            // $normalisasi_harga = [];
            // $i = 0;
            // foreach($harga as $hrg) {
            //     $normalisasi_harga[$i] = $minHarga/$hrg;
            //     $i++;
            // }

            // mengambil normalisasi
            $normalisasi = Alternatif::all();
            $i = 0;
            foreach($normalisasi as $n) {
                $normalisasi_cpu[$i] = $n->normalisasi_kecepatan_cpu;
                $normalisasi_gpu[$i] = $n->normalisasi_kecepatan_gpu;
                $normalisasi_ram[$i] = $n->normalisasi_kapasitas_ram;
                $normalisasi_ssd[$i] = $n->normalisasi_kapasitas_ssd;
                $normalisasi_hdd[$i] = $n->normalisasi_kapasitas_hdd;
                $normalisasi_harga[$i] = $n->normalisasi_harga;
                $i++;
            }

            // mengambil tingkat keputusan pembeli
            $tk = TingkatKepentingan::where('pembeli_id', auth()->user()->id)->get();
            foreach($tk as $t) {
                $cpu_global = $t->cpu_global;
                $gpu_global = $t->gpu_global;
                $ram_global = $t->ram_global;
                $ssd_global = $t->ssd_global;
                $hdd_global = $t->hdd_global;
                $harga_global = $t->harga_global;
                $jumlah = $t->jumlah;
            }

            // menghitung vektor Vi bagian perkalian dengan bobot global
            $vektor_cpu = [];
            $i = 0;
            foreach($normalisasi_cpu as $ncpu) {
                $vektor_cpu[$i] = $ncpu*$cpu_global;
                $i++;
            }
            
            $vektor_gpu = [];
            $i = 0;
            foreach($normalisasi_gpu as $ngpu) {
                $vektor_gpu[$i] = $ngpu*$gpu_global;
                $i++;
            }
            
            $vektor_ram = [];
            $i = 0;
            foreach($normalisasi_ram as $nram) {
                $vektor_ram[$i] = $nram*$ram_global;
                $i++;
            }
            
            $vektor_ssd = [];
            $i = 0;
            foreach($normalisasi_ssd as $nssd) {
                $vektor_ssd[$i] = $nssd*$ssd_global;
                $i++;
            }
            
            $vektor_hdd = [];
            $i = 0;
            foreach($normalisasi_hdd as $nhdd) {
                $vektor_hdd[$i] = $nhdd*$hdd_global;
                $i++;
            }
            
            $vektor_harga = [];
            $i = 0;
            foreach($normalisasi_harga as $nharga) {
                $vektor_harga[$i] = $nharga*$harga_global;
                $i++;
            }

            $alt = Alternatif::all();
            $altArray = $alt->toArray();
            $i = 0;
            foreach($alt as $a) {
                $altArray[$i]['hasil'] = $vektor_cpu[$i] + $vektor_gpu[$i] + $vektor_ram[$i] + $vektor_ssd[$i] + $vektor_hdd[$i] + $vektor_harga[$i];
                $i++;
            }

            $i = 0;
            foreach($alt as $a) {
                $a->ari = $i;
                $a->nama_alternatif = "A".$i + 1;
                $i++;
            }

            $alt->transform(function ($alt) use ($altArray) {
                $alt->hasil = $altArray[$alt->ari]['hasil'];
                return $alt;
            });

            // $jumlah = TingkatKepentingan::select('jumlah')->get()->toArray();
            // foreach($jumlah as $j) {
            //     $jumlahHasil = $jumlah->jumlah;
            // }
            // dd($jumlah);

            return view('pembeli.tingkat_kepentingan.hasil', [
                'title' => 'SPK SFF-PC | Hasil',
                'hasils' => $alt->sortByDesc('hasil')->take($jumlah)
            ]);
        } else {
            abort(403);
        }
    }

    public function jumlah(Request $request) {
        TingkatKepentingan::where('pembeli_id', auth()->user()->id)
                        ->update(['jumlah' => $request->jumlah]);
        // dd($request);
        return redirect('/rekomendasi/hasil');
    }
}
