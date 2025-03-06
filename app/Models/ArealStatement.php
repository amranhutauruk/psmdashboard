<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArealStatement extends Model
{
    use HasFactory;
    protected $table = 'areal_statement';
    protected $fillable = ['file'];
}
