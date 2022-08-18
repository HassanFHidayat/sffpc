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
            $table->integer('Lcpu');
            $table->integer('Lgpu');
            $table->integer('Lram');
            $table->integer('Lstorage');
            $table->integer('Lssd');
            $table->integer('Lhdd');
            $table->integer('Lharga');
            $table->float('Gcpu');
            $table->float('Ggpu');
            $table->float('Gram');
            $table->float('Gssd');
            $table->float('Ghdd');
            $table->float('Gharga');
            $table->integer('idUser');
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
