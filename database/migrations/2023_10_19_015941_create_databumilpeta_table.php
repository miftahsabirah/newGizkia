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
            $table->string('id_data_bumil')->primary();
            $table->string('no_index_bumil');
            $table->string('statusristi');
            $table->string('hpl');
            $table->string('nip');
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
