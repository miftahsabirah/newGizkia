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
            $table->integer('asfiksia');
            $table->integer('hipotermi');
            $table->integer('infeksi');
            $table->integer('tetanus');
            $table->integer('bblr');
            $table->integer('komplikasi_lain');
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
