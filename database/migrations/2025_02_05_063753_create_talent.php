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
        Schema::create('talent', function (Blueprint $table) {
            $table->id('id_talent');
            $table->string('nama_lengkap');
            $table->string('email');
            $table->string('no_telepon');
            $table->date('tanggal_lahir');
            $table->string('pendidikan_terakhir');
            $table->string('nama_institusi');
            $table->string('fakultas');
            $table->string('keahlian');
            $table->string('status_kandidat');
            $table->string('gaji_harapan');
            $table->string('file_cv');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('talent');
    }
};
