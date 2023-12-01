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
        Schema::create('databayi', function (Blueprint $table) {
            $table->string('no_index_balita')->primary();
            $table->string('kode_posyandu');
            $table->unsignedBigInteger('id_rekapimunisasi');
            $table->unsignedBigInteger('id_rekapbalita');
            $table->unsignedBigInteger('penyakit');
            $table->string('no_index');
            $table->integer('akte');
            $table->string('nokk');
            $table->string('nama_bayi');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('nama_ibu');
            $table->string('nama_ayah');
            $table->integer('gakin');
            $table->string('rt');
            $table->string('rw');
            $table->float('tb_terakhir');
            $table->float('bb_terakhir');
            $table->date('tanggal_timbang_terakhir');
            $table->tinyInteger('stunting');
            $table->tinyInteger('cekidl');
            $table->tinyInteger('cekbadutq');
            $table->string('status_bbu');
            $table->string('status_tbu');
            $table->string('status_bbtb');
            $table->date('tanggal_register');
            $table->string('kode_tempat');
            $table->string('alamat'); 
            $table->string('kode_wilayah');
            $table->string('dirujuk');
            $table->string('no_telepon_ortu');
            $table->string('kode_suku');
            $table->string('nik');
            $table->string('no_kartu');
            $table->string('nik_ibu');
            $table->string('anak_ke');
            $table->integer('hb024');
            $table->string('bayi_id');
            $table->string('bayi_kategori');
            $table->string('aktif');

            $table->foreign('kode_posyandu')->references('kode_posyandu')->on('posyandu');
            $table->foreign('id_rekapbalita')->references('id')->on('rekapbalita');
            $table->foreign('id_rekapimunisasi')->references('id')->on('rekapimunisasi');
            $table->foreign('penyakit')->references('id')->on('penyakit');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('databayi');
    }
};
