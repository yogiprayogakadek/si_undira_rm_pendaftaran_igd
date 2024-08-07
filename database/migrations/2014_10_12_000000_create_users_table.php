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
            $table->string('id', 50)->primary();
            $table->string('nama', 100);
            $table->string('username', 20);
            $table->string('password', 100);
            $table->char('nomor_telp', 16);
            $table->enum('level', ['Kepala RM', 'Staff RM']);
            $table->boolean('status')->default(true)->comment('Status pengguna, true = aktif, false = tidak aktif');
            $table->timestamps();
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
