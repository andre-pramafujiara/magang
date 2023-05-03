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
        Schema::create('penaggungjawabs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penanggungjawab');
            $table->string('alamat_penanggungjawab');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('rw');
            $table->string('rt');
            $table->integer('kode_pos');
            $table->string('negara');
            $table->string('tlp_pen_jaw');
            $table->string('hubungan_dgn_pasien');
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
        Schema::dropIfExists('penaggungjawabs');
    }
};
