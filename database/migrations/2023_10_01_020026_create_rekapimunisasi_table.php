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
        Schema::create('rekapimunisasi', function (Blueprint $table) {
            $table->id();
            $table->date('bcg')->nullable();
            $table->date('dpt_1')->nullable();
            $table->date('dpt_2')->nullable();
            $table->date('dpt_3')->nullable();
            $table->date('polio_1')->nullable();
            $table->date('polio_2')->nullable();
            $table->date('polio_3')->nullable();
            $table->date('ipv')->nullable();
            $table->date('campak')->nullable();
            $table->date('boosterpentavalen')->nullable();
            $table->date('boostercampak')->nullable();
            $table->date('hepatitis_0')->nullable();
            $table->date('hepatitis_1')->nullable();
            $table->date('hepatitis_2')->nullable();
            $table->date('hepatitis_3')->nullable();
            $table->date('noe_natal_1')->nullable();
            $table->date('noe_natal_2')->nullable();
            $table->date('noe_natal_3')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekapimunisasi');
    }
};
