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
        Schema::create('pasien', function (Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->string('nomor_rm', 50);
            $table->char('nik', 16);
            $table->string('nama', 100);
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir', 100);
            $table->string('alamat', 100);
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->char('nomor_telp', 16)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasien');
    }
};
