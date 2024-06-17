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
        Schema::create('triase', function (Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->string('pasien_id', 50);
            $table->foreign('pasien_id')->references('id')->on('pasien')->onDelete('cascade');
            $table->json('cara_datang');
            $table->json('transportasi');
            $table->enum('jenis_kasus', ['Trauma', 'Non Trauma']);
            $table->date('tanggal');
            $table->time('jam');
            $table->text('keluhan_utama');
            $table->enum('respon', ['Alert', 'Verbal', 'Pain', 'Unrespon']);
            $table->enum('airway', ['Bebas', 'Gurgling', 'Stridor', 'Wheezing', 'Ronchi', 'Terintubasi']);
            $table->enum('breathing', ['Spontan', 'Tachipneu', 'Dispneu', 'Apneu', 'Ventilasi Mekanik', 'Memakai BVM']);
            $table->json('circulation');
            $table->json('disability');
            $table->enum('kategori', ['Gawat Darurat', 'Gawat Tidak Darurat', 'Tidak Gawat Tidak Darurat', 'Meninggal']);
            $table->string('dokumen');
            $table->string('dokter_id', 50);
            $table->foreign('dokter_id')->references('id')->on('dokter')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('triase');
    }
};
