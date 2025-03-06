<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanBulanan extends Model
{
    use HasFactory;

    protected $table = 'laporan_bulanan'; // Sesuaikan dengan nama tabel di database

    protected $fillable = ['file']; // Kolom yang bisa diisi
}
