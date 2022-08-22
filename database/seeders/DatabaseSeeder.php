<?php

namespace Database\Seeders;

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
    }
}
