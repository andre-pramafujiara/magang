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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('no_rm')->nullable();
            $table->string('nama_pasien');
            $table->string('kewarganegaraan');
            $table->string('nik')->nullable();
            $table->string('no_passport')->nullable();
            $table->boolean('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->integer('umur');
            $table->string('telepon');
            $table->string('nowa');
            $table->string('status');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('suku');
            $table->string('bahasa');
            $table->string('alamat_ktp');
            $table->string('provinsi_ktp');
            $table->string('kabupaten_ktp');
            $table->string('kecamatan_ktp');
            $table->string('kelurahan_ktp');
            $table->string('rw_ktp');
            $table->string('rt_ktp');
            $table->integer('kode_pos_ktp');
            $table->string('alamat_domisili');
            $table->string('provinsi_domisili');
            $table->string('kabupaten_domisili');
            $table->string('kecamatan_domisili');
            $table->string('kelurahan_domisili');
            $table->string('rw_domisili');
            $table->string('rt_domisili');
            $table->integer('kode_pos_domisili');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('suami_istri')->nullable();
            $table->string('asuransi')->nullable();
            $table->string('no_asuransi')->nullable();
            $table->timestamps();

            $table->index('nama_pasien');
            $table->unique(['nik', 'no_passport']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasiens');
    }
};
