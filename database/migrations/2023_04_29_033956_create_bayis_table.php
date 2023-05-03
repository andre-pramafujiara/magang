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
        Schema::create('bayis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bayi');
            $table->string('nik_ibu_kandung');
            $table->string('no_rm');
            $table->date('tgl_lahir_bayi');
            $table->string('jam_lahir_bayi');
            $table->string('jk_bayi');
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
        Schema::dropIfExists('bayis');
    }
};
