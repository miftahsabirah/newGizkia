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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nip_petugas', 21);
            $table->string('id_admind', 11);
            $table->string('kode_desa', 11);
            $table->integer('group_id'); 
            $table->string('username', 100);
            $table->string('pwd', 225);
            $table->string('nama', 100);
            $table->string('jabatan', 100);
            $table->string('email', 100);
            $table->string('photo', 100);
            $table->dateTime('last_login');
            $table->integer('login_count');

            $table->foreign('nip_petugas')->references('nip')->on('petugas');
            $table->foreign('id_admind')->references('id_admind')->on('admind');
            $table->foreign('kode_desa')->references('kode_desa')->on('datadesa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
