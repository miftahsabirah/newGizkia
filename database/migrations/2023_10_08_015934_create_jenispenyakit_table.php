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
        Schema::create('jenispenyakit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('jantung')->default(1);
            $table->tinyInteger('diabetes')->default(1);
            $table->tinyInteger('paru_paru')->default(1);
            $table->tinyInteger('ginjal')->default(1);
            $table->tinyInteger('hati')->default(1);
            $table->tinyInteger('kurang_darah')->default(1);
            $table->tinyInteger('malaria')->default(1);
            $table->tinyInteger('asma')->default(1);
            $table->tinyInteger('tbc')->default(1);
            $table->tinyInteger('epilepsi')->default(1);
            $table->tinyInteger('jiwa')->default(1);
            $table->tinyInteger('pms')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenispenyakit');
    }
};
