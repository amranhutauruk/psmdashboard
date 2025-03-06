<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurahHujan extends Model
{
    use HasFactory;
    protected $table = 'curah_hujan'; // Sesuaikan dengan nama tabel di database
    protected $fillable = ['file']; // Kolom yang bisa diisi
}
