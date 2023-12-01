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
        Schema::create('datadusun', function (Blueprint $table) {
            $table->string('kode_dusun')->primary();
            $table->string('nama');
            $table->string('dusun');
            $table->integer('jumlah_penduduk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datadusun');
    }
};
