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
        Schema::create('jenisristi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('resiko1')->default(1)->nullable();
            $table->tinyInteger('resiko2')->default(1)->nullable();
            $table->tinyInteger('resiko3')->default(1)->nullable();
            $table->tinyInteger('resiko4')->default(1)->nullable();
            $table->tinyInteger('resiko5')->default(1)->nullable();
            $table->tinyInteger('resiko6')->default(1)->nullable();
            $table->tinyInteger('resiko7')->default(1)->nullable();
            $table->tinyInteger('resiko8')->default(1)->nullable();
            $table->tinyInteger('resiko9')->default(1)->nullable();
            $table->tinyInteger('resiko10')->default(1)->nullable();
            $table->tinyInteger('resiko11')->default(1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenisristi');
    }
};
