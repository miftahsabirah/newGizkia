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
        Schema::create('datadesa', function (Blueprint $table) {
            $table->string('kode_desa', 11)->primary();
            $table->string('kode_kecamatan', 2);
            $table->string('desa', 25);
            $table->integer('wilayah');
            $table->integer('jumlah_dusun');
            $table->integer('luas');
            $table->double('penduduk');
            $table->string('kode_pkm', 2);

            $table->foreign('kode_kecamatan')->references('kode_kecamatan')->on('datakecamatan');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datadesa');
    }
};
