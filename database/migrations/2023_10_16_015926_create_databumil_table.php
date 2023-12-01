<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('databumil', function (Blueprint $table) {
            $table->string('no_index_bumil', 18)->primary();
            $table->unsignedBigInteger('id_jenispenyakit');
            $table->unsignedBigInteger('id_jenisfaktor');
            $table->unsignedBigInteger('id_jenisristi');
            $table->unsignedBigInteger('id_periksabumil');
            $table->string('id_no_index_infobumil');
            $table->date('tgl_register');
            $table->date('tgl_lahir');
            $table->float('bbawal');
            $table->integer('umur');
            $table->integer('umur_kehamilan');
            $table->string('jenis_persalinan');
            $table->string('no_telepon_istri');
            $table->date('htp');
            $table->string('jenisristi');
            $table->tinyInteger('g');
            $table->tinyInteger('p');
            $table->tinyInteger('a');
            $table->float('lila');
            $table->smallInteger('sistole_akhir');
            $table->float('diastole_akhir');
            $table->float('hb_akhir');
            $table->string('rt');
            $table->string('rw');
            $table->date('tanggal_melahirkan');
            $table->string('penolong');
            $table->string('cara_lahir');
            $table->string('kondisi_bayi');
            $table->string('kondisi_ibu');
            $table->tinyInteger('konseling_pasca_salin');
            $table->string('jenis_gakin');

            $table->foreign('id_jenispenyakit')->references('id')->on('jenispenyakit');
            $table->foreign('id_jenisfaktor')->references('id')->on('jenisfaktor');
            $table->foreign('id_jenisristi')->references('id')->on('jenisristi');
            $table->foreign('id_periksabumil')->references('id')->on('periksabumil');
            $table->foreign('id_no_index_infobumil')->references('no_index_infobumil')->on('infoawalbumil');


         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('databumil');
    }
};
