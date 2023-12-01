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
        Schema::create('databayipeta', function (Blueprint $table) {
            $table->string('id_data_bayipeta')->primary();
            $table->string('no_index_balita');
            $table->string('lat');
            $table->string('lng');
            $table->string('ket_stunting');
            $table->string('nip');
            $table->string('ket_gibur');

            $table->foreign('no_index_balita')->references('no_index_balita')->on('databayi');
   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('databayipeta');
    }
};
