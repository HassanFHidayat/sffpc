<?php

namespace Database\Seeders;

use App\Models\Skala;
use App\Models\CPU;
use App\Models\GPU;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\TingkatKepentingan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        TingkatKepentingan::Create([
            'pembeli_id' => '1',
            'cpu_lokal' => '3',
            'gpu_lokal' => '5',
            'ram_lokal' => '3',
            'storage_lokal' => '2',
            'ssd_lokal' => '4',
            'hdd_lokal' => '2',
            'harga_lokal' => '5',
            'cpu_global' => '0.166666667',
            'gpu_global' => '0.277777778',
            'ram_global' => '0.166666667',
            'ssd_global' => '0.074074074',
            'hdd_global' => '0.037037037',
            'harga_global' => '0.277777778'
        ]);

        Skala::Create([
            'value' => 1,
            'description' => 'Tidak Baik'
        ]);

        Skala::Create([
            'value' => 2,
            'description' => 'Kurang Baik'
        ]);

        Skala::Create([
            'value' => 3,
            'description' => 'Cukup Baik'
        ]);

        Skala::Create([
            'value' => 4,
            'description' => 'Baik'
        ]);
        
        Skala::Create([
            'value' => 5,
            'description' => 'Sangat Baik'
        ]);

        CPU::Create([
            'nama' => 'AMD Threadripper 3990X 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-4650 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2698 V3 2.3 GHz',
            'base_clock' => 2.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Threadripper 3970X 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD Threadripper 2990WX 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2687W V3 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-7960X 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2643 V3 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2687W V4 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2690 V2 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2687W V3 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'AMD Threadripper 3960X 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2680 V4 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-9980XE 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2683 V4 2.1 GHz',
            'base_clock' => 2.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-9900KS 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2670 V2 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-4960X Extreme Edition 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-4930K 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2470V2 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 9 3950X 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Extreme QX9775 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2667 V3 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-9960X 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-7900X 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-9980XE 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2699 V4 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-7980XE 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-9900X 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-1660 V2 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-980X Extreme Edition 3.33 GHz',
            'base_clock' => 3.33
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-980 3.333 GHz',
            'base_clock' => 3.333
        ]);
        
        CPU::Create([
            'nama' => 'AMD Threadripper 2970WX 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2278G 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2146G 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-10980XE 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Extreme QX6800 2.93 GHz',
            'base_clock' => 2.93
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2640 V4 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-965 Extreme Edition 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2690 V4 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-5775C 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Threadripper 2950X 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Opteron 6378 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-9940X 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-9900K 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2695 V3 2.3 GHz',
            'base_clock' => 2.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Extreme QX6850 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-6950X 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 940 Black 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2609 V4 1.7 GHz',
            'base_clock' => 1.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-2600K 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-9370 4.4 GHz',
            'base_clock' => 4.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-7960X 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-3960X Extreme Edition 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-10940X 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-9900 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8150 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1270 V6 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-7920X 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 9 3900XT 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 9 3950X 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-9800X 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-10920X 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2286G 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1240 V6 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-12900KS 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-8086K 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Threadripper 1950X 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1220 V6 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Extreme QX6700 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8350 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1230 V6 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1245 V6 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1245 V6 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-9900K 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-9900K (Standard Folding Box) 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-4670S 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2104G 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-12900K 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2687W 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-6800K 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-7900X 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-12900KF 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1285 V6 4.1 GHz',
            'base_clock' => 4.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-10900X 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 9 5950X 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2176G 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1225 V6 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1280 V6 3.9 GHz',
            'base_clock' => 3.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-12900 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-12900F 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-1630 V4 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-3970X Extreme Edition 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1230 V5 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Extreme X6800 2.93 GHz',
            'base_clock' => 2.93
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1230 V5 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-7820X 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1240 V6 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2176G 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2630 V4 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2236 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-9700KF 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8370 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2640 V3 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 7 5800X3D 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2174G 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 7 3800XT 3.9 GHz',
            'base_clock' => 3.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-9900KF 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2274G 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-6800K 4.1 GHz',
            'base_clock' => 4.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2630L V3 1.8 GHz',
            'base_clock' => 1.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-9700F 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-1660 V3 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-11900F 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2695 V2 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-6900K 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-9700K 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2643 V2 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1220 V3 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-750 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2174G 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q6600 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-7700T 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 9 5900X 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1220 V6 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-2600S 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1275 V2 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-10900 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1275 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2620 V4 2.1 GHz',
            'base_clock' => 2.1
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 7 1800X 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-8700K 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-875K 2.93 GHz',
            'base_clock' => 2.93
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-12700KF 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-12700K 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 9 3900X 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD A12-9800E 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1245 V2 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-10900F 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-7700K 4.2 GHz',
            'base_clock' => 4.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2144G 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-7700 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2146G 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1275 V6 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2136 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-11700 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2665 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-9700 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-3930K 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Opteron 6344 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1270 V3 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1270 V2 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1270 V3 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-6700 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-8700 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1240 V2 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-6950X 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-12700 2.1 GHz',
            'base_clock' => 2.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-3550 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-7700T 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-8700T 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-8700K 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-4770K 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-8600 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'AMD Threadripper 1920X 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-3225 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2236 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2126G 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-10850K 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q9550 2.83 GHz',
            'base_clock' => 2.83
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1230 V6 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2136 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-12700F 2.1 GHz',
            'base_clock' => 2.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-8700 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-8400 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-940 2.93 GHz',
            'base_clock' => 2.93
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1245 V5 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-7800X 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-4790K 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-9600KF 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-7640X 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 7 5800X 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-10900K 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1230 V3 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1241 V3 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1230 V2 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q9450 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 7 1700 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 2400G 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 7 1700X 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-4770S 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1225 V5 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-6100T 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-11900 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2695 V3 2.3 GHz',
            'base_clock' => 2.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 7 3700X 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD 5350 2.05 GHz',
            'base_clock' => 2.05
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-950 3.06 GHz',
            'base_clock' => 3.06
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 7 2700 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-6800K 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-6600T 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-11700F 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2134 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-7870K 3.9 GHz',
            'base_clock' => 3.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1225 V6 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-6700K 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-6700 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-11700K 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-11900K 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-11900KF 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-3340 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 1600 (14nm) 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 3400G 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-8600K 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-3770K 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1270 V5 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-10900KF 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-930 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2124G 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-860 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-7700 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Opteron 6320 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-10700 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-8100T 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 3600X 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-8500 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1240 V5 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-8500 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-12600K 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-6850K 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-7820X 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 7 5700G 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 7 5700X 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2660 V4 2 GHz',
            'base_clock' => 2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q9650 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-9300 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-10700K 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 7 3800X 3.9 GHz',
            'base_clock' => 3.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2623 V3 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 7 2700X 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD A8-6500 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1230 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-9600 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 3 3300X 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 1500X 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-7500T 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-3250 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-2320 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E6850 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q9505 2.83 GHz',
            'base_clock' => 2.83
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1240 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Opteron 6320 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X6 1090T Black 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2697 V3 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-8500 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-3450 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-4790K 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-4790K 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1245 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-10700F 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-1650 V2 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-11700KF 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-4790 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-8600 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2124 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-920 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-870 2.93 GHz',
            'base_clock' => 2.93
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-2500K 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-8100 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-7100 3.9 GHz',
            'base_clock' => 3.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-10700KF 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2124G 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-12600 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G4600 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G4620 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-7640X 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 1400 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-7800X 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-11600 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-12600KF 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-4820K 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-7740X 4.3 GHz',
            'base_clock' => 4.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 1600 (12nm) 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-960 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1235 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-10600 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8350 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G4560 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 2600 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-9500F 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-11600KF 3.9 GHz',
            'base_clock' => 3.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-4770K 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-3330S 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-10600K 4.1 GHz',
            'base_clock' => 4.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-2400 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-12500 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2603 V4 1.7 GHz',
            'base_clock' => 1.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-7400T 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 3600 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Threadripper 1900X 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-9500 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-7740X 4.3 GHz',
            'base_clock' => 4.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-4790T 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-4770K 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-3220T 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 5600X 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E4600 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E6320 1.86 GHz',
            'base_clock' => 1.86
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-7500T 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-9600K 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-7500 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1230 V2 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-6600K 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E6700 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-12400 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-10500 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-8400 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 3 2200G 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-3770S 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-560 3.333 GHz',
            'base_clock' => 3.333
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-920 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-7400T 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-4770 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-1620 V4 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 5600 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD A6-7470K 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-4440 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-11500 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G3930 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-6100 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2660 V3 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-11600K 3.9 GHz',
            'base_clock' => 3.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-10600KF 4.1 GHz',
            'base_clock' => 4.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-9600KF 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-12400F 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 5600G 3.9 GHz',
            'base_clock' => 3.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-7400 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-540 3.06 GHz',
            'base_clock' => 3.06
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2650 V4 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-550 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-6900K 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium Gold G6600 4.2 GHz',
            'base_clock' => 4.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q9300 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-8100 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E7600 3.06 GHz',
            'base_clock' => 3.06
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E7400 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1225 V3 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-9400 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 975 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-11400 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-7400 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-7600K 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 3 1200 (14nm) 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-9100 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1225 V2 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-9700 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon 240GE 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon 220GE 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-750 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8320 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2670 V3 2.3 GHz',
            'base_clock' => 2.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-6500 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 1600X 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-10300 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2640 V3 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-7600 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-2700K 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q8400 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-7100T 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-4690K 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2124 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-7600T 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Sempron 145 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-11400F 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-2125 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 3 3200G 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-2400S 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G4900 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-2380P 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-1620 V4 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-3245 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 3 3100 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E6420 2.13 GHz',
            'base_clock' => 2.13
        ]);
        
        CPU::Create([
            'nama' => 'AMD Pro A10-7850B 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1220 V5 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-1650 V3 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-760 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 4600G 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-660 3.33 GHz',
            'base_clock' => 3.33
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-4690 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1220 V5 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-3770 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-5775C 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E8400 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 3600 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2660 V3 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2620 2 GHz',
            'base_clock' => 2
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-7850K 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 5500 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-9400F 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2690 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-7100 3.9 GHz',
            'base_clock' => 3.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD A4-3400 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-8350K 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-4350 4.2 GHz',
            'base_clock' => 4.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-4350 4.2 GHz',
            'base_clock' => 4.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E7200 2.53 GHz',
            'base_clock' => 2.53
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-10305 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q6600 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E6400 2.13 GHz',
            'base_clock' => 2.13
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E6750 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E6850 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E2180 2 GHz',
            'base_clock' => 2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-10400F 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-2600 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium Gold G5420 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-4130T 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-4440S 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-12100 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-10320 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2630 V3 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2650 V3 2.3 GHz',
            'base_clock' => 2.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-4340 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G4930 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-9100F 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-860S 2.53 GHz',
            'base_clock' => 2.53
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-2120T 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E6300 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E8300 2.83 GHz',
            'base_clock' => 2.83
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-4460 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon 200GE 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Extreme QX9650 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1220 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-7350K 4.2 GHz',
            'base_clock' => 4.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-4570S 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-6402P 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E4500 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-10400 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-6300 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 3 4100 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium Gold G5400 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G3470 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-7320 4.1 GHz',
            'base_clock' => 4.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2643 V4 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E6550 2.33 GHz',
            'base_clock' => 2.33
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-10105 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-3570K 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 4500 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E4400 2 GHz',
            'base_clock' => 2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-12100F 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-3470 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2650L 1.8 GHz',
            'base_clock' => 1.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2603 V3 1.6 GHz',
            'base_clock' => 1.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium Gold G6600 4.2 GHz',
            'base_clock' => 4.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-6100 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-2105 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G3460 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E2140 1.6 GHz',
            'base_clock' => 1.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-4670K 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E6550 2.33 GHz',
            'base_clock' => 2.33
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-6320 3.9 GHz',
            'base_clock' => 3.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium Gold G6605 4.3 GHz',
            'base_clock' => 4.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E7500 2.93 GHz',
            'base_clock' => 2.93
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium Gold G5400T 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E6400 2.13 GHz',
            'base_clock' => 2.13
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2660 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E4300 1.8 GHz',
            'base_clock' => 1.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-4690 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E6500 2.93 GHz',
            'base_clock' => 2.93
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-4670 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-3450S 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-10100 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G645 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium Gold G5400 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-6300 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-3240 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G3420 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium Gold G6500 4.1 GHz',
            'base_clock' => 4.1
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon 3000G (14nm) 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD A6-9500 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-6300T 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E2160 1.8 GHz',
            'base_clock' => 1.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2620 V3 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G6950 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E6420 2.13 GHz',
            'base_clock' => 2.13
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-4150 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD A4-3300 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G640T 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-5800K 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-6120 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2680 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-4570 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E7200 2.53 GHz',
            'base_clock' => 2.53
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G3930 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-1620 V3 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E5300 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E5300 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G4400 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G870 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-4130 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G3900 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2650L V2 1.7 GHz',
            'base_clock' => 1.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G3250 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-6098P 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G630T 2.3 GHz',
            'base_clock' => 2.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G2120 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G4900T 1.8 GHz',
            'base_clock' => 1.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 640 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 820 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G3258 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G4920 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-3470S 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-2120 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-10105F 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G860 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2603 1.8 GHz',
            'base_clock' => 1.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium Gold G7400 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-3210 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G540 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2620 2 GHz',
            'base_clock' => 2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 640 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G4400 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G3900 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G530 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron E3300 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2620 2 GHz',
            'base_clock' => 2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 635 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2620 V3 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G630 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G4500 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-10100F 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-4620 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 830 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 620 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E5300 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2609 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 840 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2650 2 GHz',
            'base_clock' => 2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2640 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G4900 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E2200 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q8200 2.33 GHz',
            'base_clock' => 2.33
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2630 2.3 GHz',
            'base_clock' => 2.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q9550 2.83 GHz',
            'base_clock' => 2.83
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium Gold G6405 4.1 GHz',
            'base_clock' => 4.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G2020 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G5920 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron 430 1.8 GHz',
            'base_clock' => 1.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron 440 2 GHz',
            'base_clock' => 2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron 420 1.6 GHz',
            'base_clock' => 1.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD A4-6300B 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-2100 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2650 V2 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 630 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G2140 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E2220 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G3420 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium Gold G6400 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q9300 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q9400 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'AMD A4-6300 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron E3400 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G6900 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E7300 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G1610 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E5700 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E7300 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G440 1.6 GHz',
            'base_clock' => 1.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G640 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X2 240 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G5925 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E8400 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2630 2.3 GHz',
            'base_clock' => 2.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G5900 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron E3500 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron E1400 2 GHz',
            'base_clock' => 2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 2600X 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 3600 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 3600XT 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-9700F 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 7 3700X 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-9700 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 3500X 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-6300 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-4590 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-9590 4.7 GHz',
            'base_clock' => 4.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-6400 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 3500 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-5820K 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E2200 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-6600 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-4790 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-3570 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 3600X 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 3 1300X 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 7 3800X 3.9 GHz',
            'base_clock' => 3.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 9 3900X 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E8500 3.16 GHz',
            'base_clock' => 3.16
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8320 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X4 950 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 2600 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 3 3200G 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G5905 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-6500 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-2500 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD A6-6400K 3.9 GHz',
            'base_clock' => 3.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 3 1200 (12nm) 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2697 V2 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-3220 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-3330 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-7700K 4.2 GHz',
            'base_clock' => 4.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-5930K 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 2600X 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-9400F 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-4300 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 2400G 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8300 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon 3000G (14nm) 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 5 3400G 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 7 1700X 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon 200GE 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-4160 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-5960X 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-6700K 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'AMD A8-9600 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-9700K 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-870 2.93 GHz',
            'base_clock' => 2.93
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 7 2700 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Threadripper 2920X 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X4 860K 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 3 1200 (12nm) 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-3820 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 3 2200G 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-650 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD A8-7600 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2687W V2 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-3570 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-4170 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-4790S 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2699 V3 2.3 GHz',
            'base_clock' => 2.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-4430 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-10900K 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD A8-6600K 3.9 GHz',
            'base_clock' => 3.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-10600K 4.1 GHz',
            'base_clock' => 4.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-10850K 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2698 V4 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-9600K 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-7500 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-9900T 2.1 GHz',
            'base_clock' => 2.1
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8120 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1231 V3 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-6400 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-6350 3.9 GHz',
            'base_clock' => 3.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8320E 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8350 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-1620 V2 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-10850KA Avengers Limited Edition 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 965 Black 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E5800 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-6100 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-7800 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-8600K 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-10325 3.9 GHz',
            'base_clock' => 3.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-4100 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD 3850 1.3 GHz',
            'base_clock' => 1.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-6700T 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2697 V4 2.3 GHz',
            'base_clock' => 2.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-4590S 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II 160u 1.8 GHz',
            'base_clock' => 1.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1240L V5 2.1 GHz',
            'base_clock' => 2.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-6500T 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-3350P 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-4570T 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-8400T 1.7 GHz',
            'base_clock' => 1.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-9100T 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2670 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X2 220 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-9400 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-4690K 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD A8-7650K 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-6400T 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G4600 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD A8-5500 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-8500T 2.1 GHz',
            'base_clock' => 2.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-9900X 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 955 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD 2650 1.45 GHz',
            'base_clock' => 1.45
        ]);
        
        CPU::Create([
            'nama' => 'AMD A8-5600K 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-9500T 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-530 2.93 GHz',
            'base_clock' => 2.93
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X6 1100T Black 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-4690K 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-9960X 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-7940X 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron 430 1.8 GHz',
            'base_clock' => 1.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-1620 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-2300 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-4771 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD A8-7680 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-4330 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-9350KF 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Extreme QX9770 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-990X Extreme Edition 3.467 GHz',
            'base_clock' => 3.467
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-7600K 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-9820X 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-2130 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-4460S 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 7 1800X 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2670 V3 2.3 GHz',
            'base_clock' => 2.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2680 V3 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2660 V2 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-7700K 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E8600 3.33 GHz',
            'base_clock' => 3.33
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X4 760K 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-9590 4.7 GHz',
            'base_clock' => 4.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G2030 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2670 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X4 860K 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD A6-7480 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X6 1055T 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-2310 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G3220 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-8300 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-9700T 2 GHz',
            'base_clock' => 2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2288G 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-970 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1240 V3 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 955 Black 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-9590 4.7 GHz',
            'base_clock' => 4.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G1840 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD A6-7400K 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-7890K 4.1 GHz',
            'base_clock' => 4.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2620 V2 2.1 GHz',
            'base_clock' => 2.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2697 V3 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD A6-5400K 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1220 V2 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-4300 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-5675C 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-9700E 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD A12-9800 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-1650 V4 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Threadripper 2990WX 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Threadripper 2970WX 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G620 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-6700 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8370 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon 220GE 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon 240GE 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-9900 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-9600K 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2683 V4 2.1 GHz',
            'base_clock' => 2.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2680 V2 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1235L V5 2 GHz',
            'base_clock' => 2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2650L V4 1.7 GHz',
            'base_clock' => 1.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-2550K 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-5800K 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X4 880K 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Ryzen 7 1800X 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G3240 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E5400 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X2 250 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD A6-3500 2.1 GHz',
            'base_clock' => 2.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1265L V3 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-7860k 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD A6-9500E 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-3570S 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-9500 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2246G 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2637 V3 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD A8-3850 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-4170 4.2 GHz',
            'base_clock' => 4.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1246 V3 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2667 V2 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-5820K 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2690 V3 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-6600 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G3260 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-7980XE 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Threadripper 2950X 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-9350K 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2650 V3 2.3 GHz',
            'base_clock' => 2.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-9400T 1.8 GHz',
            'base_clock' => 1.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X3 450 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD A8-3870K 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-6200 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-3240 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-9400 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-4590T 2 GHz',
            'base_clock' => 2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-10100T 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2640 V2 2 GHz',
            'base_clock' => 2
        ]);
        
        CPU::Create([
            'nama' => 'AMD A4-5300 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1265L V2 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-4130 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G2010 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1271 V3 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-6350 3.9 GHz',
            'base_clock' => 3.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X4 970 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2630 V3 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E4300 1.8 GHz',
            'base_clock' => 1.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E5200 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E8600 3.33 GHz',
            'base_clock' => 3.33
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-4370 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-9600T 2.3 GHz',
            'base_clock' => 2.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1260L V5 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD Threadripper 2920X 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G5925 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G5905T 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X2 555 Black 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q9400 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X6 1045T 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X4 750K 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-1650 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8370E 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1225 V5 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X4 845 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2630 V2 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X3 720 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 945 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-880 3.06 GHz',
            'base_clock' => 3.06
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X6 1075T 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8120 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8150 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-5700 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-4690S 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD A4-7300 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-7100T 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2420V2 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-9920X 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X2 215 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q8400 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-2100T 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1245 V3 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-6790K 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-4100 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-4160 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-3770T 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8310 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-6100T 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium Gold G5600 3.9 GHz',
            'base_clock' => 3.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X2 550 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E4500 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-975 Extreme Edition 3.33 GHz',
            'base_clock' => 3.33
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q8300 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 610e 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 970 Black 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E6700 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD 5150 1.6 GHz',
            'base_clock' => 1.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-5930K 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-7600 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium Gold G5500 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X3 435 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 920 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-860 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-930 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q6700 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 965 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD A6-3650 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X2 270 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X4 740 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G1820 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-5960X 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon 5370 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2683 V3 2 GHz',
            'base_clock' => 2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G4620 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G4560 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD A8-7670K 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-8600T 2.3 GHz',
            'base_clock' => 2.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-9800X 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-9500F 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-9400 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-9600 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2660 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 925 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X6 1055T 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E6600 3.06 GHz',
            'base_clock' => 3.06
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 645 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X6 1035T 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1275 V3 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-1660 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD E2-3200 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1276 V3 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X4 860K 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-1630 V3 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD Pro A10-7800B 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-4770T 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-6700T 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-6850K 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G4560T 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-8350K 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2244G 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Sempron 140 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X2 250u 1.6 GHz',
            'base_clock' => 1.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q9550 2.83 GHz',
            'base_clock' => 2.83
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q9650 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 975 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 980 Black 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD A8-3850 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1270 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD 5150 1.6 GHz',
            'base_clock' => 1.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 651 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-1680 V3 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X4 840 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-6400T 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2695 V4 2.1 GHz',
            'base_clock' => 2.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-7300 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G465 1.9 GHz',
            'base_clock' => 1.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X2 B59 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X2 250 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E2220 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-655K 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-661 3.33 GHz',
            'base_clock' => 3.33
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-680 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q9550S 2.83 GHz',
            'base_clock' => 2.83
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 641 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-9370 4.4 GHz',
            'base_clock' => 4.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-4350 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-4360 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-4160T 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1226 V3 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-1660 V2 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2637 V2 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8370 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2609 V3 1.9 GHz',
            'base_clock' => 1.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1270 V5 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-1650 V4 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-7900X 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-7740X 4.3 GHz',
            'base_clock' => 4.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-7920X 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-9500F 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2630L V2 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron 420 1.6 GHz',
            'base_clock' => 1.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron 450 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 630 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 810 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 910e 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E5500 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E6750 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E8200 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X2 245 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 631 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 645 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X2 260 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 651K 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1275 V2 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1280 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G1630 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD A6-6420K 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Sempron 150 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-7800 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD A4-4000 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G470 2 GHz',
            'base_clock' => 2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 B99 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2680 V3 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G4520 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-6900K 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-7350K 4.2 GHz',
            'base_clock' => 4.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-7800X 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-7640X 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X4 940 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-9320 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 960T Black 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G2130 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-9370 4.4 GHz',
            'base_clock' => 4.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2660 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X2 260 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 945 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X2 240e 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Extreme X6800 2.93 GHz',
            'base_clock' => 2.93
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X2 255 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E5500 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 955 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD A6-3670K 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 970 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-2450P 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X2 250 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8300 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1225 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1270 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G1620 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-3340S 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2690 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2609 V2 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Sempron 145 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-6800K 4.1 GHz',
            'base_clock' => 4.1
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-6800B 4.1 GHz',
            'base_clock' => 4.1
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-4320 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1230 V3 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD A8-7600 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2685 V3 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-7870K 3.9 GHz',
            'base_clock' => 3.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-5675C 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-6320 3.9 GHz',
            'base_clock' => 3.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1240 V5 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1280 V5 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1275 V5 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Opteron 6328 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X4 845 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon 5370 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X4 870K 3.9 GHz',
            'base_clock' => 3.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-7101TE 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-7500T 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-7820X 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2430V2 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1270 V6 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X4 970 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD A6-9550 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X4 940 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-3550S 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G4920 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-8300 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium Gold G5600 3.9 GHz',
            'base_clock' => 3.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-7940X 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-9940X 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-9920X 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2665 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G3920 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-9300 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-9320 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-9350K 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2276G 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-4570S 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i9-9820X 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X2 255 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron 420 1.6 GHz',
            'base_clock' => 1.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron 440 2 GHz',
            'base_clock' => 2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X3 445 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 620 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X3 710 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X2 245e 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X2 260u 1.8 GHz',
            'base_clock' => 1.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X3 705e 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X3 720 Black 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X3 740 Black 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 905e 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron E1400 2 GHz',
            'base_clock' => 2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E2140 1.6 GHz',
            'base_clock' => 1.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E4400 2 GHz',
            'base_clock' => 2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E7500 2.93 GHz',
            'base_clock' => 2.93
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E8400 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E8400 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E8500 3.16 GHz',
            'base_clock' => 3.16
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E8500 3.16 GHz',
            'base_clock' => 3.16
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-670 3.46 GHz',
            'base_clock' => 3.46
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q8200 2.33 GHz',
            'base_clock' => 2.33
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q9505 2.83 GHz',
            'base_clock' => 2.83
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Extreme QX6850 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 940 Black 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X3 455 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X2 545 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E6800 3.333 GHz',
            'base_clock' => 3.333
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 925 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X3 460 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G840 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Sempron 130 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G620T 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8100 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X6 1100T Black 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1280 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X2 370K 4.2 GHz',
            'base_clock' => 4.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G1830 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2603 V2 1.8 GHz',
            'base_clock' => 1.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD A4-4020 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-4130 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G1850 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-6700T 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-7700K 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD A4-6320 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD A4-3300 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD A4-3420 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-4200 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-6200 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X2 221 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 638 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-4370 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8320E 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X4 550 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Pro A8-7600B 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'AMD Pro A6-7400B 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X2 450 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G3250 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G3460 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2609 V3 1.9 GHz',
            'base_clock' => 1.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2650L V3 1.8 GHz',
            'base_clock' => 1.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2609 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X6 1065T 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-6300T 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-6500T 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-6600T 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G4500 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G4400T 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1275 V5 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G3260 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X4 880K 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-6800K 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-6850K 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-6950X 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-7320 4.1 GHz',
            'base_clock' => 4.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G3950 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-7300T 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-7400T 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-7600T 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-7700T 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1275 V6 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD A6-9550 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-8300T 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium Gold G5500T 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-4360 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2274G 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G3240 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron E3400 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2630 V2 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G4600T 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2660 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X2 240 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X3 425 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X2 550 Black 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 805 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 910 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 925 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 945 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X2 235e 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X3 400e 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X3 405e 2.3 GHz',
            'base_clock' => 2.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X3 405e 2.3 GHz',
            'base_clock' => 2.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X3 415e 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 600e 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 605e 2.3 GHz',
            'base_clock' => 2.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 610e 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 955 Black 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 965 Black (140W) 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron E1200 1.6 GHz',
            'base_clock' => 1.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E2160 1.8 GHz',
            'base_clock' => 1.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E2160 1.8 GHz',
            'base_clock' => 1.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron E3200 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E4600 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E5400 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E6300 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E6320 1.86 GHz',
            'base_clock' => 1.86
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E6400 2.13 GHz',
            'base_clock' => 2.13
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E6550 2.33 GHz',
            'base_clock' => 2.33
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E6600 3.06 GHz',
            'base_clock' => 3.06
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E6700 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E6700 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E7400 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E8200 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-965 Extreme Edition 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q8300 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q8400S 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q9400S 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q9400S 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Extreme QX9650 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Extreme QX9770 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 630 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X2 265 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X3 425 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X2 560 Black 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X2 565 Black 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 840 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 955 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X2 245 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 630 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X3 720 Black 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Sempron 130 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X3 440 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G850 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-2405S 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD A4-3400 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 960T Black 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8150 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-6100 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X4 980 Black 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD A6-3650 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G555 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD A4-4000 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X2 340 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G3430 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD 5350 2.05 GHz',
            'base_clock' => 2.05
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G3440 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G3450 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G3258 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Sempron X2 198 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Sempron X2 198 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Sempron X2 190 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-6700 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD A4-6320 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD A4-3300 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD A4-3400 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD A4-3400 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD A4-6300 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD A4-5300 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD A4-4020 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD A4-3450 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD A6-7400K 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G470 2 GHz',
            'base_clock' => 2
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-4150 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-4170 4.2 GHz',
            'base_clock' => 4.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-6130 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-6350 3.9 GHz',
            'base_clock' => 3.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8120 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8140 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X2 221 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 651 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 638 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD E2-3200 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X2 370K 4.2 GHz',
            'base_clock' => 4.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-4360T 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2687W 3.1 GHz',
            'base_clock' => 3.1
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8370E 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X4 530 2 GHz',
            'base_clock' => 2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon X2 350 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Sempron X2 250 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G3250 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G3250T 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G3450 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2603 V3 1.6 GHz',
            'base_clock' => 1.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X6 1065T 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2603 V2 1.8 GHz',
            'base_clock' => 1.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1245 V3 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD FX-8310 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-4570S 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G3470 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD A8-7670K 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-6300 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G4520 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G4500T 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E3-1245 V5 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Opteron 6328 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Opteron 6344 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD Opteron 6378 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD A6-7470K 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-7860k 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-7890K 4.1 GHz',
            'base_clock' => 4.1
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2658 V3 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-7300 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G3950 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron G3930T 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-7100T 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-7300T 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i3-7300T 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD A8-7650K 3.3 GHz',
            'base_clock' => 3.3
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2440V2 1.9 GHz',
            'base_clock' => 1.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2450V2 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-870S 2.667 GHz',
            'base_clock' => 2.667
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium Gold G5500 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E-2134 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-1620 V3 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X2 245 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron 430 1.8 GHz',
            'base_clock' => 1.8
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X3 435 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X3 440 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X3 440 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X2 545 3 GHz',
            'base_clock' => 3
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 635 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'AMD Athlon II X4 635 2.9 GHz',
            'base_clock' => 2.9
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron E1200 1.6 GHz',
            'base_clock' => 1.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron E1500 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron E1500 2.2 GHz',
            'base_clock' => 2.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron E1600 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron E1600 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E2140 1.6 GHz',
            'base_clock' => 1.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E2180 2 GHz',
            'base_clock' => 2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E2180 2 GHz',
            'base_clock' => 2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron E3200 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Celeron E3300 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E5400 2.7 GHz',
            'base_clock' => 2.7
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium E6500 2.93 GHz',
            'base_clock' => 2.93
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E6540 2.33 GHz',
            'base_clock' => 2.33
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E7400 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E7500 2.93 GHz',
            'base_clock' => 2.93
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E7600 3.06 GHz',
            'base_clock' => 3.06
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E8190 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E8200 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Duo E8500 3.16 GHz',
            'base_clock' => 3.16
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-750S 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-750S 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-860S 2.53 GHz',
            'base_clock' => 2.53
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-940 2.93 GHz',
            'base_clock' => 2.93
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q6700 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q8200 2.33 GHz',
            'base_clock' => 2.33
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q8200S 2.33 GHz',
            'base_clock' => 2.33
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q8200S 2.33 GHz',
            'base_clock' => 2.33
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q8300 2.5 GHz',
            'base_clock' => 2.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q8400S 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q9450 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q9505S 2.83 GHz',
            'base_clock' => 2.83
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Quad Q9550S 2.83 GHz',
            'base_clock' => 2.83
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Extreme QX6700 2.66 GHz',
            'base_clock' => 2.66
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Extreme QX6800 2.93 GHz',
            'base_clock' => 2.93
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Extreme QX6800 2.93 GHz',
            'base_clock' => 2.93
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Extreme QX6800 2.93 GHz',
            'base_clock' => 2.93
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Extreme QX9775 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Extreme QX9775 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core 2 Extreme QX9775 3.2 GHz',
            'base_clock' => 3.2
        ]);
        
        CPU::Create([
            'nama' => 'AMD Phenom II X3 715 Black 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Pentium G550 2.6 GHz',
            'base_clock' => 2.6
        ]);
        
        CPU::Create([
            'nama' => 'AMD A6-6420K 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-5700 3.4 GHz',
            'base_clock' => 3.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-6790B 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-6790K 4 GHz',
            'base_clock' => 4
        ]);
        
        CPU::Create([
            'nama' => 'AMD A10-7850K 3.7 GHz',
            'base_clock' => 3.7
        ]);
        
        CPU::Create([
            'nama' => 'AMD Pro A4-7300B 3.8 GHz',
            'base_clock' => 3.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-1650 V3 3.5 GHz',
            'base_clock' => 3.5
        ]);
        
        CPU::Create([
            'nama' => 'Intel Xeon E5-2622 V3 2.4 GHz',
            'base_clock' => 2.4
        ]);
        
        CPU::Create([
            'nama' => 'AMD A8-7670K 3.6 GHz',
            'base_clock' => 3.6
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i5-7600T 2.8 GHz',
            'base_clock' => 2.8
        ]);
        
        CPU::Create([
            'nama' => 'Intel Core i7-870S 2.667 GHz',
            'base_clock' => 2.667
        ]);
        
        GPU::Create([
            'nama'=>'Sony Playstation Vita GPU 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Sony Playstation Portable GPU 65nm 133 MHz',
            'base_clock'=>133
        ]);
        
        GPU::Create([
            'nama'=>'Sony Playstation 2 GPU 65nm 147 MHz',
            'base_clock'=>147
        ]);
        
        GPU::Create([
            'nama'=>'Sony Playstation 2 GPU 90nm 147 MHz',
            'base_clock'=>147
        ]);
        
        GPU::Create([
            'nama'=>'Sony Playstation Portable GPU 90nm 133 MHz',
            'base_clock'=>133
        ]);
        
        GPU::Create([
            'nama'=>'Sony Playstation 2 GPU 180nm 147 MHz',
            'base_clock'=>147
        ]);
        
        GPU::Create([
            'nama'=>'Sony Playstation 2 GPU 250nm 147 MHz',
            'base_clock'=>147
        ]);
        
        GPU::Create([
            'nama'=>'Sony Playstation GPU 350nm 53 MHz',
            'base_clock'=>53
        ]);
        
        GPU::Create([
            'nama'=>'Sony Playstation GPU 600nm 53 MHz',
            'base_clock'=>53
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Spectre 1000 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Spectre 2000 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Spectre 3000 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo4 4500 AGP 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo4 4500 PCI 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo4 4000 AGP 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo4 4800 AGP 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo4-2 4000 AGP 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo4-2 4200 AGP 143 MHz',
            'base_clock'=>143
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo4-2 4200 PCI 16 MB 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo4-2 4200 PCI 32 MB 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo4-2 4800 AGP 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo5 5000 AGP 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo5 5000 PCI 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo5 5500 AGP 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo5 5500 PCI 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo5 6000 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Velocity 100 143 MHz',
            'base_clock'=>143
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Velocity 200 143 MHz',
            'base_clock'=>143
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo3 3500 TV AGP 183 MHz',
            'base_clock'=>183
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo3 2000 AGP 143 MHz',
            'base_clock'=>143
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo3 2000 PCI 143 MHz',
            'base_clock'=>143
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo3 3000 AGP 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo3 3000 PCI 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo3 1000 AGP 143 MHz',
            'base_clock'=>143
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo Banshee AGP 16 MB 100 MHz',
            'base_clock'=>100
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo Banshee PCI 16 MB 100 MHz',
            'base_clock'=>100
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo2 12 MB 90 MHz',
            'base_clock'=>90
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo2 8 MB 90 MHz',
            'base_clock'=>90
        ]);
        
        GPU::Create([
            'nama'=>'3dfx Voodoo Graphics 4 MB 50 MHz',
            'base_clock'=>50
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Parhelia APVe 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'Matrox M9125 PCIe x16 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'Matrox QID 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'Matrox QID LP PCI 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'Matrox QID LP PCIe 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'Matrox QID PRO 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Parhelia 128 MB 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Parhelia 256 MB 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Parhelia HR256 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Millenium P650 230 MHz',
            'base_clock'=>230
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Millenium P750 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Parhelia DL256 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Parhelia PCI 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Parhelia Precision SDT 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Parhelia Precision SGT 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Parhelia 128 MB 220 MHz',
            'base_clock'=>220
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Parhelia 128 MB 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Parhelia 256 MB 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Millennium G450 x2 MMS 125 MHz',
            'base_clock'=>125
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Millennium G450 x4 MMS 125 MHz',
            'base_clock'=>125
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Millennium G550 125 MHz',
            'base_clock'=>125
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Millennium G550 PCIe 125 MHz',
            'base_clock'=>125
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Millennium G450 125 MHz',
            'base_clock'=>125
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Millennium G450 LP 125 MHz',
            'base_clock'=>125
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Marvel G400-TV 125 MHz',
            'base_clock'=>125
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Millennium G200A 84 MHz',
            'base_clock'=>84
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Millennium G250 96 MHz',
            'base_clock'=>96
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Millennium G400 125 MHz',
            'base_clock'=>125
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Millennium G400 MAX 150 MHz',
            'base_clock'=>150
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Marvel G200 84 MHz',
            'base_clock'=>84
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Millennium G200 84 MHz',
            'base_clock'=>84
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Millennium G200 SD 84 MHz',
            'base_clock'=>84
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Mystique G200 84 MHz',
            'base_clock'=>84
        ]);
        
        GPU::Create([
            'nama'=>'Matrox Productiva G100 41 MHz',
            'base_clock'=>41
        ]);
        
        GPU::Create([
            'nama'=>'XGI Volari 8300 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'XGI Volari 8600 XT 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'XGI Volari Duo V5 Ultra 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'XGI Volari Duo V5 Ultra 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'XGI Volari Duo V8 Ultra 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'XGI Volari Duo V8 Ultra 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'XGI Volari V3 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'XGI Volari V3 XT 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'XGI Volari V5 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'XGI Volari V5 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'XGI Volari V5 Ultra 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'XGI Volari V5 Ultra 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'XGI Volari V8 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'XGI Volari V8 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'XGI Volari V8 Ultra 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'XGI Volari V8 Ultra 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'ATI Color Emulation Card 10 MHz',
            'base_clock'=>10
        ]);
        
        GPU::Create([
            'nama'=>'ATI Graphics Solution 10 MHz',
            'base_clock'=>10
        ]);
        
        GPU::Create([
            'nama'=>'ATI EGA Wonder 800 10 MHz',
            'base_clock'=>10
        ]);
        
        GPU::Create([
            'nama'=>'ATI Graphics Solution Plus 10 MHz',
            'base_clock'=>10
        ]);
        
        GPU::Create([
            'nama'=>'ATI VGA Improved Performance 10 MHz',
            'base_clock'=>10
        ]);
        
        GPU::Create([
            'nama'=>'ATI EGA Wonder 480 10 MHz',
            'base_clock'=>10
        ]);
        
        GPU::Create([
            'nama'=>'ATI EGA Wonder 800+ 25 MHz',
            'base_clock'=>25
        ]);
        
        GPU::Create([
            'nama'=>'ATI VGA Wonder 10 MHz',
            'base_clock'=>10
        ]);
        
        GPU::Create([
            'nama'=>'ATI VGA Wonder+ 10 MHz',
            'base_clock'=>10
        ]);
        
        GPU::Create([
            'nama'=>'ATI 8514-Ultra 10 MHz',
            'base_clock'=>10
        ]);
        
        GPU::Create([
            'nama'=>'ATI Graphics Ultra 10 MHz',
            'base_clock'=>10
        ]);
        
        GPU::Create([
            'nama'=>'ATI Graphics Ultra Pro ISA 10 MHz',
            'base_clock'=>10
        ]);
        
        GPU::Create([
            'nama'=>'ATI Graphics Ultra Pro ISA 10 MHz',
            'base_clock'=>10
        ]);
        
        GPU::Create([
            'nama'=>'ATI Graphics Vantage 10 MHz',
            'base_clock'=>10
        ]);
        
        GPU::Create([
            'nama'=>'ATI Graphics Wonder PCI 10 MHz',
            'base_clock'=>10
        ]);
        
        GPU::Create([
            'nama'=>'ATI Graphics Wonder VLB 10 MHz',
            'base_clock'=>10
        ]);
        
        GPU::Create([
            'nama'=>'ATI VGA Wonder XL24 10 MHz',
            'base_clock'=>10
        ]);
        
        GPU::Create([
            'nama'=>'ATI Graphics Ultra Pro PCI 66 MHz',
            'base_clock'=>66
        ]);
        
        GPU::Create([
            'nama'=>'ATI Graphics Ultra Pro VLB 10 MHz',
            'base_clock'=>10
        ]);
        
        GPU::Create([
            'nama'=>'ATI Graphics Ultra XLR VLB 10 MHz',
            'base_clock'=>10
        ]);
        
        GPU::Create([
            'nama'=>'ATI Graphics Pro Turbo 40 MHz',
            'base_clock'=>40
        ]);
        
        GPU::Create([
            'nama'=>'ATI Graphics Xpression 40 MHz',
            'base_clock'=>40
        ]);
        
        GPU::Create([
            'nama'=>'ATI Graphics Xpression ISA 40 MHz',
            'base_clock'=>40
        ]);
        
        GPU::Create([
            'nama'=>'ATI Video Xpression 62 MHz',
            'base_clock'=>62
        ]);
        
        GPU::Create([
            'nama'=>'ATI WinBoost 40 MHz',
            'base_clock'=>40
        ]);
        
        GPU::Create([
            'nama'=>'ATI WinCharger 40 MHz',
            'base_clock'=>40
        ]);
        
        GPU::Create([
            'nama'=>'ATI WinTurbo 40 MHz',
            'base_clock'=>40
        ]);
        
        GPU::Create([
            'nama'=>'ATI 3D Rage 44 MHz',
            'base_clock'=>44
        ]);
        
        GPU::Create([
            'nama'=>'ATI 3D Rage II 60 MHz',
            'base_clock'=>60
        ]);
        
        GPU::Create([
            'nama'=>'ATI 3D Rage II+ DVD 60 MHz',
            'base_clock'=>60
        ]);
        
        GPU::Create([
            'nama'=>'ATI 3D Rage IIC AGP 60 MHz',
            'base_clock'=>60
        ]);
        
        GPU::Create([
            'nama'=>'ATI 3D Rage IIC PCI 60 MHz',
            'base_clock'=>60
        ]);
        
        GPU::Create([
            'nama'=>'ATI Video Xpression 62 MHz',
            'base_clock'=>62
        ]);
        
        GPU::Create([
            'nama'=>'ATI Video Xpression+ 62 MHz',
            'base_clock'=>62
        ]);
        
        GPU::Create([
            'nama'=>'ATI 3D Rage PRO AGP 75 MHz',
            'base_clock'=>75
        ]);
        
        GPU::Create([
            'nama'=>'ATI 3D Rage PRO PCI 75 MHz',
            'base_clock'=>75
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage LT PRO AGP 75 MHz',
            'base_clock'=>75
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage LT PRO AGP 75 MHz',
            'base_clock'=>75
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage PRO Turbo AGP 75 MHz',
            'base_clock'=>75
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage PRO Turbo PCI 75 MHz',
            'base_clock'=>75
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage 128 GL 80 MHz',
            'base_clock'=>80
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage 128 GL PCI 103 MHz',
            'base_clock'=>103
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage 128 PRO Ultra GL 130 MHz',
            'base_clock'=>130
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage 128 VR AGP 80 MHz',
            'base_clock'=>80
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage 128 VR PCI 80 MHz',
            'base_clock'=>80
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage XL PCI 125 MHz',
            'base_clock'=>125
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder 128 90 MHz',
            'base_clock'=>90
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder 128 PCI 90 MHz',
            'base_clock'=>90
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder 128 PRO 120 MHz',
            'base_clock'=>120
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder 128 PRO Ultra 134 MHz',
            'base_clock'=>134
        ]);
        
        GPU::Create([
            'nama'=>'ATI Fire GL1 45 MHz',
            'base_clock'=>45
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage 128 PRO 118 MHz',
            'base_clock'=>118
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage 128 PRO Ultra 130 MHz',
            'base_clock'=>130
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage 128 Ultra 130 MHz',
            'base_clock'=>130
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage Fury 80 MHz',
            'base_clock'=>80
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage Fury MAXX 125 MHz',
            'base_clock'=>125
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage Mobility 128 105 MHz',
            'base_clock'=>105
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage Mobility 128 105 MHz',
            'base_clock'=>105
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage Mobility-CL 75 MHz',
            'base_clock'=>75
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage Mobility-M 75 MHz',
            'base_clock'=>75
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage Mobility-M1 83 MHz',
            'base_clock'=>83
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage Mobility-M3 105 MHz',
            'base_clock'=>105
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage Mobility-M4 105 MHz',
            'base_clock'=>105
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage Mobility-P 75 MHz',
            'base_clock'=>75
        ]);
        
        GPU::Create([
            'nama'=>'ATI Rage XL PCI 83 MHz',
            'base_clock'=>83
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder Radeon 7200 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'ATI Fire GL2 120 MHz',
            'base_clock'=>120
        ]);
        
        GPU::Create([
            'nama'=>'ATI Fire GL3 120 MHz',
            'base_clock'=>120
        ]);
        
        GPU::Create([
            'nama'=>'ATI GameCube GPU 162 MHz',
            'base_clock'=>162
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 7200 143 MHz',
            'base_clock'=>143
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 7200 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 7200 64 MB 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon DDR 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon DDR MAXX 148 MHz',
            'base_clock'=>148
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon SDR 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon SDR PCI 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder Radeon 8500 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder Radeon 8500DV 230 MHz',
            'base_clock'=>230
        ]);
        
        GPU::Create([
            'nama'=>'ATI Fire GL4 150 MHz',
            'base_clock'=>150
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL 8700 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL 8800 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility FireGL 7800 280 MHz',
            'base_clock'=>280
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 7500 280 MHz',
            'base_clock'=>280
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 7500 230 MHz',
            'base_clock'=>230
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 7500C 230 MHz',
            'base_clock'=>230
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 7000 183 MHz',
            'base_clock'=>183
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 7000 PCI 133 MHz',
            'base_clock'=>133
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 7500 290 MHz',
            'base_clock'=>290
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 7500 LE 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 8500 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon DDR VIVO 183 MHz',
            'base_clock'=>183
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon DDR VIVO OEM 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon DDR VIVO SE 187 MHz',
            'base_clock'=>187
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon LE 148 MHz',
            'base_clock'=>148
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon VE 183 MHz',
            'base_clock'=>183
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon VE PCI 183 MHz',
            'base_clock'=>183
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder 9500 277 MHz',
            'base_clock'=>277
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder Radeon 7500 260 MHz',
            'base_clock'=>260
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder Radeon 7500 VE 260 MHz',
            'base_clock'=>260
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL 9500 Z1-128 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL 9700 X1-128 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL 9700 X1-256 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL 9700 X1-256p 324 MHz',
            'base_clock'=>324
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility FireGL 9000 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 9000 240 MHz',
            'base_clock'=>240
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 9000 240 MHz',
            'base_clock'=>240
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 9000 240 MHz',
            'base_clock'=>240
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon-P 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 7500 Mac Edition 260 MHz',
            'base_clock'=>260
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 8500 LE 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 8500 X4 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 8500 XT 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9000 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9000 LE 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9000 PRO 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9500 PRO 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9700 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9700 PRO 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9700 PRO X4 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon IGP 320 160 MHz',
            'base_clock'=>160
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon IGP 320M 160 MHz',
            'base_clock'=>160
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon IGP 330M 183 MHz',
            'base_clock'=>183
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon IGP 340 183 MHz',
            'base_clock'=>183
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon IGP 340M 183 MHz',
            'base_clock'=>183
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon IGP 345M 183 MHz',
            'base_clock'=>183
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon IGP 350M 183 MHz',
            'base_clock'=>183
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder 9000 PRO 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder 9600 324 MHz',
            'base_clock'=>324
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder 9600 PRO 398 MHz',
            'base_clock'=>398
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder 9700 PRO 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder 9800 PRO 378 MHz',
            'base_clock'=>378
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder 9800 SE 378 MHz',
            'base_clock'=>378
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL 9600 T2-128 398 MHz',
            'base_clock'=>398
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL 9600 T2-64S 324 MHz',
            'base_clock'=>324
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL 9800 X2-256 380 MHz',
            'base_clock'=>380
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL 9800 X2-256T 412 MHz',
            'base_clock'=>412
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility FireGL T2 320 MHz',
            'base_clock'=>320
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 144 MHz',
            'base_clock'=>144
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 144 MHz',
            'base_clock'=>144
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 7000 IGP 183 MHz',
            'base_clock'=>183
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 9000 IGP 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 9000 IGP 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 9000 IGP 222 MHz',
            'base_clock'=>222
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 9100 IGP 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 9100 PRO IGP 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 9200 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 9200 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9100 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9100 PCI 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9200 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9200 LE 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9200 PCI 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9200 PRO 240 MHz',
            'base_clock'=>240
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9200 SE 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9200 SE PCI 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9500 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9550 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9550 SE 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9600 324 MHz',
            'base_clock'=>324
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9600 PRO 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9600 SE 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9600 TX 297 MHz',
            'base_clock'=>297
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9600 XT 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9800 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9800 PRO 380 MHz',
            'base_clock'=>380
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9800 PRO 380 MHz',
            'base_clock'=>380
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9800 PRO MAXX 380 MHz',
            'base_clock'=>380
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9800 SE 331 MHz',
            'base_clock'=>331
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9800 SE 378 MHz',
            'base_clock'=>378
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9800 XT 412 MHz',
            'base_clock'=>412
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9800 XXL 390 MHz',
            'base_clock'=>390
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder 9200 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder 9200 SE 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder 9600 XT 527 MHz',
            'base_clock'=>527
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder X800 GT 398 MHz',
            'base_clock'=>398
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder X800 XT 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL V3100 391 MHz',
            'base_clock'=>391
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL V3200 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL V5000 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL V5100 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL V7100 493 MHz',
            'base_clock'=>493
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL X3-256 491 MHz',
            'base_clock'=>491
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility FireGL T2e 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility FireGL V3100 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility FireGL V3200 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 7000 144 MHz',
            'base_clock'=>144
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 9500 230 MHz',
            'base_clock'=>230
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 9550 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 9600 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 9600 PRO 333 MHz',
            'base_clock'=>333
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 9600 PRO Turbo 337 MHz',
            'base_clock'=>337
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 9700 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 9700 SE 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon 9800 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X600 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X600 SE 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X800 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 7000 Mac Edition 183 MHz',
            'base_clock'=>183
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 7000 Mac Edition PCI 183 MHz',
            'base_clock'=>183
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9000 PRO Mac Edition 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9250 240 MHz',
            'base_clock'=>240
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9250 PCI 240 MHz',
            'base_clock'=>240
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9800 PRO Mac Edition 378 MHz',
            'base_clock'=>378
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9800 XT Mac Edition 412 MHz',
            'base_clock'=>412
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X300 375 MHz',
            'base_clock'=>375
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X300 LE 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X300 SE 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X600 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X600 PRO 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X600 PRO 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X600 SE 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X600 XT 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X700 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X700 AGP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X700 LE 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X700 PRO 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X700 PRO AGP 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X700 XT 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 PRO 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 PRO AGP 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 SE 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 SE AGP 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 VE AGP 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 XL 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 XL AGP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 XT 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 XT AGP 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 XT Mac Edition 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 XT Platinum 520 MHz',
            'base_clock'=>520
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 XT Platinum AGP 520 MHz',
            'base_clock'=>520
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X850 PRO 507 MHz',
            'base_clock'=>507
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X850 XT 520 MHz',
            'base_clock'=>520
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X850 XT Platinum 540 MHz',
            'base_clock'=>540
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon Xpress 200 IGP 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon Xpress 200 IGP 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder 2006 AGP Edition 324 MHz',
            'base_clock'=>324
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder 2006 PCIe Edition 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder X1800 XL 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder X600 PRO 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder X800 SE 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder X800 VE 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder X800 XL 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL V3300 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL V3350 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL V3400 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL V5200 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL V7200 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL V7300 594 MHz',
            'base_clock'=>594
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL V7350 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility FireGL V5000 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X200 IGP 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X200 IGP 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X300 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X300 IGP 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X700 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X700 XL 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X800 XT 480 MHz',
            'base_clock'=>480
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 9550 XT 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1300 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1300 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1300 AGP 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1300 LE 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1300 PCI 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1300 PCI 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1300 PRO 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1300 PRO AGP 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1600 PRO 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1600 XT 590 MHz',
            'base_clock'=>590
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1800 CrossFire Edition 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1800 XL 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1800 XT 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X550 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X550 HyperMemory 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X700 SE 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X740 XL 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 CrossFire Edition 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 GT 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 GT 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 GT AGP 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 GTO 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 GTO AGP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 GTO AGP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 GTO2 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X850 PRO AGP 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X850 XT AGP 520 MHz',
            'base_clock'=>520
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X850 XT Platinum AGP 540 MHz',
            'base_clock'=>540
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon Xpress 1100 Mobile IGP 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon Xpress 1100 Mobile IGP 336 MHz',
            'base_clock'=>336
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon Xpress 200M IGP 336 MHz',
            'base_clock'=>336
        ]);
        
        GPU::Create([
            'nama'=>'ATI Xbox 360 GPU 90nm 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder X1900 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireMV 2200 324 MHz',
            'base_clock'=>324
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireMV 2200 PCI 240 MHz',
            'base_clock'=>240
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility FireGL V5200 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X1300 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X1350 371 MHz',
            'base_clock'=>371
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X1350 419 MHz',
            'base_clock'=>419
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X1400 445 MHz',
            'base_clock'=>445
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X1450 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X1600 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X1700 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X1800 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X1800 XT 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1050 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1050 AGP 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1300 PRO 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1300 XT 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1300 XT AGP 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1650 PRO 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1650 PRO AGP 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1650 XT 525 MHz',
            'base_clock'=>525
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1650 XT AGP 540 MHz',
            'base_clock'=>540
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1650 XT Dual 525 MHz',
            'base_clock'=>525
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1800 GTO 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1800 GTO2 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1900 CrossFire Edition 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1900 G5 Mac Edition 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1900 GT 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1900 XT 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1900 XTX 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1950 CrossFire Edition 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1950 PRO 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1950 PRO AGP 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1950 XT 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1950 XT AGP 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1950 XTX 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X300 SE HyperMemory 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X850 CrossFire Edition 520 MHz',
            'base_clock'=>520
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon Xpress 1150 Mobile IGP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Wii GPU 243 MHz',
            'base_clock'=>243
        ]);
        
        GPU::Create([
            'nama'=>'ATI ES1000 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL V3600 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL V5600 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL V7600 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL V7700 777 MHz',
            'base_clock'=>777
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL V8600 688 MHz',
            'base_clock'=>688
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireGL V8650 688 MHz',
            'base_clock'=>688
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireMV 2250 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireMV 2250 PCIe x1 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility FireGL V5250 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility FireGL V5600 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 2300 480 MHz',
            'base_clock'=>480
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 2400 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 2400 XT 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 2400 XT Mac Edition 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 2600 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 2600 XT 680 MHz',
            'base_clock'=>680
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 2600 XT Mac Edition 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 2700 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X1600 Mac Edition 398 MHz',
            'base_clock'=>398
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X1900 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X2300 479 MHz',
            'base_clock'=>479
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X2300 479 MHz',
            'base_clock'=>479
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X2300 HD 479 MHz',
            'base_clock'=>479
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon X2500 460 MHz',
            'base_clock'=>460
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon E2400 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 2350 PRO 525 MHz',
            'base_clock'=>525
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 2400 PRO 525 MHz',
            'base_clock'=>525
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 2400 PRO AGP 525 MHz',
            'base_clock'=>525
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 2400 PRO PCI 525 MHz',
            'base_clock'=>525
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 2400 XT 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 2600 PRO 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 2600 PRO AGP 594 MHz',
            'base_clock'=>594
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 2600 XT 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 2600 XT 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 2600 XT AGP 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 2600 XT AGP 722 MHz',
            'base_clock'=>722
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 2600 XT X2 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 2900 GT 601 MHz',
            'base_clock'=>601
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 2900 PRO 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 2900 XT 743 MHz',
            'base_clock'=>743
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 2900 XTX 743 MHz',
            'base_clock'=>743
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 2950 PRO 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 2950 XTX 777 MHz',
            'base_clock'=>777
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3450 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3450 X2 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3850 668 MHz',
            'base_clock'=>668
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3870 777 MHz',
            'base_clock'=>777
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3870 AGP 777 MHz',
            'base_clock'=>777
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1050 AGP 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1550 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1550 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1550 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1550 AGP 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1550 PCI 452 MHz',
            'base_clock'=>452
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1600 635 MHz',
            'base_clock'=>635
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1600 PRO AGP 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1600 XT Dual 590 MHz',
            'base_clock'=>590
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1650 635 MHz',
            'base_clock'=>635
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1650 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1650 AGP 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1650 GT 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1650 GTO 587 MHz',
            'base_clock'=>587
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1700 FSC 587 MHz',
            'base_clock'=>587
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1700 SE 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1950 GT 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1950 GT AGP 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1950 PRO DUAL 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1950 XTX Uber Edition 670 MHz',
            'base_clock'=>670
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X550 XT 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X550 XTX 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 GT AGP 473 MHz',
            'base_clock'=>473
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 GTO 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X800 GTO AGP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon Xpress 1100 IGP 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon Xpress 1150 IGP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon Xpress 1200 IGP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon Xpress 1200 IGP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon Xpress 1200 Mobile IGP 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon Xpress 1200 Mobile IGP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon Xpress 1250 IGP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon Xpress 1250 Mobile IGP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon Xpress 1250 Mobile IGP 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon Xpress 1270 Mobile IGP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon Xpress 1270 Mobile IGP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Xbox 360 GPU 80nm 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI All-In-Wonder HD 3650 722 MHz',
            'base_clock'=>722
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireMV 2260 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireMV 2260 PCIe x1 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireMV 2400 PCI 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI FireMV 2400 PCIe x1 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro 2260 PCI 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro V3700 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro V3750 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro V5700 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro V8700 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro V8700 Duo 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro V8750 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility FireGL V5700 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 3410 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 3430 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 3450 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 3470 680 MHz',
            'base_clock'=>680
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 3650 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 3670 680 MHz',
            'base_clock'=>680
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 3850 580 MHz',
            'base_clock'=>580
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 3850 X2 580 MHz',
            'base_clock'=>580
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 3870 660 MHz',
            'base_clock'=>660
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 3870 X2 660 MHz',
            'base_clock'=>660
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 2100 IGP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 3100 IGP 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 3100 Mobile IGP 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 2400 398 MHz',
            'base_clock'=>398
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 2600 XT Mac Edition 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3200 IGP 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3300 IGP 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3450 AGP 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3450 PCI 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3470 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3550 594 MHz',
            'base_clock'=>594
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3650 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3650 AGP 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3690 670 MHz',
            'base_clock'=>670
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3730 722 MHz',
            'base_clock'=>722
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3750 796 MHz',
            'base_clock'=>796
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3830 668 MHz',
            'base_clock'=>668
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3850 AGP 668 MHz',
            'base_clock'=>668
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3850 X2 669 MHz',
            'base_clock'=>669
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3850 X3 669 MHz',
            'base_clock'=>669
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3870 Mac Edition 777 MHz',
            'base_clock'=>777
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3870 X2 825 MHz',
            'base_clock'=>825
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4350 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4350 AGP 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4350 PCI 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4350 PCIe x1 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4550 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4570 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4650 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4650 AGP 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4670 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4670 X2 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4710 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4730 OEM 669 MHz',
            'base_clock'=>669
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4830 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4850 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4850 X2 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4870 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4870 X2 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon X1050 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon Xpress 2100 IGP 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Xbox 360 GPU 65nm 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro 2450 Multi-View 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro 2450 Multi-View PCIe x1 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro M5725 675 MHz',
            'base_clock'=>675
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro M7740 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro V7750 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility FireGL V5725 680 MHz',
            'base_clock'=>680
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 4100 IGP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 4200 IGP 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 4330 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 4350 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 4530 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 4570 680 MHz',
            'base_clock'=>680
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 4650 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 4670 675 MHz',
            'base_clock'=>675
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 4670 Mac Edition 680 MHz',
            'base_clock'=>680
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 4830 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 4850 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 4850 Mac Edition 503 MHz',
            'base_clock'=>503
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 4850 X2 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 4860 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 4870 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 4870 X2 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon 3000 IGP 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon E4690 MXM 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon E4690 MXM 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon E4690 PCIe 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3200 Mobile IGP 380 MHz',
            'base_clock'=>380
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3410 519 MHz',
            'base_clock'=>519
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3610 594 MHz',
            'base_clock'=>594
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4200 IGP 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4250 594 MHz',
            'base_clock'=>594
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4520 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4570 Rebrand 796 MHz',
            'base_clock'=>796
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4670 AGP 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4730 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4750 730 MHz',
            'base_clock'=>730
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4770 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4810 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4860 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4870 Mac Edition 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4890 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5750 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5770 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5850 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5870 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5950 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5970 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro 2460 Multi-View 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro M5800 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro M7820 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro RG220 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro V3800 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro V4800 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro V5800 690 MHz',
            'base_clock'=>690
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro V5800 DVI 690 MHz',
            'base_clock'=>690
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro V7800 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro V8800 825 MHz',
            'base_clock'=>825
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro V9800 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro V9800P 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 4225 IGP 380 MHz',
            'base_clock'=>380
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 4250 IGP 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 4270 IGP 590 MHz',
            'base_clock'=>590
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 4550 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 5145 720 MHz',
            'base_clock'=>720
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 5165 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 530v 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 540v 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 5430 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 5450 675 MHz',
            'base_clock'=>675
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 5450 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 545v 720 MHz',
            'base_clock'=>720
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 5470 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 550v 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 560v 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 5650 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 565v 675 MHz',
            'base_clock'=>675
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 5670 Mac Edition 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 5730 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 5750 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 5770 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 5830 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 5850 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 5850 Mac Edition 628 MHz',
            'base_clock'=>628
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 5870 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 3570 796 MHz',
            'base_clock'=>796
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4250 IGP 560 MHz',
            'base_clock'=>560
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4290 IGP 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4700 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4855 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5450 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5450 PCI 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5450 PCIe x1 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5550 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5570 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5570 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5570 OEM 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5670 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5670 640SP Edition 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5770 Mac Edition 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5770 X2 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5830 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5870 Eyefinity 6 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5870 Mac Edition 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'ATI Xbox 360 S GPU 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro V7800P 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4450 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4580 796 MHz',
            'base_clock'=>796
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 4720 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5530 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5570 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5630 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5690 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5730 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro V7760 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'ATI FirePro V7770 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'ATI Mobility Radeon HD 5570 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5470 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'ATI Radeon HD 5490 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'ATI Xbox 360 E GPU 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA NV1 75 MHz',
            'base_clock'=>75
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA STG-2000 75 MHz',
            'base_clock'=>75
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Riva 128 100 MHz',
            'base_clock'=>100
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Riva 128 PCI 100 MHz',
            'base_clock'=>100
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Riva 128ZX 100 MHz',
            'base_clock'=>100
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Riva TNT 90 MHz',
            'base_clock'=>90
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 256 DDR 120 MHz',
            'base_clock'=>120
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 256 SDR 120 MHz',
            'base_clock'=>120
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro 135 MHz',
            'base_clock'=>135
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Riva TNT2 M64 125 MHz',
            'base_clock'=>125
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Riva TNT2 M64 Vanta 100 MHz',
            'base_clock'=>100
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Riva TNT2 M64 Vanta-16 100 MHz',
            'base_clock'=>100
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Riva TNT2 PRO 143 MHz',
            'base_clock'=>143
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Riva TNT2 Ultra 150 MHz',
            'base_clock'=>150
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce2 GTS 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce2 GTS PRO 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce2 Go 143 MHz',
            'base_clock'=>143
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce2 Go 143 MHz',
            'base_clock'=>143
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce2 MX 175 MHz',
            'base_clock'=>175
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce2 MX DH Pro TV 175 MHz',
            'base_clock'=>175
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce2 MX DH Pro TV PCI 175 MHz',
            'base_clock'=>175
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce2 MX PCI 175 MHz',
            'base_clock'=>175
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce2 PRO 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce2 Ultra 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro2 MXR 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro2 MXR Low Profile 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Vanta LT 105 MHz',
            'base_clock'=>105
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce2 Go 100 125 MHz',
            'base_clock'=>125
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce2 Go 200 143 MHz',
            'base_clock'=>143
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce2 MX + nForce 220 175 MHz',
            'base_clock'=>175
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce2 MX + nForce 420 175 MHz',
            'base_clock'=>175
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce2 MX 200 175 MHz',
            'base_clock'=>175
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce2 MX 200 LP 175 MHz',
            'base_clock'=>175
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce2 MX 200 PCI 175 MHz',
            'base_clock'=>175
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce2 MX 400 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce2 MX 400 PCI 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce2 Ti 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce3 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce3 Ti200 175 MHz',
            'base_clock'=>175
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce3 Ti500 240 MHz',
            'base_clock'=>240
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro DCC 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro2 Go 143 MHz',
            'base_clock'=>143
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro2 Pro 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Xbox GPU 233 MHz',
            'base_clock'=>233
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 410 Go 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 420 Go 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 440 Go 220 MHz',
            'base_clock'=>220
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 448 Go 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 460 Go 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 488 Go 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 Go 4200 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 MX + nForce2 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 MX 420 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 MX 420 PCI 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 MX 440 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 MX 440 Mac Edition 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 MX 440-8x 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 MX 440-8x 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 MX 440-SE 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 MX 440-SE 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 MX 440-SE 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 MX 460 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 Ti 4200 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 Ti 4200 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 Ti 4200-8X 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 Ti 4200-8X 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 Ti 4400 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 Ti 4600 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro4 380 XGL 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro4 500 Go GL 220 MHz',
            'base_clock'=>220
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro4 500 XGL 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro4 550 XGL 270 MHz',
            'base_clock'=>270
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro4 580 XGL 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro4 700 XGL 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro4 750 XGL 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro4 900 XGL 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro4 980 XGL 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6200 AGP 230 MHz',
            'base_clock'=>230
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5100 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5200 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5200 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5200 LE 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5200 PCI 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5200 Rev. 2 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5200 Ultra 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5200 Ultra Mac Edition 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5600 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5600 Ultra 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5600 XT 235 MHz',
            'base_clock'=>235
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5600 XT PCI 235 MHz',
            'base_clock'=>235
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5700 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5700 Ultra 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5800 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5800 Ultra 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5900 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5900 Ultra 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5900 XT 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5900 ZT 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5950 Ultra 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX Go5100 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX Go5200 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX Go5200 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX Go5200 32M 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX Go5200 64M 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX Go5200 NPB 32M 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX Go5200 NPB 64M 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX Go5250 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX Go5300 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX Go5350 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX Go5600 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX Go5650 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce PCX 5900 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 MX 4000 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 MX 4000 PCI 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 MX 4000 Rev. 2 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 Ti 4800 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 Ti 4800 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce4 Ti 4800 SE 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 1000 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 2000 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 3000 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 3000G 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 500 270 MHz',
            'base_clock'=>270
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX Go700 295 MHz',
            'base_clock'=>295
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro NVS 210S 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro NVS 280 PCI 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro4 100 NVS 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro4 100 NVS PCI 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro4 200 NVS 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro4 700 Go GL 199 MHz',
            'base_clock'=>199
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6100 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6100 + nForce 400 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6100 + nForce 405 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6100 + nForce 420 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6100 + nForce 430 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6150 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6150 LE 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6150 SE + nForce 430 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6200 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6200 LE AGP 512 MB 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6200 LE PCI 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6200 SE TurboCache 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6200 TurboCache 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6600 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6600 AGP 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6600 GT 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6600 GT AGP 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6600 GT Dual 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6610 XL 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6700 XL 525 MHz',
            'base_clock'=>525
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6800 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6800 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6800 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6800 GT 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6800 GT 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6800 GT 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6800 GT DDL 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6800 GT Dual 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6800 GTO 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6800 LE 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6800 Ultra 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6800 Ultra 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6800 Ultra DDL 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5500 270 MHz',
            'base_clock'=>270
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5500 PCI 270 MHz',
            'base_clock'=>270
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5700 EP 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5700 LE 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX 5700 VE 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 6800 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce PCX 4300 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce PCX 5300 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce PCX 5750 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce PCX 5950 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 1100 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 1300 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 1400 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 330 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 3400 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 4000 375 MHz',
            'base_clock'=>375
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 4000 SDI 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 540 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 600 PCI 270 MHz',
            'base_clock'=>270
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 700 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX Go1000 295 MHz',
            'base_clock'=>295
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX Go540 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro NVS 280 AGP 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro NVS 280 PCIe 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro4 400 NVS PCI 220 MHz',
            'base_clock'=>220
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6200 AGP 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6200 AGP 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6200 LE 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6200 LE 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6200 LE AGP 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6500 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6600 LE 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6600 LE AGP 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6600 VE 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6800 GS 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6800 GS 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6800 LE 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6800 XE 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6800 XT 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6800 XT 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6800 XT 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6800 XT 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7800 GT 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7800 GT Dual 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7800 GTX 430 MHz',
            'base_clock'=>430
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7800 GTX 512 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce FX Go5700 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 6200 TE 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 6600 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 6600 NPB 128M 375 MHz',
            'base_clock'=>375
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 6600 TE 225 MHz',
            'base_clock'=>225
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 6800 Ultra 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 7800 GTX 440 MHz',
            'base_clock'=>440
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 2500M 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 3450 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 4400 375 MHz',
            'base_clock'=>375
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 4400G 375 MHz',
            'base_clock'=>375
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 4500 430 MHz',
            'base_clock'=>430
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX Go1400 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro NVS 280 SD 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro NVS 50 PCI 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro NVS 55 PCI 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7000M + nForce 610M 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7025 + nForce 630a 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7025 + nForce 630a 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7025 + nForce 630a 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7050 + nForce 630a 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7050 PV + nForce 630a 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7050 SE + nForce 630a 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7100 GS 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7200 GS 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7300 GS 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7300 GS Low Profile 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7300 GT 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7300 GT AGP 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7300 GT Mac Edition 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7300 LE 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7300 SE 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7350 LE 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7500 LE 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7600 GS 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7600 GS AGP 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7600 GS AGP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7600 GT 560 MHz',
            'base_clock'=>560
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7600 GT Mac Edition 560 MHz',
            'base_clock'=>560
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7600 LE 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7650 GS 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7800 GS 20Pipes AGP 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7800 GS 24Pipes AGP 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7800 GS AGP 375 MHz',
            'base_clock'=>375
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7800 GS+ 20Pipes AGP 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7800 GS+ 24Pipes AGP 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7800 GS+ AGP 375 MHz',
            'base_clock'=>375
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7900 GS 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7900 GS AGP 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7900 GT 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7900 GTO 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7900 GTX 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7900 GX2 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7950 GT 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7950 GX2 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8800 GTS 640 513 MHz',
            'base_clock'=>513
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8800 GTX 576 MHz',
            'base_clock'=>576
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 6100 + nForce Go 430 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 6150 + nForce Go 430 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 6200 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 6250 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 6400 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 7200 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 7300 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 7300T 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 7400 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 7400 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 7400T 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 7450 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 7600 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 7600 GT 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 7700 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 7800 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 7900 GS 375 MHz',
            'base_clock'=>375
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 7900 GTX 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 7900 SE 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce Go 7950 GTX 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Playstation 3 GPU 90nm 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 1500 325 MHz',
            'base_clock'=>325
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 1500M 375 MHz',
            'base_clock'=>375
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 350 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 3500 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 350M 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 4500 SDI 430 MHz',
            'base_clock'=>430
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 4500 X2 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 550 360 MHz',
            'base_clock'=>360
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 5500 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 5500 SDI 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 550M 480 MHz',
            'base_clock'=>480
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 560 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro NVS 110M 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro NVS 120M 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro NVS 285 275 MHz',
            'base_clock'=>275
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro NVS 300M 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro NVS 440 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro NVS 510M 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7050 + nForce 620i 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7050 + nForce 630i 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7100 + nForce 630i 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7150 + nForce 630i 630 MHz',
            'base_clock'=>630
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7150M + nForce 630M 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7600 GT AGP 560 MHz',
            'base_clock'=>560
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7950 GT AGP 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8100 + nForce 720a 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8200 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8300 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8300 GS 459 MHz',
            'base_clock'=>459
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8400 540 MHz',
            'base_clock'=>540
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8400 GS 459 MHz',
            'base_clock'=>459
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8400 GS PCI 567 MHz',
            'base_clock'=>567
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8400 GS PCI Rev. 2 520 MHz',
            'base_clock'=>520
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8400 GS Rev. 2 567 MHz',
            'base_clock'=>567
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8400M G 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8400M GS 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8400M GT 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8500 GT 459 MHz',
            'base_clock'=>459
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8600 GS 540 MHz',
            'base_clock'=>540
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8600 GT 540 MHz',
            'base_clock'=>540
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8600 GT Mac Edition 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8600 GTS 675 MHz',
            'base_clock'=>675
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8600 GTS Mac Edition 675 MHz',
            'base_clock'=>675
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8600M GS 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8600M GT 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8600M GT 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8600M GT Mac Edition 470 MHz',
            'base_clock'=>470
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8700M GT 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8800 GT 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8800 GTS 320 513 MHz',
            'base_clock'=>513
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8800 GTS 512 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8800 GTS Core 112 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8800 Ultra 612 MHz',
            'base_clock'=>612
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8800M GTS 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8800M GTX 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9100 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9200 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9200 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9300 + nForce 730i 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9400 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9400 580 MHz',
            'base_clock'=>580
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9400 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 1600M 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 1700 460 MHz',
            'base_clock'=>460
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 3500M 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 360M 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 370 360 MHz',
            'base_clock'=>360
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 4600 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 4600 SDI 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 470 580 MHz',
            'base_clock'=>580
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 5600 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 5600 Mac Edition 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 570 460 MHz',
            'base_clock'=>460
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 570M 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro NVS 130M 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro NVS 135M 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro NVS 140M 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro NVS 290 459 MHz',
            'base_clock'=>459
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro NVS 320M 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla C870 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla D870 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla S870 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6200 PCI 280 MHz',
            'base_clock'=>280
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 6200 X2 PCI 280 MHz',
            'base_clock'=>280
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 7050 + nForce 610i 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8400 SE 459 MHz',
            'base_clock'=>459
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8800 GS 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8800 GS Mac Edition 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8800 GT Mac Edition 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9300 GE 540 MHz',
            'base_clock'=>540
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9300 GS 567 MHz',
            'base_clock'=>567
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9300 SE 540 MHz',
            'base_clock'=>540
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9400 GT 459 MHz',
            'base_clock'=>459
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9400 GT 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9400 GT PCI 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9400 GT Rev. 2 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9500 GS 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9500 GS Rev. 2 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9500 GT 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9500 GT Rev. 2 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9500 GT Rev. 3 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9600 GS OEM 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9600 GSO 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9600 GSO 512 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9600 GT 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9600 GT Green Edition 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9600 GT Mac Edition 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9800 GT 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9800 GT 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9800 GT Rebrand 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9800 GTX 675 MHz',
            'base_clock'=>675
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9800 GX2 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 130 Mac Edition 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 260 576 MHz',
            'base_clock'=>576
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 260 Core 216 576 MHz',
            'base_clock'=>576
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 260 Core 216 Rev. 2 576 MHz',
            'base_clock'=>576
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 260 Rev. 2 576 MHz',
            'base_clock'=>576
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 280 602 MHz',
            'base_clock'=>602
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 285 648 MHz',
            'base_clock'=>648
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Playstation 3 GPU 65nm 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro CX 602 MHz',
            'base_clock'=>602
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 1700 Mac Edition 520 MHz',
            'base_clock'=>520
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 370 LP 540 MHz',
            'base_clock'=>540
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 3700 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 4700 X2 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 4800 602 MHz',
            'base_clock'=>602
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 4800 Mac Edition 602 MHz',
            'base_clock'=>602
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 5800 610 MHz',
            'base_clock'=>610
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro NVS 450 480 MHz',
            'base_clock'=>480
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro Plex 1000 Model II 470 MHz',
            'base_clock'=>470
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro Plex 1000 Model IV 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro Plex 2100 D4 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro Plex 2100 S4 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro Plex 2200 D2 648 MHz',
            'base_clock'=>648
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro Plex 2200 S4 648 MHz',
            'base_clock'=>648
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro VX 200 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla M1060 610 MHz',
            'base_clock'=>610
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla S1070 610 MHz',
            'base_clock'=>610
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla S1075 610 MHz',
            'base_clock'=>610
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8200M G mGPU AMD 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8200M G mGPU Intel 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9100M G mGPU AMD 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9100M G mGPU Intel 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9200M 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9200M GS 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9300M G 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9300M GS 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9400M 580 MHz',
            'base_clock'=>580
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9400M 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9400M G 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9500M G 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9500M GS 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9600M GS 430 MHz',
            'base_clock'=>430
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9600M GT 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9600M GT Mac Edition 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9650M GS 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9650M GT 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9700M GT 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9700M GTS 530 MHz',
            'base_clock'=>530
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9800M GS 530 MHz',
            'base_clock'=>530
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9800M GT 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9800M GTS 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9800M GTS 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9800M GTX 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9800S 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 120M Mac Edition 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA ION 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA ION 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA ION 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA ION 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA ION 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA ION 2 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA ION HX 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA ION LE 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 1700M 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 2700M 530 MHz',
            'base_clock'=>530
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 3600M 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 3600M 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 3700M 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 370M 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 3800M 675 MHz',
            'base_clock'=>675
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 770M 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro NVS 150M 530 MHz',
            'base_clock'=>530
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro NVS 160M 580 MHz',
            'base_clock'=>580
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 205 OEM 589 MHz',
            'base_clock'=>589
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 210 520 MHz',
            'base_clock'=>520
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 210 OEM 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 210 PCI 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 210 Rev. 2 520 MHz',
            'base_clock'=>520
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 310 OEM 589 MHz',
            'base_clock'=>589
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9600 GTX 580 MHz',
            'base_clock'=>580
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9800 GTX+ 738 MHz',
            'base_clock'=>738
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce G100 OEM 540 MHz',
            'base_clock'=>540
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce G102M 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce G103M 640 MHz',
            'base_clock'=>640
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce G105M 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce G105M 535 MHz',
            'base_clock'=>535
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce G105M 640 MHz',
            'base_clock'=>640
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce G110M 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce G205M 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce G210 OEM 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce G210 OEM Rev. 2 589 MHz',
            'base_clock'=>589
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce G210M 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 120 Mac Edition 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 120 OEM 738 MHz',
            'base_clock'=>738
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 120M 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 130 OEM 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 130M 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 140 OEM 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 220 615 MHz',
            'base_clock'=>615
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 220 OEM 506 MHz',
            'base_clock'=>506
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 220M 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 230 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 230 OEM 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 230M 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 240 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 240M 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 320M 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTS 150 OEM 738 MHz',
            'base_clock'=>738
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTS 150M 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTS 160M 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTS 240 OEM 675 MHz',
            'base_clock'=>675
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTS 250 702 MHz',
            'base_clock'=>702
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTS 250 675 MHz',
            'base_clock'=>675
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTS 250M 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTS 260M 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 260 OEM 518 MHz',
            'base_clock'=>518
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 260M 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 275 633 MHz',
            'base_clock'=>633
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 280M 585 MHz',
            'base_clock'=>585
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 285 Mac Edition 648 MHz',
            'base_clock'=>648
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 295 576 MHz',
            'base_clock'=>576
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 1800 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 1800M 561 MHz',
            'base_clock'=>561
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 2800M 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 380 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 380 LP 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 3800 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 580 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro NVS 295 540 MHz',
            'base_clock'=>540
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro NVS 420 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla C1060 610 MHz',
            'base_clock'=>610
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla T10 Processor 610 MHz',
            'base_clock'=>610
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 305M 525 MHz',
            'base_clock'=>525
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 310M 606 MHz',
            'base_clock'=>606
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 310M 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 310M 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 315 OEM 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 320M 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 320M Mac Edition 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 405 OEM 589 MHz',
            'base_clock'=>589
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 405 OEM 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 405 OEM 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 8400 GS Rev. 3 520 MHz',
            'base_clock'=>520
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9500 GT Mac Edition 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 220 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 240M LE 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 320 OEM 540 MHz',
            'base_clock'=>540
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 320M 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 325M 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 330 OEM 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 330 OEM 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 330 OEM 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 330M 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 330M Mac Edition 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 335M 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 340 OEM 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 415 OEM 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 415M 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 420 OEM 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 420M 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 425M 560 MHz',
            'base_clock'=>560
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 430 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 430 OEM 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 430 PCI 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 435M 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 440 OEM 810 MHz',
            'base_clock'=>810
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 445M 570 MHz',
            'base_clock'=>570
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 445M 590 MHz',
            'base_clock'=>590
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTS 350M 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTS 360M 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTS 450 783 MHz',
            'base_clock'=>783
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTS 450 OEM 783 MHz',
            'base_clock'=>783
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTS 450 OEM 790 MHz',
            'base_clock'=>790
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 275 PhysX Edition 633 MHz',
            'base_clock'=>633
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 285M 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 460 675 MHz',
            'base_clock'=>675
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 460 675 MHz',
            'base_clock'=>675
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 460 OEM 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 460 SE 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 460 SE v2 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 460M 675 MHz',
            'base_clock'=>675
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 465 608 MHz',
            'base_clock'=>608
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 470 608 MHz',
            'base_clock'=>608
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 470 PhysX Edition 608 MHz',
            'base_clock'=>608
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 470 X2 608 MHz',
            'base_clock'=>608
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 470M 535 MHz',
            'base_clock'=>535
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 480 701 MHz',
            'base_clock'=>701
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 480M 425 MHz',
            'base_clock'=>425
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 570 732 MHz',
            'base_clock'=>732
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 570 Rev. 2 732 MHz',
            'base_clock'=>732
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 580 772 MHz',
            'base_clock'=>772
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA NVS 2100M 535 MHz',
            'base_clock'=>535
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA NVS 3100M 606 MHz',
            'base_clock'=>606
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA NVS 5100M 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro 2000 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro 4000 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro 5000M 405 MHz',
            'base_clock'=>405
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro 600 640 MHz',
            'base_clock'=>640
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro 6000 574 MHz',
            'base_clock'=>574
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 380M 606 MHz',
            'base_clock'=>606
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro FX 880M 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tegra 2 GPU 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 315 OEM 589 MHz',
            'base_clock'=>589
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 315 OEM 506 MHz',
            'base_clock'=>506
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 315M 606 MHz',
            'base_clock'=>606
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 405M 606 MHz',
            'base_clock'=>606
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 410M 574 MHz',
            'base_clock'=>574
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 510 OEM 523 MHz',
            'base_clock'=>523
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 610 738 MHz',
            'base_clock'=>738
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 610M 672 MHz',
            'base_clock'=>672
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 610M 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 610M 738 MHz',
            'base_clock'=>738
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9300 GS Rev. 2 589 MHz',
            'base_clock'=>589
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 435M 590 MHz',
            'base_clock'=>590
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 440 810 MHz',
            'base_clock'=>810
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 440 Mac Edition 810 MHz',
            'base_clock'=>810
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 520 810 MHz',
            'base_clock'=>810
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 520 PCI 810 MHz',
            'base_clock'=>810
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 520 PCIe x1 810 MHz',
            'base_clock'=>810
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 520M 740 MHz',
            'base_clock'=>740
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 520M 672 MHz',
            'base_clock'=>672
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 520MX 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 525M 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 530 OEM 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 540M 672 MHz',
            'base_clock'=>672
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 545 720 MHz',
            'base_clock'=>720
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 545 OEM 871 MHz',
            'base_clock'=>871
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 550M 740 MHz',
            'base_clock'=>740
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 555M 525 MHz',
            'base_clock'=>525
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 555M 753 MHz',
            'base_clock'=>753
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 555M 590 MHz',
            'base_clock'=>590
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 555M 590 MHz',
            'base_clock'=>590
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTS 450 Rev. 2 783 MHz',
            'base_clock'=>783
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 460 X2 701 MHz',
            'base_clock'=>701
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 460 v2 779 MHz',
            'base_clock'=>779
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 460 v2 ES 779 MHz',
            'base_clock'=>779
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 480 Core 512 527 MHz',
            'base_clock'=>527
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 485M 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 490 608 MHz',
            'base_clock'=>608
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 550 Ti 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 555 OEM 736 MHz',
            'base_clock'=>736
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 560 810 MHz',
            'base_clock'=>810
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 560 OEM 552 MHz',
            'base_clock'=>552
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 560 Ti 823 MHz',
            'base_clock'=>823
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 560 Ti 448 732 MHz',
            'base_clock'=>732
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 560 Ti OEM 823 MHz',
            'base_clock'=>823
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 560 Ti OEM 732 MHz',
            'base_clock'=>732
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 560 Ti X2 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 560M 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 570M 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 580 Rev. 2 772 MHz',
            'base_clock'=>772
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 580M 620 MHz',
            'base_clock'=>620
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 590 608 MHz',
            'base_clock'=>608
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA NVS 300 520 MHz',
            'base_clock'=>520
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA NVS 4200M 810 MHz',
            'base_clock'=>810
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro 1000M 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro 2000D 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro 2000M 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro 3000M 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro 400 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro 4000 Mac Edition 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro 4000M 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro 5000 513 MHz',
            'base_clock'=>513
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro 5000 SDI 513 MHz',
            'base_clock'=>513
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro 500M 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro 5010M 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro 6000 SDI 574 MHz',
            'base_clock'=>574
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro Plex 7000 574 MHz',
            'base_clock'=>574
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tegra 3 GPU 416 MHz',
            'base_clock'=>416
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla C2050 574 MHz',
            'base_clock'=>574
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla C2070 574 MHz',
            'base_clock'=>574
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla C2075 574 MHz',
            'base_clock'=>574
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla C2090 651 MHz',
            'base_clock'=>651
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla M2050 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla M2070 574 MHz',
            'base_clock'=>574
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla M2070-Q 574 MHz',
            'base_clock'=>574
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla M2075 574 MHz',
            'base_clock'=>574
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla M2090 651 MHz',
            'base_clock'=>651
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla S2050 574 MHz',
            'base_clock'=>574
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla X2070 651 MHz',
            'base_clock'=>651
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla X2090 651 MHz',
            'base_clock'=>651
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 605 OEM 523 MHz',
            'base_clock'=>523
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 615 660 MHz',
            'base_clock'=>660
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 620M 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 9400 GT Rev. 3 589 MHz',
            'base_clock'=>589
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 520 OEM 589 MHz',
            'base_clock'=>589
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 520 OEM 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 555M 675 MHz',
            'base_clock'=>675
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 610 810 MHz',
            'base_clock'=>810
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 610 OEM 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 610 PCI 810 MHz',
            'base_clock'=>810
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 610 PCIe x1 810 MHz',
            'base_clock'=>810
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 620 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 620 OEM 810 MHz',
            'base_clock'=>810
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 620M 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 620M 660 MHz',
            'base_clock'=>660
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 625M 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 630 810 MHz',
            'base_clock'=>810
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 630 OEM 875 MHz',
            'base_clock'=>875
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 630M 660 MHz',
            'base_clock'=>660
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 630M 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 630M 660 MHz',
            'base_clock'=>660
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 635M 660 MHz',
            'base_clock'=>660
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 635M 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 635M 660 MHz',
            'base_clock'=>660
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 635M 675 MHz',
            'base_clock'=>675
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 640 902 MHz',
            'base_clock'=>902
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 640 OEM 797 MHz',
            'base_clock'=>797
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 640 OEM Rebrand 720 MHz',
            'base_clock'=>720
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 640M 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 640M LE 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 640M LE 753 MHz',
            'base_clock'=>753
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 645 OEM 776 MHz',
            'base_clock'=>776
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 645M 709 MHz',
            'base_clock'=>709
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 650M 835 MHz',
            'base_clock'=>835
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 650M Mac Edition 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTS 450 Rev. 3 783 MHz',
            'base_clock'=>783
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 560 SE 736 MHz',
            'base_clock'=>736
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 650 1058 MHz',
            'base_clock'=>1058
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 650 Ti 928 MHz',
            'base_clock'=>928
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 660 980 MHz',
            'base_clock'=>980
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 660 OEM 823 MHz',
            'base_clock'=>823
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 660 OEM 823 MHz',
            'base_clock'=>823
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 660 Ti 915 MHz',
            'base_clock'=>915
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 660M 835 MHz',
            'base_clock'=>835
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 670 915 MHz',
            'base_clock'=>915
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 670M 598 MHz',
            'base_clock'=>598
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 670MX 601 MHz',
            'base_clock'=>601
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 675M 620 MHz',
            'base_clock'=>620
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 675MX 654 MHz',
            'base_clock'=>654
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 680 1006 MHz',
            'base_clock'=>1006
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 680M 719 MHz',
            'base_clock'=>719
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 680MX Mac Edition 719 MHz',
            'base_clock'=>719
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 690 915 MHz',
            'base_clock'=>915
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA NVS 1000 797 MHz',
            'base_clock'=>797
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA NVS 310 523 MHz',
            'base_clock'=>523
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA NVS 510 797 MHz',
            'base_clock'=>797
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA NVS 5200M 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA NVS 5200M 672 MHz',
            'base_clock'=>672
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA NVS 5400M 660 MHz',
            'base_clock'=>660
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Playstation 3 GPU 40nm 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro 410 706 MHz',
            'base_clock'=>706
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro 7000 651 MHz',
            'base_clock'=>651
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K1000M 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K2000M 745 MHz',
            'base_clock'=>745
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K3000M 654 MHz',
            'base_clock'=>654
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K4000M 601 MHz',
            'base_clock'=>601
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K5000 706 MHz',
            'base_clock'=>706
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K5000 Mac Edition 706 MHz',
            'base_clock'=>706
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K5000M 601 MHz',
            'base_clock'=>601
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K500M 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla K10 745 MHz',
            'base_clock'=>745
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla K20X 732 MHz',
            'base_clock'=>732
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla K20Xm 732 MHz',
            'base_clock'=>732
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla K20c 706 MHz',
            'base_clock'=>706
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID K1 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID K100 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID K140Q 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID K160Q 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID K180Q 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID K2 745 MHz',
            'base_clock'=>745
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID K200 745 MHz',
            'base_clock'=>745
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID K240Q 745 MHz',
            'base_clock'=>745
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID K260Q 745 MHz',
            'base_clock'=>745
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID K280Q 745 MHz',
            'base_clock'=>745
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID K340 954 MHz',
            'base_clock'=>954
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID K520 745 MHz',
            'base_clock'=>745
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 505 OEM 589 MHz',
            'base_clock'=>589
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 505 OEM 615 MHz',
            'base_clock'=>615
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 705A 738 MHz',
            'base_clock'=>738
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 705M 738 MHz',
            'base_clock'=>738
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 705M 738 MHz',
            'base_clock'=>738
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 710A 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 710M 719 MHz',
            'base_clock'=>719
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 710M 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 720M 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 820M 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 625 OEM 874 MHz',
            'base_clock'=>874
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 630 Rev. 2 902 MHz',
            'base_clock'=>902
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 630 Rev. 2 PCIe x8 902 MHz',
            'base_clock'=>902
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 635 OEM 967 MHz',
            'base_clock'=>967
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 640 Rev. 2 1046 MHz',
            'base_clock'=>1046
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 640M Mac Edition 745 MHz',
            'base_clock'=>745
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 710M 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 720M 719 MHz',
            'base_clock'=>719
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 720M 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 730M 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 735M 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 740A 980 MHz',
            'base_clock'=>980
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 740M 980 MHz',
            'base_clock'=>980
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 740M 810 MHz',
            'base_clock'=>810
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 745A 837 MHz',
            'base_clock'=>837
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 745M 837 MHz',
            'base_clock'=>837
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 745M 549 MHz',
            'base_clock'=>549
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 750M 941 MHz',
            'base_clock'=>941
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 750M Mac Edition 926 MHz',
            'base_clock'=>926
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 755M 980 MHz',
            'base_clock'=>980
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 755M Mac Edition 1085 MHz',
            'base_clock'=>1085
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 820M 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 645 OEM 824 MHz',
            'base_clock'=>824
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 650 1058 MHz',
            'base_clock'=>1058
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 650 Ti Boost 980 MHz',
            'base_clock'=>980
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 650 Ti OEM 928 MHz',
            'base_clock'=>928
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 660M Mac Edition 950 MHz',
            'base_clock'=>950
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 675MX Mac Edition 719 MHz',
            'base_clock'=>719
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 680 Mac Edition 1006 MHz',
            'base_clock'=>1006
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 760 980 MHz',
            'base_clock'=>980
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 760 OEM 823 MHz',
            'base_clock'=>823
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 760 OEM Rebrand 823 MHz',
            'base_clock'=>823
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 760 Ti OEM 915 MHz',
            'base_clock'=>915
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 760 Ti OEM Rebrand 915 MHz',
            'base_clock'=>915
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 760 X2 1006 MHz',
            'base_clock'=>1006
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 760M 628 MHz',
            'base_clock'=>628
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 765M 797 MHz',
            'base_clock'=>797
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 770 1046 MHz',
            'base_clock'=>1046
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 770M 706 MHz',
            'base_clock'=>706
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 775M Mac Edition 797 MHz',
            'base_clock'=>797
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 780 863 MHz',
            'base_clock'=>863
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 780 6 GB 863 MHz',
            'base_clock'=>863
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 780 Rev. 2 863 MHz',
            'base_clock'=>863
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 780 Ti 875 MHz',
            'base_clock'=>875
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 780 Ti 6 GB 875 MHz',
            'base_clock'=>875
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 780M 771 MHz',
            'base_clock'=>771
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 780M Mac Edition 771 MHz',
            'base_clock'=>771
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX TITAN 836 MHz',
            'base_clock'=>836
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA NVS 315 523 MHz',
            'base_clock'=>523
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Playstation 3 GPU 28nm 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro 4100 797 MHz',
            'base_clock'=>797
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K1100M 706 MHz',
            'base_clock'=>706
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K2000 954 MHz',
            'base_clock'=>954
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K2000D 954 MHz',
            'base_clock'=>954
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K2100M 667 MHz',
            'base_clock'=>667
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K3100M 706 MHz',
            'base_clock'=>706
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K4000 810 MHz',
            'base_clock'=>810
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K4100M 706 MHz',
            'base_clock'=>706
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K5000 SYNC 706 MHz',
            'base_clock'=>706
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K5100M 771 MHz',
            'base_clock'=>771
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K510M 889 MHz',
            'base_clock'=>889
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K600 876 MHz',
            'base_clock'=>876
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K6000 797 MHz',
            'base_clock'=>797
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K6000 SDI 902 MHz',
            'base_clock'=>902
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K610M 980 MHz',
            'base_clock'=>980
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tegra 4 GPU 672 MHz',
            'base_clock'=>672
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tegra 4i GPU 660 MHz',
            'base_clock'=>660
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla K20m 706 MHz',
            'base_clock'=>706
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla K20s 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla K40c 745 MHz',
            'base_clock'=>745
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla K40d 745 MHz',
            'base_clock'=>745
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla K40m 745 MHz',
            'base_clock'=>745
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla K40s 745 MHz',
            'base_clock'=>745
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla K40st 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla K40t 745 MHz',
            'base_clock'=>745
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID K120Q 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID K220Q 745 MHz',
            'base_clock'=>745
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID K500 745 MHz',
            'base_clock'=>745
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID K520Q 745 MHz',
            'base_clock'=>745
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID K540Q 745 MHz',
            'base_clock'=>745
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID K560Q 745 MHz',
            'base_clock'=>745
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 705A 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 710A 719 MHz',
            'base_clock'=>719
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 720A 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 800A 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 800A 475 MHz',
            'base_clock'=>475
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 800M 738 MHz',
            'base_clock'=>738
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 805A 719 MHz',
            'base_clock'=>719
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 810A 719 MHz',
            'base_clock'=>719
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 810M 738 MHz',
            'base_clock'=>738
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 820A 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 825M 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 830A 1082 MHz',
            'base_clock'=>1082
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 830M 1082 MHz',
            'base_clock'=>1082
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 840A 1029 MHz',
            'base_clock'=>1029
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 840M 1029 MHz',
            'base_clock'=>1029
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 705 OEM 874 MHz',
            'base_clock'=>874
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 710 954 MHz',
            'base_clock'=>954
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 710 954 MHz',
            'base_clock'=>954
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 710 PCIe x1 954 MHz',
            'base_clock'=>954
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 720 797 MHz',
            'base_clock'=>797
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 720 967 MHz',
            'base_clock'=>967
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 720A 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 730 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 730 902 MHz',
            'base_clock'=>902
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 730 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 730A 719 MHz',
            'base_clock'=>719
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 730M 719 MHz',
            'base_clock'=>719
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 740 993 MHz',
            'base_clock'=>993
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 660 Rev. 2 980 MHz',
            'base_clock'=>980
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 745 OEM 1033 MHz',
            'base_clock'=>1033
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 750 1020 MHz',
            'base_clock'=>1020
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 750 Ti 1020 MHz',
            'base_clock'=>1020
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 750 Ti OEM 1033 MHz',
            'base_clock'=>1033
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 760A 628 MHz',
            'base_clock'=>628
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 850A 902 MHz',
            'base_clock'=>902
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 850M 902 MHz',
            'base_clock'=>902
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 860M 1020 MHz',
            'base_clock'=>1020
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 860M 797 MHz',
            'base_clock'=>797
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 870M 941 MHz',
            'base_clock'=>941
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 880M 954 MHz',
            'base_clock'=>954
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 970 1050 MHz',
            'base_clock'=>1050
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 970M 924 MHz',
            'base_clock'=>924
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 970M 924 MHz',
            'base_clock'=>924
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 980 1127 MHz',
            'base_clock'=>1127
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 980M 1038 MHz',
            'base_clock'=>1038
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 980M 540 MHz',
            'base_clock'=>540
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX TITAN BLACK 889 MHz',
            'base_clock'=>889
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX TITAN Z 705 MHz',
            'base_clock'=>705
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Jetson TK1 GPU 756 MHz',
            'base_clock'=>756
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K100M 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K200M 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K2200 1046 MHz',
            'base_clock'=>1046
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K2200M 667 MHz',
            'base_clock'=>667
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K420 876 MHz',
            'base_clock'=>876
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K4200 771 MHz',
            'base_clock'=>771
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K5200 667 MHz',
            'base_clock'=>667
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K620 1058 MHz',
            'base_clock'=>1058
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla K8 693 MHz',
            'base_clock'=>693
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla K80 562 MHz',
            'base_clock'=>562
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID M6-8Q 722 MHz',
            'base_clock'=>722
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID M60-1Q 557 MHz',
            'base_clock'=>557
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID M60-2Q 557 MHz',
            'base_clock'=>557
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID M60-4A 557 MHz',
            'base_clock'=>557
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID M60-8Q 557 MHz',
            'base_clock'=>557
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 710A 810 MHz',
            'base_clock'=>810
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 810M 835 MHz',
            'base_clock'=>835
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 820M 810 MHz',
            'base_clock'=>810
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 845M 1071 MHz',
            'base_clock'=>1071
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 845M 863 MHz',
            'base_clock'=>863
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 910M 641 MHz',
            'base_clock'=>641
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 920A 954 MHz',
            'base_clock'=>954
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 920M 954 MHz',
            'base_clock'=>954
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 930A 928 MHz',
            'base_clock'=>928
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 930M 928 MHz',
            'base_clock'=>928
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 940A 1029 MHz',
            'base_clock'=>1029
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 940A 1072 MHz',
            'base_clock'=>1072
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 940M 1020 MHz',
            'base_clock'=>1020
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 940M 1072 MHz',
            'base_clock'=>1072
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 945A 1006 MHz',
            'base_clock'=>1006
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 945M 928 MHz',
            'base_clock'=>928
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 710 OEM 797 MHz',
            'base_clock'=>797
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 730 OEM 902 MHz',
            'base_clock'=>902
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 740 OEM 1006 MHz',
            'base_clock'=>1006
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 740 OEM 1050 MHz',
            'base_clock'=>1050
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 750 GM206 1087 MHz',
            'base_clock'=>1087
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 860M OEM 1020 MHz',
            'base_clock'=>1020
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 950 1024 MHz',
            'base_clock'=>1024
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 950A 993 MHz',
            'base_clock'=>993
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 950M 993 MHz',
            'base_clock'=>993
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 950M Mac Edition 993 MHz',
            'base_clock'=>993
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 960 1127 MHz',
            'base_clock'=>1127
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 960 OEM 1176 MHz',
            'base_clock'=>1176
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 960 OEM 924 MHz',
            'base_clock'=>924
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 960A 1029 MHz',
            'base_clock'=>1029
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 960M 1097 MHz',
            'base_clock'=>1097
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 965M 540 MHz',
            'base_clock'=>540
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 965M 924 MHz',
            'base_clock'=>924
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 965M 935 MHz',
            'base_clock'=>935
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 980 Mobile 1064 MHz',
            'base_clock'=>1064
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 980 Ti 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX TITAN X 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Jetson TX1 GPU 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA NVS 810 902 MHz',
            'base_clock'=>902
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K1200 1058 MHz',
            'base_clock'=>1058
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro K620M 1029 MHz',
            'base_clock'=>1029
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro M1000M 993 MHz',
            'base_clock'=>993
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro M2000M 1029 MHz',
            'base_clock'=>1029
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro M3000M 1050 MHz',
            'base_clock'=>1050
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro M4000 773 MHz',
            'base_clock'=>773
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro M4000M 975 MHz',
            'base_clock'=>975
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro M5000 861 MHz',
            'base_clock'=>861
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro M5000M 975 MHz',
            'base_clock'=>975
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro M6000 988 MHz',
            'base_clock'=>988
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro M600M 837 MHz',
            'base_clock'=>837
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla M4 872 MHz',
            'base_clock'=>872
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla M40 948 MHz',
            'base_clock'=>948
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla M40 24 GB 948 MHz',
            'base_clock'=>948
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla M6 930 MHz',
            'base_clock'=>930
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla M60 557 MHz',
            'base_clock'=>557
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID M10-8Q 1033 MHz',
            'base_clock'=>1033
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID M3-3020 1033 MHz',
            'base_clock'=>1033
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID M40 1033 MHz',
            'base_clock'=>1033
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 920MX 965 MHz',
            'base_clock'=>965
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 930MX 952 MHz',
            'base_clock'=>952
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 940MX 1004 MHz',
            'base_clock'=>1004
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 940MX 795 MHz',
            'base_clock'=>795
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 940MX 954 MHz',
            'base_clock'=>954
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce 945M 1006 MHz',
            'base_clock'=>1006
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 610 OEM 701 MHz',
            'base_clock'=>701
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 710 810 MHz',
            'base_clock'=>810
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1050 1354 MHz',
            'base_clock'=>1354
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1050 Ti 1291 MHz',
            'base_clock'=>1291
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1060 3 GB 1506 MHz',
            'base_clock'=>1506
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1060 3 GB GP104 1506 MHz',
            'base_clock'=>1506
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1060 6 GB 1506 MHz',
            'base_clock'=>1506
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1060 Mobile 1404 MHz',
            'base_clock'=>1404
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1070 1506 MHz',
            'base_clock'=>1506
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1070 Mobile 1442 MHz',
            'base_clock'=>1442
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1080 1607 MHz',
            'base_clock'=>1607
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1080 Mobile 1556 MHz',
            'base_clock'=>1556
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 760 OEM 993 MHz',
            'base_clock'=>993
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 950 Low Power 1026 MHz',
            'base_clock'=>1026
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 950 OEM 937 MHz',
            'base_clock'=>937
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 965M 935 MHz',
            'base_clock'=>935
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 980MX 1050 MHz',
            'base_clock'=>1050
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Jetson TX2 GPU 854 MHz',
            'base_clock'=>854
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro GP100 1304 MHz',
            'base_clock'=>1304
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro M2000 796 MHz',
            'base_clock'=>796
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro M3000 SE 823 MHz',
            'base_clock'=>823
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro M500M 1029 MHz',
            'base_clock'=>1029
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro M5500 Mobile 1140 MHz',
            'base_clock'=>1140
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro M6000 24 GB 988 MHz',
            'base_clock'=>988
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P5000 1607 MHz',
            'base_clock'=>1607
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P6000 1506 MHz',
            'base_clock'=>1506
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA TITAN X Pascal 1417 MHz',
            'base_clock'=>1417
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla M10 1033 MHz',
            'base_clock'=>1033
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla P10 1025 MHz',
            'base_clock'=>1025
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla P100 DGXS 1328 MHz',
            'base_clock'=>1328
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla P100 PCIe 12 GB 1190 MHz',
            'base_clock'=>1190
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla P100 PCIe 16 GB 1190 MHz',
            'base_clock'=>1190
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla P100 SXM2 1328 MHz',
            'base_clock'=>1328
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla P4 886 MHz',
            'base_clock'=>886
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla P40 1303 MHz',
            'base_clock'=>1303
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 1030 1228 MHz',
            'base_clock'=>1228
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 720 OEM 993 MHz',
            'base_clock'=>993
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1050 Mobile 1354 MHz',
            'base_clock'=>1354
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1050 Mobile 1354 MHz',
            'base_clock'=>1354
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1050 Ti Mobile 1493 MHz',
            'base_clock'=>1493
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1050 Ti Mobile 1493 MHz',
            'base_clock'=>1493
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1060 5 GB 1506 MHz',
            'base_clock'=>1506
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1060 6 GB 9Gbps 1506 MHz',
            'base_clock'=>1506
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1060 Max-Q 1063 MHz',
            'base_clock'=>1063
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1070 Max-Q 1215 MHz',
            'base_clock'=>1215
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1070 Ti 1607 MHz',
            'base_clock'=>1607
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1080 11Gbps 1607 MHz',
            'base_clock'=>1607
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1080 Max-Q 1290 MHz',
            'base_clock'=>1290
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1080 Ti 1481 MHz',
            'base_clock'=>1481
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce MX110 978 MHz',
            'base_clock'=>978
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce MX130 1109 MHz',
            'base_clock'=>1109
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce MX150 1469 MHz',
            'base_clock'=>1469
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce MX150 937 MHz',
            'base_clock'=>937
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA P104-100 1607 MHz',
            'base_clock'=>1607
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA P106-090 1354 MHz',
            'base_clock'=>1354
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA P106-100 1506 MHz',
            'base_clock'=>1506
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro M1200 Mobile 991 MHz',
            'base_clock'=>991
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro M2200 Mobile 695 MHz',
            'base_clock'=>695
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro M520 Mobile 1041 MHz',
            'base_clock'=>1041
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro M620 Mobile 756 MHz',
            'base_clock'=>756
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P1000 1266 MHz',
            'base_clock'=>1266
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P1000 1354 MHz',
            'base_clock'=>1354
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P1000 Mobile 1303 MHz',
            'base_clock'=>1303
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P2000 1076 MHz',
            'base_clock'=>1076
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P2000 Mobile 1557 MHz',
            'base_clock'=>1557
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P3000 Mobile 1088 MHz',
            'base_clock'=>1088
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P400 1228 MHz',
            'base_clock'=>1228
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P4000 1202 MHz',
            'base_clock'=>1202
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P4000 Max-Q 1114 MHz',
            'base_clock'=>1114
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P4000 Mobile 1227 MHz',
            'base_clock'=>1227
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P5000 Mobile 1278 MHz',
            'base_clock'=>1278
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P600 1329 MHz',
            'base_clock'=>1329
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P600 Mobile 1430 MHz',
            'base_clock'=>1430
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Switch GPU 20nm 384 MHz',
            'base_clock'=>384
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA TITAN V 1200 MHz',
            'base_clock'=>1200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA TITAN Xp 1405 MHz',
            'base_clock'=>1405
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla P6 1012 MHz',
            'base_clock'=>1012
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla V100 PCIe 16 GB 1245 MHz',
            'base_clock'=>1245
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla V100 SXM2 16 GB 1312 MHz',
            'base_clock'=>1312
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 1030 DDR4 1152 MHz',
            'base_clock'=>1152
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 1030 GK107 1058 MHz',
            'base_clock'=>1058
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1050 3 GB 1392 MHz',
            'base_clock'=>1392
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1050 Max-Q 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1050 Ti Max-Q 1152 MHz',
            'base_clock'=>1152
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1060 6 GB GDDR5X 1506 MHz',
            'base_clock'=>1506
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1060 6 GB GP104 1506 MHz',
            'base_clock'=>1506
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1060 6 GB Rev. 2 1506 MHz',
            'base_clock'=>1506
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1060 8 GB GDDR5X 1506 MHz',
            'base_clock'=>1506
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1070 GDDR5X 1506 MHz',
            'base_clock'=>1506
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1080 Ti 10 GB 1557 MHz',
            'base_clock'=>1557
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2070 1410 MHz',
            'base_clock'=>1410
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2080 1515 MHz',
            'base_clock'=>1515
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2080 Ti 1350 MHz',
            'base_clock'=>1350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Jetson AGX Xavier GPU 854 MHz',
            'base_clock'=>854
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA P102-100 1582 MHz',
            'base_clock'=>1582
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA P102-101 1557 MHz',
            'base_clock'=>1557
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA P104-101 1506 MHz',
            'base_clock'=>1506
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro GV100 1132 MHz',
            'base_clock'=>1132
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P3200 Max-Q 1139 MHz',
            'base_clock'=>1139
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P3200 Mobile 1328 MHz',
            'base_clock'=>1328
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P4200 Mobile 1227 MHz',
            'base_clock'=>1227
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P500 Mobile 1455 MHz',
            'base_clock'=>1455
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P5200 Max-Q 1316 MHz',
            'base_clock'=>1316
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P5200 Mobile 1557 MHz',
            'base_clock'=>1557
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P620 1266 MHz',
            'base_clock'=>1266
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P620 Mobile 1177 MHz',
            'base_clock'=>1177
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro RTX 4000 1005 MHz',
            'base_clock'=>1005
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro RTX 5000 1620 MHz',
            'base_clock'=>1620
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro RTX 6000 1440 MHz',
            'base_clock'=>1440
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro RTX 6000 Passive 1305 MHz',
            'base_clock'=>1305
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro RTX 8000 1395 MHz',
            'base_clock'=>1395
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro RTX 8000 Passive 1230 MHz',
            'base_clock'=>1230
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA TITAN RTX 1350 MHz',
            'base_clock'=>1350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA TITAN V CEO Edition 1200 MHz',
            'base_clock'=>1200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla T4 585 MHz',
            'base_clock'=>585
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla V100 DGXS 16 GB 1327 MHz',
            'base_clock'=>1327
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla V100 DGXS 32 GB 1297 MHz',
            'base_clock'=>1297
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla V100 FHHL 937 MHz',
            'base_clock'=>937
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla V100 PCIe 32 GB 1230 MHz',
            'base_clock'=>1230
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla V100 SXM2 32 GB 1290 MHz',
            'base_clock'=>1290
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla V100 SXM3 32 GB 1290 MHz',
            'base_clock'=>1290
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1050 Mobile 3 GB 1366 MHz',
            'base_clock'=>1366
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1650 1485 MHz',
            'base_clock'=>1485
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1650 Max-Q 1020 MHz',
            'base_clock'=>1020
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1650 Mobile 1395 MHz',
            'base_clock'=>1395
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1650 SUPER 1530 MHz',
            'base_clock'=>1530
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1660 1530 MHz',
            'base_clock'=>1530
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1660 SUPER 1530 MHz',
            'base_clock'=>1530
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1660 Ti 1500 MHz',
            'base_clock'=>1500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1660 Ti Max-Q 1140 MHz',
            'base_clock'=>1140
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1660 Ti Mobile 1455 MHz',
            'base_clock'=>1455
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce MX150 GP107 1469 MHz',
            'base_clock'=>1469
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce MX230 1519 MHz',
            'base_clock'=>1519
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce MX250 937 MHz',
            'base_clock'=>937
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce MX250 1519 MHz',
            'base_clock'=>1519
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2060 1365 MHz',
            'base_clock'=>1365
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2060 Max-Q Refresh 960 MHz',
            'base_clock'=>960
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2060 Mobile 960 MHz',
            'base_clock'=>960
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2060 Mobile Refresh 1005 MHz',
            'base_clock'=>1005
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2060 SUPER 1470 MHz',
            'base_clock'=>1470
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2070 Max-Q 885 MHz',
            'base_clock'=>885
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2070 Mobile 1215 MHz',
            'base_clock'=>1215
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2070 SUPER 1605 MHz',
            'base_clock'=>1605
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2080 Max-Q 735 MHz',
            'base_clock'=>735
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2080 Mobile 1380 MHz',
            'base_clock'=>1380
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2080 SUPER 1650 MHz',
            'base_clock'=>1650
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Jetson Nano GPU 640 MHz',
            'base_clock'=>640
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA P106M 1291 MHz',
            'base_clock'=>1291
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P2000 Mobile 1291 MHz',
            'base_clock'=>1291
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P2200 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro P520 Mobile 1303 MHz',
            'base_clock'=>1303
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro RTX 3000 Max-Q 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro RTX 3000 Mobile 945 MHz',
            'base_clock'=>945
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro RTX 3000 Mobile Refresh 945 MHz',
            'base_clock'=>945
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro RTX 4000 Max-Q 780 MHz',
            'base_clock'=>780
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro RTX 4000 Mobile 1110 MHz',
            'base_clock'=>1110
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro RTX 5000 Max-Q 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro RTX 5000 Mobile 1365 MHz',
            'base_clock'=>1365
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro T1000 Max-Q 765 MHz',
            'base_clock'=>765
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro T1000 Mobile 1395 MHz',
            'base_clock'=>1395
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro T2000 Max-Q 1200 MHz',
            'base_clock'=>1200
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro T2000 Mobile 1575 MHz',
            'base_clock'=>1575
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Switch GPU 16nm 384 MHz',
            'base_clock'=>384
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla PG500-216 1260 MHz',
            'base_clock'=>1260
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla PG503-216 1312 MHz',
            'base_clock'=>1312
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla V100 SXM2 16 GB 1245 MHz',
            'base_clock'=>1245
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Tesla V100S PCIe 32 GB 1245 MHz',
            'base_clock'=>1245
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA A100 PCIe 765 MHz',
            'base_clock'=>765
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA A100 SXM4 40 GB 1095 MHz',
            'base_clock'=>1095
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA A100 SXM4 80 GB 1275 MHz',
            'base_clock'=>1275
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA A40 PCIe 1305 MHz',
            'base_clock'=>1305
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID A100A 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID A100B 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID RTX T10-16 1065 MHz',
            'base_clock'=>1065
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID RTX T10-2 1065 MHz',
            'base_clock'=>1065
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID RTX T10-4 1065 MHz',
            'base_clock'=>1065
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GRID RTX T10-8 1065 MHz',
            'base_clock'=>1065
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1650 GDDR6 1410 MHz',
            'base_clock'=>1410
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1650 Max-Q 930 MHz',
            'base_clock'=>930
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1650 Mobile 1380 MHz',
            'base_clock'=>1380
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1650 TU106 1410 MHz',
            'base_clock'=>1410
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1650 TU116 1410 MHz',
            'base_clock'=>1410
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1650 Ti Max-Q 1035 MHz',
            'base_clock'=>1035
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1650 Ti Mobile 1350 MHz',
            'base_clock'=>1350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1650 Ti Mobile 1350 MHz',
            'base_clock'=>1350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce MX330 1531 MHz',
            'base_clock'=>1531
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce MX350 747 MHz',
            'base_clock'=>747
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce MX350 1354 MHz',
            'base_clock'=>1354
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce MX450 25W 720 MHz',
            'base_clock'=>720
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce MX450 30.5W 10Gbps 1395 MHz',
            'base_clock'=>1395
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce MX450 30.5W 8Gbps 1035 MHz',
            'base_clock'=>1035
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2060 Max-Q 975 MHz',
            'base_clock'=>975
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2060 TU104 1365 MHz',
            'base_clock'=>1365
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2070 Max-Q Refresh 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2070 Mobile Refresh 1260 MHz',
            'base_clock'=>1260
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2070 SUPER Max-Q 930 MHz',
            'base_clock'=>930
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2070 SUPER Mobile 1140 MHz',
            'base_clock'=>1140
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2080 SUPER Max-Q 735 MHz',
            'base_clock'=>735
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2080 SUPER Mobile 1365 MHz',
            'base_clock'=>1365
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3060 Ti 1410 MHz',
            'base_clock'=>1410
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3070 1500 MHz',
            'base_clock'=>1500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3080 1440 MHz',
            'base_clock'=>1440
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3090 1395 MHz',
            'base_clock'=>1395
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Jetson Xavier NX GPU 854 MHz',
            'base_clock'=>854
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro RTX 5000 Mobile Refresh 1035 MHz',
            'base_clock'=>1035
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro RTX 6000 Mobile 1275 MHz',
            'base_clock'=>1275
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro T1000 Mobile GDDR6 1395 MHz',
            'base_clock'=>1395
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA RTX A6000 1410 MHz',
            'base_clock'=>1410
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA T500 Mobile 1365 MHz',
            'base_clock'=>1365
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA A10 PCIe 885 MHz',
            'base_clock'=>885
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA A100 PCIe 80 GB 1065 MHz',
            'base_clock'=>1065
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA A10G 1320 MHz',
            'base_clock'=>1320
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA A16 PCIe 885 MHz',
            'base_clock'=>885
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA A2 1440 MHz',
            'base_clock'=>1440
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA A30 PCIe 930 MHz',
            'base_clock'=>930
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA CMP 170HX 1140 MHz',
            'base_clock'=>1140
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA CMP 30HX 1530 MHz',
            'base_clock'=>1530
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA CMP 40HX 1470 MHz',
            'base_clock'=>1470
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA CMP 50HX 1350 MHz',
            'base_clock'=>1350
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA CMP 70HX 1365 MHz',
            'base_clock'=>1365
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA CMP 90HX 1500 MHz',
            'base_clock'=>1500
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 1010 1228 MHz',
            'base_clock'=>1228
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GT 1010 DDR4 1152 MHz',
            'base_clock'=>1152
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce MX570 1087 MHz',
            'base_clock'=>1087
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2050 Mobile 1185 MHz',
            'base_clock'=>1185
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 2060 12 GB 1470 MHz',
            'base_clock'=>1470
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3050 Mobile 712 MHz',
            'base_clock'=>712
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3050 Ti Mobile 735 MHz',
            'base_clock'=>735
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3050 Ti Mobile 735 MHz',
            'base_clock'=>735
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3060 1320 MHz',
            'base_clock'=>1320
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3060 GA104 1320 MHz',
            'base_clock'=>1320
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3060 Max-Q 817 MHz',
            'base_clock'=>817
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3060 Mobile 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3070 Max-Q 780 MHz',
            'base_clock'=>780
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3070 Mobile 1110 MHz',
            'base_clock'=>1110
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3070 Ti 1575 MHz',
            'base_clock'=>1575
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3080 Max-Q 780 MHz',
            'base_clock'=>780
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3080 Mobile 1110 MHz',
            'base_clock'=>1110
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3080 Ti 1365 MHz',
            'base_clock'=>1365
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA PG506-232 930 MHz',
            'base_clock'=>930
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA PG506-242 930 MHz',
            'base_clock'=>930
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA Quadro T1200 Mobile 855 MHz',
            'base_clock'=>855
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA RTX A2000 562 MHz',
            'base_clock'=>562
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA RTX A2000 12 GB 562 MHz',
            'base_clock'=>562
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA RTX A2000 Mobile 893 MHz',
            'base_clock'=>893
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA RTX A3000 Mobile 1260 MHz',
            'base_clock'=>1260
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA RTX A3000 Mobile 12 GB 495 MHz',
            'base_clock'=>495
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA RTX A4 Mobile 1237 MHz',
            'base_clock'=>1237
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA RTX A4000 735 MHz',
            'base_clock'=>735
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA RTX A4000 Mobile 1140 MHz',
            'base_clock'=>1140
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA RTX A4500 1050 MHz',
            'base_clock'=>1050
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA RTX A5000 1170 MHz',
            'base_clock'=>1170
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA RTX A5000 Mobile 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA T1000 1065 MHz',
            'base_clock'=>1065
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA T1000 8 GB 1065 MHz',
            'base_clock'=>1065
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA T400 420 MHz',
            'base_clock'=>420
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA T400 4 GB 420 MHz',
            'base_clock'=>420
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA T600 735 MHz',
            'base_clock'=>735
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA T600 Mobile 930 MHz',
            'base_clock'=>930
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce GTX 1630 1740 MHz',
            'base_clock'=>1740
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce MX550 1065 MHz',
            'base_clock'=>1065
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce MX570 832 MHz',
            'base_clock'=>832
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3050 4 GB 1545 MHz',
            'base_clock'=>1545
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3050 8 GB 1552 MHz',
            'base_clock'=>1552
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3050 8 GB GA107 1552 MHz',
            'base_clock'=>1552
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3050 OEM 1515 MHz',
            'base_clock'=>1515
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3060 Ti GA103 1410 MHz',
            'base_clock'=>1410
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3070 Ti 16 GB 1575 MHz',
            'base_clock'=>1575
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3070 Ti Max-Q 510 MHz',
            'base_clock'=>510
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3070 Ti Mobile 915 MHz',
            'base_clock'=>915
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3080 12 GB 1260 MHz',
            'base_clock'=>1260
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3080 Ti 20 GB 1335 MHz',
            'base_clock'=>1335
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3080 Ti Max-Q 585 MHz',
            'base_clock'=>585
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3080 Ti Mobile 810 MHz',
            'base_clock'=>810
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 3090 Ti 1560 MHz',
            'base_clock'=>1560
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 4060 1925 MHz',
            'base_clock'=>1925
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 4060 Ti 2190 MHz',
            'base_clock'=>2190
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 4070 2310 MHz',
            'base_clock'=>2310
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 4080 2025 MHz',
            'base_clock'=>2025
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 4090 2235 MHz',
            'base_clock'=>2235
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA H100 PCIe 1065 MHz',
            'base_clock'=>1065
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA H100 SXM5 1065 MHz',
            'base_clock'=>1065
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA RTX A1000 Embedded 1192 MHz',
            'base_clock'=>1192
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA RTX A1000 Mobile 630 MHz',
            'base_clock'=>630
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA RTX A2000 Embedded 1117 MHz',
            'base_clock'=>1117
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA RTX A3000 Mobile 12 GB 855 MHz',
            'base_clock'=>855
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA RTX A4500 Embedded 930 MHz',
            'base_clock'=>930
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA RTX A4500 Mobile 510 MHz',
            'base_clock'=>510
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA RTX A500 Embedded 1192 MHz',
            'base_clock'=>1192
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA RTX A5500 1170 MHz',
            'base_clock'=>1170
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA RTX A5500 Mobile 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA T550 Mobile 1065 MHz',
            'base_clock'=>1065
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 4050 1925 MHz',
            'base_clock'=>1925
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 4080 Ti 2100 MHz',
            'base_clock'=>2100
        ]);
        
        GPU::Create([
            'nama'=>'NVIDIA GeForce RTX 4090 Ti 2355 MHz',
            'base_clock'=>2355
        ]);
        
        GPU::Create([
            'nama'=>'Intel i740 66 MHz',
            'base_clock'=>66
        ]);
        
        GPU::Create([
            'nama'=>'Intel i740 8 MB 66 MHz',
            'base_clock'=>66
        ]);
        
        GPU::Create([
            'nama'=>'Intel i740 Graphics 66 MHz',
            'base_clock'=>66
        ]);
        
        GPU::Create([
            'nama'=>'Intel i752 Graphics 100 MHz',
            'base_clock'=>100
        ]);
        
        GPU::Create([
            'nama'=>'Intel i752 100 MHz',
            'base_clock'=>100
        ]);
        
        GPU::Create([
            'nama'=>'Intel i810 Graphics 133 MHz',
            'base_clock'=>133
        ]);
        
        GPU::Create([
            'nama'=>'Intel i815 Graphics 133 MHz',
            'base_clock'=>133
        ]);
        
        GPU::Create([
            'nama'=>'Intel i830M Graphics 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'Intel Extreme Graphics 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Intel i830MG Graphics 100 MHz',
            'base_clock'=>100
        ]);
        
        GPU::Create([
            'nama'=>'Intel Extreme Graphics 2 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Intel Extreme Graphics 2 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Intel i852GM Graphics 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA 900 333 MHz',
            'base_clock'=>333
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA 900 333 MHz',
            'base_clock'=>333
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA 950 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA 950 166 MHz',
            'base_clock'=>166
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA 3000 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA 3000 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA 3000 667 MHz',
            'base_clock'=>667
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA 3000 667 MHz',
            'base_clock'=>667
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA 950 250 MHz',
            'base_clock'=>250
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA X3000 667 MHz',
            'base_clock'=>667
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA X3000 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA 3100 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA 3100 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA 3100 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA 3150 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA 3150 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA X3100 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA X3100 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA X3500 667 MHz',
            'base_clock'=>667
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA 3600 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA 3650 640 MHz',
            'base_clock'=>640
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA 500 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA X4500 533 MHz',
            'base_clock'=>533
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA X4500M 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA X4500MHD 533 MHz',
            'base_clock'=>533
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA X4700MHD 640 MHz',
            'base_clock'=>640
        ]);
        
        GPU::Create([
            'nama'=>'Intel Aubrey Isle 1200 MHz',
            'base_clock'=>1200
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA 533 MHz',
            'base_clock'=>533
        ]);
        
        GPU::Create([
            'nama'=>'Intel GMA 600 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 133 MHz',
            'base_clock'=>133
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 533 MHz',
            'base_clock'=>533
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 2000 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 3000 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 3000 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 3000 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 3000 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics P3000 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 4000 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 4000 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics P4000 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'Intel Xeon Phi 3120A 1100 MHz',
            'base_clock'=>1100
        ]);
        
        GPU::Create([
            'nama'=>'Intel Xeon Phi 5110P 1053 MHz',
            'base_clock'=>1053
        ]);
        
        GPU::Create([
            'nama'=>'Intel Xeon Phi SE10X 1100 MHz',
            'base_clock'=>1100
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 311 MHz',
            'base_clock'=>311
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 4200 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 4400 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 4400 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 4600 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 4600 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 5000 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics P4600 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics P4700 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Graphics 5100 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Pro Graphics 5200 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Pro Graphics 5200 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Intel Xeon Phi 5120D 1053 MHz',
            'base_clock'=>1053
        ]);
        
        GPU::Create([
            'nama'=>'Intel Xeon Phi 7120P 1238 MHz',
            'base_clock'=>1238
        ]);
        
        GPU::Create([
            'nama'=>'Intel Xeon Phi 7120X 1238 MHz',
            'base_clock'=>1238
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 5300 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 5500 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 5600 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 6000 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics P5700 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Graphics 6100 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Pro Graphics 6200 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Pro Graphics 6200 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Pro Graphics P6300 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 100 MHz',
            'base_clock'=>100
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 400 320 MHz',
            'base_clock'=>320
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 405 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 500 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 510 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 510 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 515 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 520 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 530 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 530 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics P530 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Graphics 540 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Graphics 550 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Pro Graphics 580 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Pro Graphics P555 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Pro Graphics P580 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Pro Graphics P580 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 505 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 610 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 610 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 615 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 620 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 630 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics 630 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel HD Graphics P630 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Plus Graphics 640 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Plus Graphics 650 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 600 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 605 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 620 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 630 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 630 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Plus Graphics 655 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 610 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 610 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 615 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 617 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 620 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 630 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics P630 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics P630 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Plus Graphics 645 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Plus Graphics G4 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics G1 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel H3C XG310 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Plus Graphics G7 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Xe Graphics G4 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Xe Graphics G7 80EU 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Xe Graphics G7 96EU 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Xe MAX Graphics 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 610 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 630 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 630 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics G4 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics G7 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics P630 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics P630 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel Xe DG1 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'Intel Xe DG1-SDV 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'Intel Arctic Sound 1T 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'Intel Arctic Sound 2T 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 16EU 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 24EU 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 32EU 350 MHz',
            'base_clock'=>350
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 730 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 750 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 770 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics P750 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel Arc A350M 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel Arc A370M 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel Arc A380 2000 MHz',
            'base_clock'=>2000
        ]);
        
        GPU::Create([
            'nama'=>'Intel Arc A550M 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel Arc A730M 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel Arc A770 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel Arc A770M 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel Arc A780 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel Arc Pro A30M 1500 MHz',
            'base_clock'=>1500
        ]);
        
        GPU::Create([
            'nama'=>'Intel Arc Pro A40 1500 MHz',
            'base_clock'=>1500
        ]);
        
        GPU::Create([
            'nama'=>'Intel Arc Pro A50 2000 MHz',
            'base_clock'=>2000
        ]);
        
        GPU::Create([
            'nama'=>'Intel Arctic Sound-M 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Xe Graphics 80EU 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel Iris Xe Graphics 96EU 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 48EU 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 64EU 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 710 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'Intel UHD Graphics 730 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Stream Processor 594 MHz',
            'base_clock'=>594
        ]);
        
        GPU::Create([
            'nama'=>'AMD FireStream 9170 777 MHz',
            'base_clock'=>777
        ]);
        
        GPU::Create([
            'nama'=>'AMD FireStream 9250 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'AMD FireStream 9270 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6570M Mac Edition 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro M3900 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro RG220A 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'AMD FireStream 9350 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'AMD FireStream 9370 825 MHz',
            'base_clock'=>825
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6250 IGP 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6310 IGP 488 MHz',
            'base_clock'=>488
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6310 IGP 276 MHz',
            'base_clock'=>276
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6330M 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6350M 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6370M 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6530M 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6550M 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6550M 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6570M 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6850 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6870 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6950 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6970 880 MHz',
            'base_clock'=>880
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro 2270 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro 2270 PCIe x1 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro M5950 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro M8900 680 MHz',
            'base_clock'=>680
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro V4900 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro V5900 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro V7900 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro V7900 SDI 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon E6460 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon E6760 MXM 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon E6760 PCIe 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6230 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6250 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6290 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6290 IGP 276 MHz',
            'base_clock'=>276
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6320 IGP 508 MHz',
            'base_clock'=>508
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6350 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6350A 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6370D IGP 444 MHz',
            'base_clock'=>444
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6380G IGP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6390 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6410D IGP 444 MHz',
            'base_clock'=>444
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6430M 480 MHz',
            'base_clock'=>480
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6450 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6450 OEM 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6450A 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6450M 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6470M 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6480G IGP 593 MHz',
            'base_clock'=>593
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6480G IGP 444 MHz',
            'base_clock'=>444
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6490 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6490M 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6490M Mac Edition 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6510 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6510 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6520G IGP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6530 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6530D IGP 444 MHz',
            'base_clock'=>444
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6550A 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6550D IGP 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6570 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6570 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6570 OEM 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6570M 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6610M 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6620G IGP 444 MHz',
            'base_clock'=>444
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6625M 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6630M 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6630M Mac Edition 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6650A 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6650M 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6670 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6670A 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6730M 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6750 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6750M 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6750M Mac Edition 598 MHz',
            'base_clock'=>598
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6770 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6770M 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6770M Mac Edition 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6790 840 MHz',
            'base_clock'=>840
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6830M 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6850 X2 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6850M 675 MHz',
            'base_clock'=>675
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6870 X2 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6870M 675 MHz',
            'base_clock'=>675
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6930 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6950M 580 MHz',
            'base_clock'=>580
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6970 X2 880 MHz',
            'base_clock'=>880
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6970M 680 MHz',
            'base_clock'=>680
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6970M Mac Edition 680 MHz',
            'base_clock'=>680
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6970M Rebrand 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6990 830 MHz',
            'base_clock'=>830
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6990M 715 MHz',
            'base_clock'=>715
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6990M Rebrand 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7690M 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7970 925 MHz',
            'base_clock'=>925
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro A300 760 MHz',
            'base_clock'=>760
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro A320 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro M2000 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro M4000 675 MHz',
            'base_clock'=>675
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro M6000 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro S10000 825 MHz',
            'base_clock'=>825
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro S10000 Passive 825 MHz',
            'base_clock'=>825
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro S7000 950 MHz',
            'base_clock'=>950
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro S9000 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro S9010 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro V3900 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W4000 825 MHz',
            'base_clock'=>825
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W5000 825 MHz',
            'base_clock'=>825
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W600 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W7000 950 MHz',
            'base_clock'=>950
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W8000 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W9000 975 MHz',
            'base_clock'=>975
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6250 IGP 276 MHz',
            'base_clock'=>276
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6250 IGP 277 MHz',
            'base_clock'=>277
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6850 1440SP Edition 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7290 IGP 276 MHz',
            'base_clock'=>276
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7310 IGP 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7330M 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7340 IGP 523 MHz',
            'base_clock'=>523
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7350 OEM 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7350 OEM PCI 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7350M 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7370M 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7400G IGP 327 MHz',
            'base_clock'=>327
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7420G IGP 480 MHz',
            'base_clock'=>480
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7430M 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7450 OEM 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7450A 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7450M 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7470 OEM 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7470A 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7470A 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7470M 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7480D IGP 720 MHz',
            'base_clock'=>720
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7490M 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7500G IGP 327 MHz',
            'base_clock'=>327
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7510M 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7520G IGP 496 MHz',
            'base_clock'=>496
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7530M 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7540D IGP 760 MHz',
            'base_clock'=>760
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7550M 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7550M 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7560D IGP 760 MHz',
            'base_clock'=>760
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7560G IGP 496 MHz',
            'base_clock'=>496
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7570 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7570M 500 MHz',
            'base_clock'=>500
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7590M 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7600G IGP 320 MHz',
            'base_clock'=>320
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7610M 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7620G IGP 360 MHz',
            'base_clock'=>360
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7630M 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7640G IGP 496 MHz',
            'base_clock'=>496
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7650A 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7650M 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7650M Rebrand 485 MHz',
            'base_clock'=>485
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7660D IGP 760 MHz',
            'base_clock'=>760
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7660G IGP 686 MHz',
            'base_clock'=>686
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7670 OEM 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7670A 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7670M 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7670M Rebrand 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7690M Rebrand 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7690M XT Rebrand 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7730M 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7750 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7750M 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7770 GHz Edition 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7770M 675 MHz',
            'base_clock'=>675
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7850 860 MHz',
            'base_clock'=>860
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7850M 675 MHz',
            'base_clock'=>675
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7870 GHz Edition 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7870 XT 925 MHz',
            'base_clock'=>925
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7870M 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7950 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7950 Boost 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7950 Monica BIOS 1 925 MHz',
            'base_clock'=>925
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7950 Monica BIOS 2 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7950M 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7970 GHz Edition 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7970 X2 925 MHz',
            'base_clock'=>925
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7970M 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'AMD Wii U GPU 550 MHz',
            'base_clock'=>550
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro R5000 825 MHz',
            'base_clock'=>825
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W5000 DVI 825 MHz',
            'base_clock'=>825
        ]);
        
        GPU::Create([
            'nama'=>'AMD Playstation 4 GPU 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6610 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6770 Green Edition 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 6870 1600SP Edition 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7510 OEM 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7570 OEM 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7720 OEM 840 MHz',
            'base_clock'=>840
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7730 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7790 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7950 Mac Edition 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7990 950 MHz',
            'base_clock'=>950
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8280 IGP 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8350 OEM 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8370D IGP 760 MHz',
            'base_clock'=>760
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8400 IGP 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8450 OEM 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8470 OEM 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8470D IGP 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8490 OEM 875 MHz',
            'base_clock'=>875
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8510 OEM 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8510 OEM 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8550 OEM 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8550D IGP 720 MHz',
            'base_clock'=>720
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8570 OEM 730 MHz',
            'base_clock'=>730
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8570 OEM Rebrand 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8570D IGP 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8650D IGP 720 MHz',
            'base_clock'=>720
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8670 OEM 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8670D IGP 844 MHz',
            'base_clock'=>844
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8730 OEM 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8740 OEM 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8760 OEM 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8770 OEM 1050 MHz',
            'base_clock'=>1050
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8860 OEM 925 MHz',
            'base_clock'=>925
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8870 OEM 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8950 OEM 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8970 OEM 925 MHz',
            'base_clock'=>925
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8990 OEM 950 MHz',
            'base_clock'=>950
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 220 OEM 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 230 OEM 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 235 OEM 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 235X OEM 875 MHz',
            'base_clock'=>875
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 240 OEM 730 MHz',
            'base_clock'=>730
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 240 730 MHz',
            'base_clock'=>730
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 240 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 240 OEM 730 MHz',
            'base_clock'=>730
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 250 700 MHz',
            'base_clock'=>700
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 250 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 250 925 MHz',
            'base_clock'=>925
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 250 OEM 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 250E 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 260 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 260X 1100 MHz',
            'base_clock'=>1100
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 255 OEM 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 260 OEM 1100 MHz',
            'base_clock'=>1100
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 270 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 270X 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 280X 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 280X2 950 MHz',
            'base_clock'=>950
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 290 947 MHz',
            'base_clock'=>947
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 290X 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Sky 500 950 MHz',
            'base_clock'=>950
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Sky 700 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Sky 900 825 MHz',
            'base_clock'=>825
        ]);
        
        GPU::Create([
            'nama'=>'AMD Xbox One GPU 853 MHz',
            'base_clock'=>853
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro M3100 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro M4100 670 MHz',
            'base_clock'=>670
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro M4150 715 MHz',
            'base_clock'=>715
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro M5100 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro M6100 1075 MHz',
            'base_clock'=>1075
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 7690M XT 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8180 IGP 225 MHz',
            'base_clock'=>225
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8210E 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8240 Mobile IGP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8250 IGP 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8280 Mobile IGP 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8280E 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8310G IGP 424 MHz',
            'base_clock'=>424
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8330 Mobile IGP 497 MHz',
            'base_clock'=>497
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8330E 497 MHz',
            'base_clock'=>497
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8350G IGP 514 MHz',
            'base_clock'=>514
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8400 Mobile IGP 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8400E 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8410G IGP 450 MHz',
            'base_clock'=>450
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8450G IGP 533 MHz',
            'base_clock'=>533
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8510G IGP 554 MHz',
            'base_clock'=>554
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8550G IGP 515 MHz',
            'base_clock'=>515
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8570A 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8570M 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8590M 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8610G IGP 533 MHz',
            'base_clock'=>533
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8650G IGP 533 MHz',
            'base_clock'=>533
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8670A 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8670A 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8670M 925 MHz',
            'base_clock'=>925
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8670M 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8690M 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8730A 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8730M 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8750A 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8750M 620 MHz',
            'base_clock'=>620
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8770M 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8790M 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8830M 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8850M 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8870M 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8950M 1075 MHz',
            'base_clock'=>1075
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8970M 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 M230 Rebrand 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro D300 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro D500 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro D700 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro S10000 Passive 12GB 825 MHz',
            'base_clock'=>825
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro S4000X 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro S9050 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro S9100 824 MHz',
            'base_clock'=>824
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro S9150 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W2100 630 MHz',
            'base_clock'=>630
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W4100 630 MHz',
            'base_clock'=>630
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W4170M 825 MHz',
            'base_clock'=>825
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W5100 930 MHz',
            'base_clock'=>930
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W5170M 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W6170M 1075 MHz',
            'base_clock'=>1075
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W7100 920 MHz',
            'base_clock'=>920
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W8100 824 MHz',
            'base_clock'=>824
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W9100 930 MHz',
            'base_clock'=>930
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon E8860 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8210 IGP 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8530M 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon HD 8550M 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R4 Mobile Graphics 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R4 Mobile Graphics 533 MHz',
            'base_clock'=>533
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 230 625 MHz',
            'base_clock'=>625
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 A220 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 A230 780 MHz',
            'base_clock'=>780
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 A240 1030 MHz',
            'base_clock'=>1030
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 A240 730 MHz',
            'base_clock'=>730
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 A255 925 MHz',
            'base_clock'=>925
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 Graphics 758 MHz',
            'base_clock'=>758
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 Graphics 497 MHz',
            'base_clock'=>497
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 M230 825 MHz',
            'base_clock'=>825
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 M230 780 MHz',
            'base_clock'=>780
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 M230 Rebrand 780 MHz',
            'base_clock'=>780
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 M240 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 M240 Rebrand 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 M250 650 MHz',
            'base_clock'=>650
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 M255 925 MHz',
            'base_clock'=>925
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 Mobile Graphics 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R6 M255DX 925 MHz',
            'base_clock'=>925
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R6 M255DX 780 MHz',
            'base_clock'=>780
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R6 Mobile Graphics 533 MHz',
            'base_clock'=>533
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 250X 950 MHz',
            'base_clock'=>950
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 250XE 860 MHz',
            'base_clock'=>860
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 265 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 265X OEM 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 A260 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 A265 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 Graphics 720 MHz',
            'base_clock'=>720
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 Graphics 720 MHz',
            'base_clock'=>720
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M260 940 MHz',
            'base_clock'=>940
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M260DX 780 MHz',
            'base_clock'=>780
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M260DX 955 MHz',
            'base_clock'=>955
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M260DX 925 MHz',
            'base_clock'=>925
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M265 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M265 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M265DX 780 MHz',
            'base_clock'=>780
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M265DX 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M265DX 925 MHz',
            'base_clock'=>925
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M270 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M270DX 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M270DX 780 MHz',
            'base_clock'=>780
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 Mobile Graphics 554 MHz',
            'base_clock'=>554
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 280 827 MHz',
            'base_clock'=>827
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 285 918 MHz',
            'base_clock'=>918
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 285X 1002 MHz',
            'base_clock'=>1002
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 290X2 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 295X2 1018 MHz',
            'base_clock'=>1018
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M265X 575 MHz',
            'base_clock'=>575
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M270X 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M275 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M275X 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M290X 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M290X Mac Edition 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M295X 723 MHz',
            'base_clock'=>723
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M295X Mac Edition 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro S9170 930 MHz',
            'base_clock'=>930
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W4130M 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W4150M 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W4170M 825 MHz',
            'base_clock'=>825
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W4190M 825 MHz',
            'base_clock'=>825
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W4300 930 MHz',
            'base_clock'=>930
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W5130M 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W6150M 1075 MHz',
            'base_clock'=>1075
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro W7170M 723 MHz',
            'base_clock'=>723
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon E6465 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon E8870 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon E8950 735 MHz',
            'base_clock'=>735
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R2 Mobile Graphics 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R2 Mobile Graphics 497 MHz',
            'base_clock'=>497
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R3 Mobile Graphics 600 MHz',
            'base_clock'=>600
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R3E Mobile Graphics 351 MHz',
            'base_clock'=>351
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 310 OEM 875 MHz',
            'base_clock'=>875
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 310 OEM 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 330 OEM 830 MHz',
            'base_clock'=>830
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 340 OEM 730 MHz',
            'base_clock'=>730
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 340X OEM 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 A320 750 MHz',
            'base_clock'=>750
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 A330 1030 MHz',
            'base_clock'=>1030
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 A335 1070 MHz',
            'base_clock'=>1070
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 M315 970 MHz',
            'base_clock'=>970
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 M320 780 MHz',
            'base_clock'=>780
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 M330 955 MHz',
            'base_clock'=>955
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 M335 1070 MHz',
            'base_clock'=>1070
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 Mobile Graphics 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R6 M335DX 955 MHz',
            'base_clock'=>955
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R6 M340DX 955 MHz',
            'base_clock'=>955
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R6 Mobile Graphics 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 340 OEM 730 MHz',
            'base_clock'=>730
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 340 OEM 730 MHz',
            'base_clock'=>730
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 350 OEM 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 350X OEM 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 360 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 360 896SP 1100 MHz',
            'base_clock'=>1100
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 360E 1050 MHz',
            'base_clock'=>1050
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 370 925 MHz',
            'base_clock'=>925
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 A360 1100 MHz',
            'base_clock'=>1100
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 A360 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 A360 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M260X 620 MHz',
            'base_clock'=>620
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M340 620 MHz',
            'base_clock'=>620
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M340 943 MHz',
            'base_clock'=>943
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M350 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M350 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M360 1100 MHz',
            'base_clock'=>1100
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M365X 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M370 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M380 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 Mobile Graphics 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R8 M350DX 955 MHz',
            'base_clock'=>955
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R8 M365DX 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 270 1024SP 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 360 OEM 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 370 925 MHz',
            'base_clock'=>925
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 370 1024SP 925 MHz',
            'base_clock'=>925
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 370X 980 MHz',
            'base_clock'=>980
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 380 970 MHz',
            'base_clock'=>970
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 380 OEM 918 MHz',
            'base_clock'=>918
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 380X 970 MHz',
            'base_clock'=>970
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 390 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 390 X2 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 390X 1050 MHz',
            'base_clock'=>1050
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 A375 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 FURY 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 FURY X 1050 MHz',
            'base_clock'=>1050
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 FURY X2 1050 MHz',
            'base_clock'=>1050
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M270X 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M280X 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M280X 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M360 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M365X 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M370X Mac Edition 775 MHz',
            'base_clock'=>775
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M375 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M375X 925 MHz',
            'base_clock'=>925
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M380 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M380 Mac Edition 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M385 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M385X 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M390 Mac Edition 958 MHz',
            'base_clock'=>958
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M390X 723 MHz',
            'base_clock'=>723
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M395 Mac Edition 834 MHz',
            'base_clock'=>834
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M395X 723 MHz',
            'base_clock'=>723
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M395X Mac Edition 909 MHz',
            'base_clock'=>909
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 Nano 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro S7100X 725 MHz',
            'base_clock'=>725
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro S7150 920 MHz',
            'base_clock'=>920
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro S7150 x2 1050 MHz',
            'base_clock'=>1050
        ]);
        
        GPU::Create([
            'nama'=>'AMD FirePro S9300 X2 975 MHz',
            'base_clock'=>975
        ]);
        
        GPU::Create([
            'nama'=>'AMD Playstation 4 Pro GPU 911 MHz',
            'base_clock'=>911
        ]);
        
        GPU::Create([
            'nama'=>'AMD Playstation 4 Slim GPU 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon E9260 MXM 1090 MHz',
            'base_clock'=>1090
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon E9260 PCIe 1090 MHz',
            'base_clock'=>1090
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon E9550 MXM 1120 MHz',
            'base_clock'=>1120
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Instinct MI6 1120 MHz',
            'base_clock'=>1120
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Instinct MI8 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro 450 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro 455 855 MHz',
            'base_clock'=>855
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro 460 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro Duo 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro V5300X 1125 MHz',
            'base_clock'=>1125
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro V7300X 1188 MHz',
            'base_clock'=>1188
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro V7350X2 1188 MHz',
            'base_clock'=>1188
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro WX 4100 1125 MHz',
            'base_clock'=>1125
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro WX 5100 713 MHz',
            'base_clock'=>713
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro WX 7100 1188 MHz',
            'base_clock'=>1188
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R2 Mobile Graphics 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R3 Mobile Graphics 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R4 Mobile Graphics 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 430 OEM 730 MHz',
            'base_clock'=>730
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 435 OEM 1030 MHz',
            'base_clock'=>1030
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 M420 780 MHz',
            'base_clock'=>780
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 M430 780 MHz',
            'base_clock'=>780
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 M430 780 MHz',
            'base_clock'=>780
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 M430 1030 MHz',
            'base_clock'=>1030
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 M435 780 MHz',
            'base_clock'=>780
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 M445 920 MHz',
            'base_clock'=>920
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 M465 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 Mobile Graphics 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R6 M435DX 955 MHz',
            'base_clock'=>955
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 350 800 MHz',
            'base_clock'=>800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 430 OEM 730 MHz',
            'base_clock'=>730
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 435 OEM 920 MHz',
            'base_clock'=>920
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 450 OEM 925 MHz',
            'base_clock'=>925
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M440 891 MHz',
            'base_clock'=>891
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M445 780 MHz',
            'base_clock'=>780
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M460 1100 MHz',
            'base_clock'=>1100
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M465 825 MHz',
            'base_clock'=>825
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M465 1100 MHz',
            'base_clock'=>1100
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 M465X 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R8 M435DX 955 MHz',
            'base_clock'=>955
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R8 M445DX 780 MHz',
            'base_clock'=>780
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M470 900 MHz',
            'base_clock'=>900
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M470X 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R9 M485X 723 MHz',
            'base_clock'=>723
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 455 OEM 1050 MHz',
            'base_clock'=>1050
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 460 1090 MHz',
            'base_clock'=>1090
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 460 Mobile 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 470 926 MHz',
            'base_clock'=>926
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 470 Mobile 926 MHz',
            'base_clock'=>926
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 470D 926 MHz',
            'base_clock'=>926
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 480 1120 MHz',
            'base_clock'=>1120
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 480 Mobile 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 580 OEM 1120 MHz',
            'base_clock'=>1120
        ]);
        
        GPU::Create([
            'nama'=>'AMD Xbox One S GPU 914 MHz',
            'base_clock'=>914
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon 520 Mobile 1030 MHz',
            'base_clock'=>1030
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon 520 Mobile 1030 MHz',
            'base_clock'=>1030
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon 530 Mobile 730 MHz',
            'base_clock'=>730
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon 530X Mobile 730 MHz',
            'base_clock'=>730
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon 535 Mobile 730 MHz',
            'base_clock'=>730
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon 550 1100 MHz',
            'base_clock'=>1100
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon E9171 MCM 1124 MHz',
            'base_clock'=>1124
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon E9172 MXM 1124 MHz',
            'base_clock'=>1124
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon E9173 PCIe 1124 MHz',
            'base_clock'=>1124
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon E9174 MXM 1124 MHz',
            'base_clock'=>1124
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon E9175 PCIe 1124 MHz',
            'base_clock'=>1124
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Instinct MI25 1400 MHz',
            'base_clock'=>1400
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro 555 850 MHz',
            'base_clock'=>850
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro 560 907 MHz',
            'base_clock'=>907
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro 570 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro 575 1096 MHz',
            'base_clock'=>1096
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro 580 1100 MHz',
            'base_clock'=>1100
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro Duo Polaris 1243 MHz',
            'base_clock'=>1243
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro SSG 1440 MHz',
            'base_clock'=>1440
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro V320 852 MHz',
            'base_clock'=>852
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro Vega 56 1138 MHz',
            'base_clock'=>1138
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro Vega 64 1250 MHz',
            'base_clock'=>1250
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro WX 2100 925 MHz',
            'base_clock'=>925
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro WX 3100 925 MHz',
            'base_clock'=>925
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro WX 4130 Mobile 1002 MHz',
            'base_clock'=>1002
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro WX 4150 Mobile 1002 MHz',
            'base_clock'=>1002
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro WX 4170 Mobile 1002 MHz',
            'base_clock'=>1002
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro WX 7100 Mobile 1188 MHz',
            'base_clock'=>1188
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro WX 7130 Mobile 1188 MHz',
            'base_clock'=>1188
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro WX 8100 1200 MHz',
            'base_clock'=>1200
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro WX 9100 1200 MHz',
            'base_clock'=>1200
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R5 Graphics 200 MHz',
            'base_clock'=>200
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R8 M535DX 780 MHz',
            'base_clock'=>780
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 460 1024SP 1090 MHz',
            'base_clock'=>1090
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 540 Mobile 1124 MHz',
            'base_clock'=>1124
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 550 1100 MHz',
            'base_clock'=>1100
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 550 512SP 1019 MHz',
            'base_clock'=>1019
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 550 640SP 1019 MHz',
            'base_clock'=>1019
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 550 Mobile 1100 MHz',
            'base_clock'=>1100
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 560 1175 MHz',
            'base_clock'=>1175
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 560 896SP 1090 MHz',
            'base_clock'=>1090
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 560 Mobile 784 MHz',
            'base_clock'=>784
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 560 Mobile 1090 MHz',
            'base_clock'=>1090
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 560 Mobile 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 560D 1090 MHz',
            'base_clock'=>1090
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 570 1168 MHz',
            'base_clock'=>1168
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 570 Mobile 926 MHz',
            'base_clock'=>926
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 570 X2 1120 MHz',
            'base_clock'=>1120
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 580 1257 MHz',
            'base_clock'=>1257
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 580 Mobile 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX Vega 10 Mobile 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX Vega 56 1156 MHz',
            'base_clock'=>1156
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX Vega 64 1247 MHz',
            'base_clock'=>1247
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX Vega 64 Limited Edition 1247 MHz',
            'base_clock'=>1247
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX Vega 64 Liquid Cooling 1406 MHz',
            'base_clock'=>1406
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 8 Mobile 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega Frontier Edition 1382 MHz',
            'base_clock'=>1382
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega Frontier Edition Watercooled 1382 MHz',
            'base_clock'=>1382
        ]);
        
        GPU::Create([
            'nama'=>'AMD Xbox One X GPU 1172 MHz',
            'base_clock'=>1172
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon 540X Mobile 980 MHz',
            'base_clock'=>980
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon 550X 640SP 1019 MHz',
            'base_clock'=>1019
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon 550X Mobile 1100 MHz',
            'base_clock'=>1100
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Instinct MI50 1200 MHz',
            'base_clock'=>1200
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Instinct MI60 1200 MHz',
            'base_clock'=>1200
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro 555X 907 MHz',
            'base_clock'=>907
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro 560X 1004 MHz',
            'base_clock'=>1004
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro V340 852 MHz',
            'base_clock'=>852
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro Vega 16 815 MHz',
            'base_clock'=>815
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro Vega 20 815 MHz',
            'base_clock'=>815
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro WX 8200 1200 MHz',
            'base_clock'=>1200
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro WX Vega M GL 931 MHz',
            'base_clock'=>931
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 540X Mobile 1124 MHz',
            'base_clock'=>1124
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 550X 1100 MHz',
            'base_clock'=>1100
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 550X 640SP 1019 MHz',
            'base_clock'=>1019
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 550X Mobile 1100 MHz',
            'base_clock'=>1100
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 560DX 1090 MHz',
            'base_clock'=>1090
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 560X 1175 MHz',
            'base_clock'=>1175
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 560X Mobile 1175 MHz',
            'base_clock'=>1175
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 560X Mobile 1275 MHz',
            'base_clock'=>1275
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 560X Mobile 1275 MHz',
            'base_clock'=>1275
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 570X 1168 MHz',
            'base_clock'=>1168
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 580 2048SP 1168 MHz',
            'base_clock'=>1168
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 580G 1257 MHz',
            'base_clock'=>1257
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 580X 1257 MHz',
            'base_clock'=>1257
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 580X Mobile 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 590 1469 MHz',
            'base_clock'=>1469
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX Vega 11 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX Vega 11 Embedded 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX Vega 11 Mobile 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX Vega 56 Mobile 1138 MHz',
            'base_clock'=>1138
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX Vega M GH 1063 MHz',
            'base_clock'=>1063
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX Vega M GL 931 MHz',
            'base_clock'=>931
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX Vega Nano 1247 MHz',
            'base_clock'=>1247
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 11 Embedded 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 3 Embedded 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 3 Embedded 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 3 Embedded 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 3 Mobile 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 6 Embedded 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 6 Mobile 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 8 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 8 Embedded 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 8 Embedded 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Zhongshan Subor Z+ GPU 1300 MHz',
            'base_clock'=>1300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon 540 Mobile 1100 MHz',
            'base_clock'=>1100
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon 540X Mobile 980 MHz',
            'base_clock'=>980
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon 550X 1082 MHz',
            'base_clock'=>1082
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon 610 Mobile 1030 MHz',
            'base_clock'=>1030
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon 620 Mobile 730 MHz',
            'base_clock'=>730
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon 625 Mobile 730 MHz',
            'base_clock'=>730
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon 630 Mobile 1082 MHz',
            'base_clock'=>1082
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon E9390 PCIe 713 MHz',
            'base_clock'=>713
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon E9560 PCIe 1120 MHz',
            'base_clock'=>1120
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro 5300M 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro 5500M 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro 570X 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro 575X 1096 MHz',
            'base_clock'=>1096
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro 580X 1100 MHz',
            'base_clock'=>1100
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro Vega 48 1200 MHz',
            'base_clock'=>1200
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro Vega 64X 1250 MHz',
            'base_clock'=>1250
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro Vega II 1574 MHz',
            'base_clock'=>1574
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro Vega II Duo 1400 MHz',
            'base_clock'=>1400
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro W5300M 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro W5700 1400 MHz',
            'base_clock'=>1400
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro W5700X 1243 MHz',
            'base_clock'=>1243
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro WX 3200 1295 MHz',
            'base_clock'=>1295
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro WX 3200 Mobile 1082 MHz',
            'base_clock'=>1082
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon R7 350 640SP 925 MHz',
            'base_clock'=>925
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 5300 XT 1670 MHz',
            'base_clock'=>1670
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 5300M 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 5500 OEM 1500 MHz',
            'base_clock'=>1500
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 5500 XT 1607 MHz',
            'base_clock'=>1607
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 5500M 1375 MHz',
            'base_clock'=>1375
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 560 XT 1074 MHz',
            'base_clock'=>1074
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 560X Mobile 1223 MHz',
            'base_clock'=>1223
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 5700 1465 MHz',
            'base_clock'=>1465
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 5700 XT 1605 MHz',
            'base_clock'=>1605
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 5700 XT 50th Anniversary 1680 MHz',
            'base_clock'=>1680
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 640 Mobile 1082 MHz',
            'base_clock'=>1082
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX Vega 11 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX Vega 11 Mobile 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon VII 1400 MHz',
            'base_clock'=>1400
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 10 Mobile 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 10 Mobile 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 10 Mobile 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 11 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 3 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 3 Embedded 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 3 Embedded 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 3 Mobile 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 6 Mobile 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 6 Mobile 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 8 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 8 Mobile 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 8 Mobile 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 8 Mobile 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 9 Mobile 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD AeroBox GPU 935 MHz',
            'base_clock'=>935
        ]);
        
        GPU::Create([
            'nama'=>'AMD Atari VCS 400 GPU 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Atari VCS 800 GPU 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Playstation 5 GPU 2233 MHz',
            'base_clock'=>2233
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Graphics 320SP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Graphics 384SP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Graphics 448SP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Graphics 512SP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Graphics 512SP 400 MHz',
            'base_clock'=>400
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Instinct MI100 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro 5300 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro 5500 XT 1187 MHz',
            'base_clock'=>1187
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro 5600M 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro 5700 1243 MHz',
            'base_clock'=>1243
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro 5700 XT 1243 MHz',
            'base_clock'=>1243
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro V520 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro VII 1400 MHz',
            'base_clock'=>1400
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro W5500 1744 MHz',
            'base_clock'=>1744
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro W5500M 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 5300 1327 MHz',
            'base_clock'=>1327
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 5600 OEM 1130 MHz',
            'base_clock'=>1130
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 5600 XT 1130 MHz',
            'base_clock'=>1130
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 5600M 1035 MHz',
            'base_clock'=>1035
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 5700M 1465 MHz',
            'base_clock'=>1465
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 590 GME 1257 MHz',
            'base_clock'=>1257
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6800 1700 MHz',
            'base_clock'=>1700
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6800 XT 1825 MHz',
            'base_clock'=>1825
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6900 XT 1825 MHz',
            'base_clock'=>1825
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6900 XTX 2075 MHz',
            'base_clock'=>2075
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 3 Mobile 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Xbox Series S GPU 1565 MHz',
            'base_clock'=>1565
        ]);
        
        GPU::Create([
            'nama'=>'AMD Xbox Series X GPU 1825 MHz',
            'base_clock'=>1825
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Graphics 448SP 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Instinct MI210 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Instinct MI250 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Instinct MI250X 1000 MHz',
            'base_clock'=>1000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro V620 1825 MHz',
            'base_clock'=>1825
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro W6600 2331 MHz',
            'base_clock'=>2331
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro W6600M 2200 MHz',
            'base_clock'=>2200
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro W6800 2075 MHz',
            'base_clock'=>2075
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro W6800X 1800 MHz',
            'base_clock'=>1800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro W6800X Duo 1800 MHz',
            'base_clock'=>1800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro W6900X 1825 MHz',
            'base_clock'=>1825
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6600 1626 MHz',
            'base_clock'=>1626
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6600 XT 1968 MHz',
            'base_clock'=>1968
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6600M 2068 MHz',
            'base_clock'=>2068
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6700 1941 MHz',
            'base_clock'=>1941
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6700 XT 2321 MHz',
            'base_clock'=>2321
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6700M 1489 MHz',
            'base_clock'=>1489
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6800M 2116 MHz',
            'base_clock'=>2116
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 6 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 6 Mobile 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 7 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 7 Mobile 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 8 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Vega 8 Mobile 300 MHz',
            'base_clock'=>300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon 660M 1500 MHz',
            'base_clock'=>1500
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon 680M 2000 MHz',
            'base_clock'=>2000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon Pro W6400 2331 MHz',
            'base_clock'=>2331
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6300M 2000 MHz',
            'base_clock'=>2000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6400 1923 MHz',
            'base_clock'=>1923
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6500 XT 2310 MHz',
            'base_clock'=>2310
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6500M 2000 MHz',
            'base_clock'=>2000
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6600S 1700 MHz',
            'base_clock'=>1700
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6650 XT 2055 MHz',
            'base_clock'=>2055
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6650M 2068 MHz',
            'base_clock'=>2068
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6650M XT 2068 MHz',
            'base_clock'=>2068
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6700S 1700 MHz',
            'base_clock'=>1700
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6750 XT 2150 MHz',
            'base_clock'=>2150
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6800S 1800 MHz',
            'base_clock'=>1800
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6850M XT 2321 MHz',
            'base_clock'=>2321
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 6950 XT 1925 MHz',
            'base_clock'=>1925
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 7700 XT 2300 MHz',
            'base_clock'=>2300
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 7800 XT 2400 MHz',
            'base_clock'=>2400
        ]);
        
        GPU::Create([
            'nama'=>'AMD Radeon RX 7900 XT 2500 MHz',
            'base_clock'=>2500
        ]);
        
        GPU::Create([
            'nama'=>'AMD Steam Deck GPU 1000 MHz',
            'base_clock'=>1000
        ]);
        
        
    }
}
