<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaEksploitasi extends Model
{
    use HasFactory;
    protected $table = 'biaya_eksploitasi';
    protected $fillable = ['file'];
}
