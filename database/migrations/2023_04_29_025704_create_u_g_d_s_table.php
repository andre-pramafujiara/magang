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
        Schema::create('u_g_d_s', function (Blueprint $table) {
            // $table->id();
            // $table->string('id_pasien')->nullable();
            // $table->string('nama_pasien_td')->nullable();
            // $table->string('nama_pasien_td');
            // $table->string('perkiraan_umur');
            // $table->string('lokasi_ditemukan');
            // $table->date('tgl_ditemukan');
            // $table->string('nama_penanggungjawab');
            // $table->string('alamat_penanggungjawab');
            // $table->string('tlp_penanggungjawab');
            // $table->string('hubungan_dgn_pasien');
            // $table->string('nama_pengantar');
            // $table->string('tlp_pengantar');
            // $table->string('nama_bayi');
            // $table->string('nik_ibukandung');
            // $table->string('no_rm');
            // $table->string('tgl_lahir_bayi');
            // $table->string('jam_lahir_bayi');
            // $table->string('jenis_kelamin_bayi');

            $table->id();
            $table->string('id_pasiena')->nullable();
            $table->string('id_pasienb')->nullable();
            $table->timestamps();

            $table->foreign('id_pasiena')->references('id')->on('pasien');
            $table->foreign('id_pasienb')->references('id')->on('pasienb');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('u_g_d_s');
    }
};
