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
        Schema::create('rekapbalita', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('umur_bayi_meniggal')->nullable();
            $table->string('tempat_bayi_meniggal')->nullable();
            $table->string('penyebab_bayi_meniggal')->nullable();
            $table->string('meniggal')->nullable();
            $table->date('tanggal_meniggal')->nullable();
            $table->string('gizi_buruk')->nullable();
            $table->float('berat_bayi')->nullable();
            $table->float('linkar_kepala')->nullable();
            $table->string('pindah')->nullable();
            $table->date('tanggal_pindah')->nullable();
            $table->string('status_tumbuh_kembang')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekapbalita');
    }
};
