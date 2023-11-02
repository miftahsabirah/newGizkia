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
        Schema::create('posyandu', function (Blueprint $table) {
            $table->string('kode_posyandu', 10)->primary();
            $table->string('kode_desa', 11);
            $table->string('kode_dusun', 14);
            $table->string('posyandu', 20);
            $table->string('kode_bidan', 21);
            $table->integer('jumlah_kader');
            $table->string('jenis', 2);

            $table->foreign('kode_desa')->references('kode_desa')->on('datadesa');
            $table->foreign('kode_dusun')->references('kode_dusun')->on('datadusun');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posyandu');
    }
};
