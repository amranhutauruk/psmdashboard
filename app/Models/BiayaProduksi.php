<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaProduksi extends Model
{
    use HasFactory;
    protected $table = 'biaya_produksi'; // Sesuaikan dengan nama tabel di database
    protected $fillable = ['file']; // Kolom yang bisa diisi
}
