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
        Schema::create('ringkasan_kondisi', function (Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->string('pasien_id', 50);
            $table->foreign('pasien_id')->references('id')->on('pasien')->onDelete('cascade');
            // $table->date('tanggal_masuk');
            // $table->time('jam');
            $table->json('keadaan_pasien');
            $table->enum('tindak_lanjut_asuhan', ['Preventif', 'Kuratif', 'Paliatif', 'Rehabilitatif']);
            $table->json('cara_keluar');
            $table->enum('kondisi_keluar', ['Sembuh', 'Membaik', 'Belum Sembuh', 'Meninggal']);
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
        Schema::dropIfExists('ringkasan_kondisi');
    }
};
