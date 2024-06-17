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
        Schema::create('asesmen', function (Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->string('pasien_id', 50);
            $table->foreign('pasien_id')->references('id')->on('pasien')->onDelete('cascade');
            $table->date('tanggal');
            $table->json('rujukan');
            $table->time('jam_kedatangan');
            $table->time('waktu_pengkajian');
            $table->json('riwayat_alergi');
            $table->json('tanda_vital');
            $table->text('anamnesis');
            $table->text('riwayat_penyakit');
            $table->text('riwayat_pengobatan');
            $table->json('kesadaran');
            $table->json('nyeri');
            $table->json('pemeriksaan_fisik');
            $table->text('hasil_pemeriksaan_penunjang');
            $table->text('diagnosis');
            $table->text('rencana_tindakan');
            $table->text('rencana_terapi');
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
        Schema::dropIfExists('asesmen');
    }
};
