<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon_siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string ('nama_siswa');
            $table->string ('tempat_lahir');
            $table->date ('tanggal_lahir');
            $table->text ('alamat_siswa');
            $table->string('kd_zonasi');
            $table->foreign('kd_zonasi')->references('kd_zonasi')->on('zonasi');
            $table->string('lat_siswa');
            $table->string('long_siswa');
            $table->string ('jenis_kelamin');
            $table->string ('pendidikan_sebelumnya');
            $table->string ('nik_siswa', 16)->unique();
            $table->string('no_kk');
            $table->foreign('no_kk')->references('no_kk')->on('ortu');
            $table->mediumText('image_kk');
            $table->mediumText('image_akte');
            $table->mediumText('image_ijazah_tk');
            $table->mediumText('image_pasfoto');
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
        Schema::dropIfExists('calon_siswa');
    }
}