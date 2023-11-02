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
        Schema::create('admind', function (Blueprint $table) {
            $table->string('id_admind', 11)->primary();
            $table->string('kode', 2);
            $table->string('nama', 30);
            $table->string('telepon', 15);
            $table->string('jenis', 2);
            $table->string('kode_pkm', 8);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admind');
    }
};
