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
        Schema::create('pasien_b_s', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pas_td')->nullable();
            $table->string('perkiraan_umur');
            $table->string('lokasi_temu');
            $table->date('tgl_temu');
            $table->string('id_pen_jaw')->nullable();
            $table->string('id_peng')->nullable();
            $table->string('id_bbl')->nullable();
            $table->timestamps();

            $table->foreign('id_pen_jaw')->references('id')->on('penanggungjawab');
            $table->foreign('id_peng')->references('id')->on('pagantar');
            $table->foreign('id_bbl')->references('id')->on('bayi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien_b_s');
    }
};
