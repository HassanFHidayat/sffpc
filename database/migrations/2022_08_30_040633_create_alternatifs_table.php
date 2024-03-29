<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Symfony\Component\String\b;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternatifs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penjual_id');
            $table->string('nama')->nullable();
            $table->foreignId('kecepatan_cpu');
            $table->foreignId('kecepatan_gpu');
            $table->integer('kapasitas_ram');
            $table->integer('kapasitas_ssd');
            $table->integer('kapasitas_hdd');
            $table->double('harga');
            $table->string('image')->nullable();
            $table->double('normalisasi_kecepatan_cpu')->nullable();
            $table->double('normalisasi_kecepatan_gpu')->nullable();
            $table->double('normalisasi_kapasitas_ram')->nullable();
            $table->double('normalisasi_kapasitas_ssd')->nullable();
            $table->double('normalisasi_kapasitas_hdd')->nullable();
            $table->double('normalisasi_harga')->nullable();
            $table->string('link')->nullable();
            $table->double('hasil')->nullable();
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
        Schema::dropIfExists('alternatifs');
    }
};
