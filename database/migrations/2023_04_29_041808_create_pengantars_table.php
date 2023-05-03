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
        Schema::create('pengantars', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengantar');
            $table->string('alamat_pengantar');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('rw');
            $table->string('rt');
            $table->integer('kode_pos');
            $table->string('negara');
            $table->string('tlp_pengantar');
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
        Schema::dropIfExists('pengantars');
    }
};
