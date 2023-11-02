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
        Schema::create('databumilpeta', function (Blueprint $table) {
            $table->string('id_data_bumil', 18)->primary();
            $table->string('no_index_bumil', 18);
            $table->string('statusristi', 20);
            $table->string('hpl', 10);
            $table->string('nip', 21);
            $table->foreign('no_index_bumil')->references('no_index_bumil')->on('databumil');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('databumilpeta');
    }
};
