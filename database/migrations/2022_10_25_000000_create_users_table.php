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
            $table->string('nip');
            $table->string('nama');
            $table->string('telepon');
            $table->string('username');
            $table->string('password');
            $table->string('kode_pkm');
            $table->enum('jenis_petugas',['bidan', 'dokter']);
            $table->string('email');
            $table->string('pwd');
            $table->enum('role_id', ['super admin','admin', 'petugas']);
            $table->enum('status', ['diterima ','proses', 'ditolak']);
            $table->dateTime('last_login')->nullable();
            $table->integer('login_count')->nullable();
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
