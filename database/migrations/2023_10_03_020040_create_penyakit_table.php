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
        Schema::create('penyakit', function (Blueprint $table) {
            $table->bigIncrements('id'); // Kolom 'id' adalah primary key
            $table->integer('asfiksia')->nullable();
            $table->integer('hipotermi')->nullable();
            $table->integer('infeksi')->nullable();
            $table->integer('tetanus')->nullable();
            $table->integer('bblr')->nullable();
            $table->integer('komplikasi_lain')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyakit');
    }
};
