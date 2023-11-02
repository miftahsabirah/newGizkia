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
            $table->string('jenis_periksa', 2);
            $table->string('tempat_periksa', 10);
            $table->tinyInteger('luar_gedung');
            $table->string('kode_petugas', 10);
            $table->tinyInteger('umur_kehamilan');
            $table->string('keluhan', 50);
            $table->double('lila', 6, 2);
            $table->tinyInteger('sistole');
            $table->tinyInteger('diastole');
            $table->double('hb', 6, 2);
            $table->double('berad_badan', 6, 2);
            $table->double('tinggi_fundus', 6, 2);
            $table->tinyInteger('jumlah_janin');
            $table->string('letak_janin', 1);
            $table->string('posisi_janin', 1);
            $table->double('denyut_janin');
            $table->string('lab', 2);
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
            $table->string('posisitbj', 1);
            $table->double('tbj', 6, 2);
            $table->string('kodefe', 2);
            $table->smallInteger('jumlahfe');
            $table->tinyInteger('obatcacing');
            $table->tinyInteger('tt4');
            $table->tinyInteger('tt5');
            $table->tinyInteger('hbsag');
            $table->tinyInteger('rapid_test');
            $table->string('protein_urine', 1);
            $table->smallInteger('gds');
            $table->tinyInteger('ims');
            $table->string('nama', 20);
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
