<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string ('no_pendaftaran')->unique();
            $table->string('nik_siswa');
            $table->foreign('nik_siswa')->references('nik_siswa')->on('calon_siswa');
            $table->timestamp('tanggal_pendaftaran');
            $table->string('kd_sekolah');
            $table->foreign('kd_sekolah')->references('kd_sekolah')->on('sekolah');
            $table->string('status');
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
        Schema::dropIfExists('pendaftaran');
    }
}
