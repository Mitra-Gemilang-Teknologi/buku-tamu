<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KunjunganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kunjungan', function (Blueprint $table) {
            $table->id('id_kunjungan');
            $table->string('nama');
            $table->string('waktu_kunjungan');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('rt');
            $table->string('rw');
            $table->string('jenis_kelamin');
            $table->string('usia');
            $table->string('tujuan');
            $table->integer('jml_pengunjung');
            $table->longText('keterangan');
            $table->softDeletes();
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
        Schema::dropIfExists('kunjungan');
    }
}
