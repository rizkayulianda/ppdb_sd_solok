<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSekolahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekolah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kd_sekolah');
            $table->foreign('kd_sekolah')->references('kd_sekolah')->on('operator');
            $table->string('nama_sekolah');
            $table->text('alamat_sekolah');
            $table->string('kd_zonasi');
            $table->foreign('kd_zonasi')->references('kd_zonasi')->on('zonasi');
            $table->string('email_sekolah');
            $table->string('lat_sekolah');
            $table->string('long_sekolah');
            $table->string('web_sekolah');
            $table->string('notelp_sekolah', 12);
            $table->string('kepala_sekolah');
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
        Schema::dropIfExists('sekolah');
    }
}