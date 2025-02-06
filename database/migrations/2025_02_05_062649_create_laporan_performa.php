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
        Schema::create('laporan_performa', function (Blueprint $table) {
            $table->id('id_laporan');
            $table->integer('id_talent');
            $table->date('tanggal');
            $table->string('deskripsi');
            $table->integer('durasi');
            $table->enum('jenis', ['hadir', 'izin', 'sakit', 'spj', 'lembur', 'cuti', 'weekly_report']);
            $table->enum('tipe', ['kerja', 'libur']);
            $table->string('justifikasi');
            $table->string('status_persetujuan');
            $table->string('catatan_koreksi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_performa');
    }
};
