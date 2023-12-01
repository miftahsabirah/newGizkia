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
            $table->string('no_index_infobumil')->primary();
            $table->string('kode_posyandu');
            $table->date('tgl_informasi');
            $table->string('nama');
            $table->string('suami');
            $table->string('alamat');
            $table->string('user_id_pelapor');
            $table->string('verifikasi');
            $table->decimal('lat');
            $table->decimal('lng');
            $table->string('no_telepon');

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
