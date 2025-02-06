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
        Schema::create('perfmanage', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->enum('jenis', ['hadir', 'izin', 'sakit', 'spj', 'lembur', 'cuti', 'weekly_report']);
            $table->enum('tipe', ['kerja', 'libur']);
            $table->integer('durasi');
            $table->string('j_approval');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfmanage');
    }
};
