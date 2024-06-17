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
        Schema::create('catatan_edukasi', function (Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->string('pasien_id', 50);
            $table->foreign('pasien_id')->references('id')->on('pasien')->onDelete('cascade');
            $table->string('dokter_id', 50);
            $table->foreign('dokter_id')->references('id')->on('dokter')->onDelete('cascade');
            $table->json('data_edukasi');
            $table->string('dokumen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catatan_edukasi');
    }
};
