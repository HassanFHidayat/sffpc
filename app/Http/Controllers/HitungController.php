<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\TingkatKepentingan;
use Illuminate\Http\Request;

class HitungController extends Controller
{
    public function index() {
        // membuat matriks x
        $cpu = Alternatif::select('kecepatan_cpu')->get();
        // $maxCpu = Alternatif::select('kecepatan_cpu')->max('kecepatan_cpu');
        $ghz = [];
        $i = 0;
        foreach($cpu as $c) {
            $ghz[$i] = $c->cpu->base_clock;
            $i++;
        }

        $gpu = Alternatif::select('kecepatan_gpu')->get();
        $mhz = [];
        $i = 0;
        foreach($gpu as $g) {
            $mhz[$i] = $g->gpu->base_clock;
            $i++;
        }

        $rams = Alternatif::select('kapasitas_ram')->get();
        $ram = [];
        $i = 0;
        foreach($rams as $r) {
            $ram[$i] = $r->kapasitas_ram;
            $i++;
        }

        $ssds = Alternatif::select('kapasitas_ssd')->get();
        $ssd = [];
        $i = 0;
        foreach($ssds as $s) {
            $ssd[$i] = $s->kapasitas_ssd;
            $i++;
        }

        $hdds = Alternatif::select('kapasitas_hdd')->get();
        $hdd = [];
        $i = 0;
        foreach($hdds as $h) {
            $hdd[$i] = $h->kapasitas_hdd;
            $i++;
        }

        $hargas = Alternatif::select('harga')->get();
        $harga = [];
        $i = 0;
        foreach($hargas as $hrg) {
            $harga[$i] = $hrg->harga;
            $i++;
        }

        // mencari max dan min dari tiap kriteria
        $maxGhz = max($ghz);
        $maxMhz = max($mhz);
        $maxRam = Alternatif::select('kapasitas_ram')->max('kapasitas_ram');
        $maxSsd = Alternatif::select('kapasitas_ssd')->max('kapasitas_ssd');
        $maxHdd = Alternatif::select('kapasitas_hdd')->max('kapasitas_hdd');
        $minHarga = Alternatif::select('harga')->min('harga');

        // Normalisasi
        $normalisasi_cpu = [];
        $i = 0;
        foreach($ghz as $g) {
            $normalisasi_cpu[$i] = $g/$maxGhz;
            $i++;
        }
        
        $normalisasi_gpu = [];
        $i = 0;
        foreach($mhz as $m) {
            $normalisasi_gpu[$i] = $m/$maxMhz;
            $i++;
        }
        
        $normalisasi_ram = [];
        $i = 0;
        foreach($ram as $r) {
            $normalisasi_ram[$i] = $r/$maxRam;
            $i++;
        }
        
        $normalisasi_ssd = [];
        $i = 0;
        foreach($ssd as $s) {
            $normalisasi_ssd[$i] = $s/$maxSsd;
            $i++;
        }
        
        $normalisasi_hdd = [];
        $i = 0;
        foreach($hdd as $h) {
            $normalisasi_hdd[$i] = $h/$maxHdd;
            $i++;
        }
        
        $normalisasi_harga = [];
        $i = 0;
        foreach($harga as $hrg) {
            $normalisasi_harga[$i] = $minHarga/$hrg;
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
            // $hitung_vektor[$i] = $vektor_cpu[$i] + $vektor_gpu[$i] + $vektor_ram[$i] + $vektor_ssd[$i] + $vektor_hdd[$i] + $vektor_harga[$i];
            $altArray[$i]['hasil'] = $vektor_cpu[$i] + $vektor_gpu[$i] + $vektor_ram[$i] + $vektor_ssd[$i] + $vektor_hdd[$i] + $vektor_harga[$i];
            // $alt->hasil = $vektor_cpu[$i] + $vektor_gpu[$i] + $vektor_ram[$i] + $vektor_ssd[$i] + $vektor_hdd[$i] + $vektor_harga[$i];
            // $alt->map(function ($alt, $vektor_cpu, $vektor_gpu, $vektor_ram, $vektor_ssd, $vektor_hdd, $vektor_harga) {
            $i++;
        }
        $altCollect = collect($altArray);

        $i = 0;
        foreach($alt as $a) {
            $a->ari = $i;
            $a->nama_alternatif = "A".$i + 1;
            $i++;
        }

        // $i = 0;
        $alt->transform(function ($alt) use ($altCollect, $altArray, $i) {
            $alt->hasil = $altArray[$alt->ari]['hasil'];
            // foreach($alt as $a) {
            //     // $alt->hasil = $altArray[$i]['hasil'];
            // }
            // echo $i."</br>";
            // $i++;
            return $alt;
        });

        // $alt->map(function ($alt) use ($altCollect) {
        //     $altC = $altCollect->first(function ($value, $key) use ($alt) {
        //         return $key === $alt->nama;
        //     });
        
        //     if ($altC !== null) {
        //         $alt->hasil = $altC;
        //     }
        
        //     return $altC;
        // });

        // $alt->map(function ($a) use ($altCollect) {
        //     $a->hasil = $altCollect[$a->hasil] ?? $a->hasil;
        
        //     return $a;
        // });

        // $hitung_collect = collect($hitung_vektor);
        // $i = 0;
        // foreach($altCollect as $a) {
        //     $a[$i]['hasil'] = $hitung_collect[$i]['hasil'];
        //     $i++;
        // }

        // $hasil = $altCollect->merge($hitung_collect);

        // $alt->map(function ($alt) {
        //     $alt->hasil = 'test';
        //     return $alt;
        // });

        // $collection = $altCollect->map(function($altCollect, $hitung_vektor) {
        //     return array_merge($altCollect, [
        //         'hasil' => $hitung_vektor
        //     ]);
        // });

        // $alt['hasil'] = 'test';

        // $collectVektor = collect($hitung_vektor);

        // $col = collect($altArray);
        // $col->map(function ($col) {
        //     $col['hasil'] = 'test';
        //     return $col;
        // });

        // $altArray[0]['hasil'] = $hitung_vektor[0]['hasil'];

        // $merged = $alt->merge($altCollect);

        // $hasil = $altCollect->sortByDesc('hasil');

        // dd($alt);

        // dd($vektor_cpu, $vektor_gpu, $vektor_ram, $vektor_ssd, $vektor_hdd, $vektor_harga);
        // dd($alt);

        return view('pembeli.tingkat_kepentingan.hasil', [
            'title' => 'SPK SFF-PC | Hasil',
            'hasils' => $alt->sortByDesc('hasil')
        ]);
    }
}
