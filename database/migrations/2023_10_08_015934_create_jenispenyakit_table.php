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
            $table->tinyInteger('jantung')->default(1)->nullable();
            $table->tinyInteger('diabetes')->default(1)->nullable();
            $table->tinyInteger('paru_paru')->default(1)->nullable();
            $table->tinyInteger('ginjal')->default(1)->nullable();
            $table->tinyInteger('hati')->default(1)->nullable();
            $table->tinyInteger('kurang_darah')->default(1)->nullable();
            $table->tinyInteger('malaria')->default(1)->nullable();
            $table->tinyInteger('asma')->default(1)->nullable();
            $table->tinyInteger('tbc')->default(1)->nullable();
            $table->tinyInteger('epilepsi')->default(1)->nullable();
            $table->tinyInteger('jiwa')->default(1)->nullable();
            $table->tinyInteger('pms')->default(1)->nullable();
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
