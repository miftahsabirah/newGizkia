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
            $table->string('kode_posyandu', 18);
            $table->unsignedBigInteger('id_rekapimunisasi');
            $table->unsignedBigInteger('id_rekapbalita');
            $table->unsignedBigInteger('penyakit');
            $table->string('no_index', 10);
            $table->integer('akte');
            $table->string('nokk', 20);
            $table->string('nama_bayi', 30);
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin', 1);
            $table->string('nama_ibu', 30);
            $table->string('nama_ayah', 30);
            $table->integer('gakin');
            $table->string('rt', 4);
            $table->string('rw', 4);
            $table->float('tb_terakhir', 6, 2);
            $table->float('bb_terakhir', 6, 2);
            $table->date('tanggal_timbang_terakhir');
            $table->tinyInteger('stunting');
            $table->tinyInteger('cekidl');
            $table->tinyInteger('cekbadutq');
            $table->string('status_bbu', 1);
            $table->string('status_tbu', 1);
            $table->string('status_bbtb', 1);
            $table->date('tanggal_register');
            $table->string('kode_tempat', 2);
            $table->string('alamat', 50);
            $table->string('kode_wilayah', 10);
            $table->string('dirujuk', 2);
            $table->string('no_telepon_ortu', 15);
            $table->string('kode_suku', 4);
            $table->string('nik', 16);
            $table->string('no_kartu', 16);
            $table->string('nik_ibu', 20);
            $table->string('anak_ke', 2);
            $table->integer('hb024');
            $table->string('bayi_id', 20);
            $table->string('bayi_kategori', 10);
            $table->string('aktif', 20);

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
