<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tingkat_kepentingans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pembeli_id');
            $table->integer('cpu_lokal');
            $table->integer('gpu_lokal');
            $table->integer('ram_lokal');
            $table->integer('storage_lokal');
            $table->integer('ssd_lokal');
            $table->integer('hdd_lokal');
            $table->integer('harga_lokal');
            $table->float('cpu_global');
            $table->float('gpu_global');
            $table->float('ram_global');
            $table->float('ssd_global');
            $table->float('hdd_global');
            $table->float('harga_global');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tingkat_kepentingans');
    }
};
