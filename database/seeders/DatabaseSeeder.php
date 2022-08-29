<?php

namespace Database\Seeders;

use App\Models\Skala;
use App\Models\CPu;
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
        
        
    }
}
