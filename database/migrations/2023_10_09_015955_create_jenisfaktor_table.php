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
        Schema::create('jenisfaktor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('faktor1')->default(1)->nullable();
            $table->tinyInteger('faktor2')->default(1)->nullable();
            $table->tinyInteger('faktor3')->default(1)->nullable();
            $table->tinyInteger('faktor4')->default(1)->nullable();
            $table->tinyInteger('faktor5')->default(1)->nullable();
            $table->tinyInteger('faktor6')->default(1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenisfaktor');
    }
};
