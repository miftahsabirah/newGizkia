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
            $table->string('umur_bayi_meniggal', 2);
            $table->string('tempat_bayi_meniggal', 2);
            $table->string('penyebab_bayi_meniggal', 2);
            $table->string('meniggal', 1); // Sesuaikan panjang tipe data
            $table->date('tanggal_meniggal');
            $table->string('gizi_buruk', 1); // Hilangkan atribut auto_increment
            $table->float('berat_bayi', 6, 2);
            $table->float('linkar_kepala', 6, 2);
            $table->string('pindah', 1); // Hilangkan atribut auto_increment
            $table->date('tanggal_pindah');
            $table->string('status_tumbuh_kembang', 2);
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
