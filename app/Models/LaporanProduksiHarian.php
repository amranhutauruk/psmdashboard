<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanProduksiHarian extends Model
{
    use HasFactory;
    protected $table = 'laporan_produksi_harian';
    protected $fillable = ['file'];
}
