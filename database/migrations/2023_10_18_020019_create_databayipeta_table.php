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
            $table->string('id_data_bayipeta', 18)->primary();
            $table->string('no_index_balita', 18);
            $table->string('lat', 20);
            $table->string('lng', 20);
            $table->string('ket_stunting', 20);
            $table->string('nip', 21);
            $table->string('ket_gibur', 20);

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
