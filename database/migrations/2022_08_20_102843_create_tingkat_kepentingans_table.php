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
            $table->decimal('cpu_global');
            $table->decimal('gpu_global');
            $table->decimal('ram_global');
            $table->decimal('ssd_global');
            $table->decimal('hdd_global');
            $table->decimal('harga_global');
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
