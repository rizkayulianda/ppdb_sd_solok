<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKesehatanSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kesehatan_siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik_siswa');
            $table->foreign('nik_siswa')->references('nik_siswa')->on('calon_siswa');
            $table->integer('tinggi');
            $table->integer('berat');
            $table->string('penglihatan');
            $table->string('pendengaran');
            $table->string('gigi');
            $table->string('riwayat_penyakit');
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
        Schema::dropIfExists('kesehatan_siswa');
    }
}