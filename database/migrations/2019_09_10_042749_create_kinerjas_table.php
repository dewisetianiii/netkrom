<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKinerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kinerjas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('periode_penilaian');
            $table->string('nama_penilai');
            $table->date('tanggal');
            $table->string('nama_karyawan');
            $table->string('jabatan');
            $table->string('departemen');
            $table->string('deskripsi_pekerjaan');
            $table->string('nilai1');
            $table->string('nilai2');
            $table->string('nilai3');
            $table->string('nilai4');
            $table->string('nilai5');
            $table->string('nilai6');
            $table->string('nilai7');
            $table->string('nilai8');
            $table->string('nilai9');
            $table->string('nilai10');
            $table->string('keterangan1');
            $table->string('keterangan2');
            $table->string('keterangan3');
            $table->string('keterangan4');
            $table->string('keterangan5');
            $table->string('keterangan6');
            $table->string('keterangan7');
            $table->string('keterangan8');
            $table->string('keterangan9');
            $table->string('keterangan10');
            $table->string('jumlah');
            $table->string('sangat_baik');
            $table->string('baik');
            $table->string('cukup');
            $table->string('kurang');
            $table->string('sangat_kurang');
            $table->string('rangkuman_evaluasi');
            $table->string('rekomendasi');
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
        Schema::dropIfExists('kinerjas');
    }
}
