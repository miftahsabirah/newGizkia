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
            $table->date('bcg');
            $table->date('dpt_1');
            $table->date('dpt_2');
            $table->date('dpt_3');
            $table->date('polio_1');
            $table->date('polio_2');
            $table->date('polio_3');
            $table->date('ipv');
            $table->date('campak'); 
            $table->date('boosterpentavalen');
            $table->date('boostercampak');
            $table->date('hepatitis_0');
            $table->date('hepatitis_1');
            $table->date('hepatitis_2');
            $table->date('hepatitis_3');
            $table->date('noe_natal_1');
            $table->date('noe_natal_2');
            $table->date('noe_natal_3');
            
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
