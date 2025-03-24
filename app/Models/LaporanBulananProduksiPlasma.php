<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanBulananProduksiPlasma extends Model
{
    use HasFactory;
    // Tentukan nama tabel secara eksplisit
    protected $table = 'laporan_bulanan_produksi_plasmas';

    // Kolom yang dapat diisi (fillable)
    protected $fillable = [
        'year',
        'month',
        'budget',
        'realisasi',
        'persen',
    ];
}
