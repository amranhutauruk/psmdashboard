<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonaliaDanPenduduk extends Model
{
    use HasFactory;
    protected $table = 'personalia_dan_penduduk';
    protected $fillable = ['file'];
}
