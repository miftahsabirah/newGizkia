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
        Schema::create('periksabumil', function (Blueprint $table) {
            $table->bigIncrements('id'); // Kolom 'id' adalah primary key
            $table->date('tanggal_periksa');
            $table->string('jenis_periksa');
            $table->string('tempat_periksa');
            $table->tinyInteger('luar_gedung');
            $table->string('kode_petugas');
            $table->tinyInteger('umur_kehamilan');
            $table->string('keluhan');
            $table->double('lila');
            $table->tinyInteger('sistole');
            $table->tinyInteger('diastole');
            $table->double('hb');
            $table->double('berad_badan');
            $table->double('tinggi_fundus');
            $table->tinyInteger('jumlah_janin');
            $table->string('letak_janin');
            $table->string('posisi_janin');
            $table->double('denyut_janin');
            $table->string('lab');
            $table->tinyInteger('yodium');
            $table->tinyInteger('tindakan_fe');
            $table->tinyInteger('fe1');
            $table->tinyInteger('fe2');
            $table->tinyInteger('fe3');
            $table->tinyInteger('tindakan_tt');
            $table->tinyInteger('tt1');
            $table->tinyInteger('tt2');
            $table->tinyInteger('tt3');
            $table->tinyInteger('dirujuk');
            $table->string('posisitbj');
            $table->double('tbj');
            $table->string('kodefe');
            $table->smallInteger('jumlahfe');
            $table->tinyInteger('obatcacing');
            $table->tinyInteger('tt4');
            $table->tinyInteger('tt5');
            $table->tinyInteger('hbsag');
            $table->tinyInteger('rapid_test');
            $table->string('protein_urine');
            $table->smallInteger('gds');
            $table->tinyInteger('ims');
            $table->string('nama');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periksabumil');
    }
};
