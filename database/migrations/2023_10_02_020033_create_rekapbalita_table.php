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
            $table->string('umur_bayi_meniggal', 2)->nullable();
            $table->string('tempat_bayi_meniggal', 2)->nullable();
            $table->string('penyebab_bayi_meniggal', 2)->nullable();
            $table->string('meniggal', 1)->nullable();
            $table->date('tanggal_meniggal')->nullable();
            $table->string('gizi_buruk', 1)->nullable();
            $table->float('berat_bayi', 6, 2)->nullable();
            $table->float('linkar_kepala', 6, 2)->nullable();
            $table->string('pindah', 1)->nullable();
            $table->date('tanggal_pindah')->nullable();
            $table->string('status_tumbuh_kembang', 2)->nullable();
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
