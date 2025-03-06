<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traksi extends Model
{
    use HasFactory;
    protected $table = 'traksi';
    protected $fillable = ['file'];
}
