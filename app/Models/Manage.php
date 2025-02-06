<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manage extends Model
{
    use HasFactory;

    protected $table = 'laporan_performa';

    protected $fillable = [
        'tanggal',
        'jenis',
        'tipe',
        'justifikasi',
        'deskripsi',
        'durasi',
        'catatan_koreksi',
        'lokasi',
        'id_talent'
    ];
}

