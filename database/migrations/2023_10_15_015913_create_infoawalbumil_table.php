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
        Schema::create('infoawalbumil', function (Blueprint $table) {
            $table->string('no_indek_infobumil', 18)->primary();
            $table->string('kode_posyandu', 18);
            $table->date('tgl_informasi');
            $table->string('nama', 20);
            $table->string('suami', 20);
            $table->string('alamat', 20);
            $table->string('user_id_pelapor', 20);
            $table->string('verifikasi', 1);
            $table->decimal('lat', 10,7);
            $table->decimal('lng', 10, 7);
            $table->string('no_telepon', 20);

            $table->foreign('kode_posyandu')->references('kode_posyandu')->on('posyandu');
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infoawalbumil');
    }
};
