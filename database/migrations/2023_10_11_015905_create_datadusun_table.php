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
            $table->string('kode_dusun', 14)->primary();
            $table->string('nama', 40);
            $table->string('dusun', 25);
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
