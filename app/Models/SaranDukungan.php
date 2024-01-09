<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaranDukungan extends Model
{
    use HasFactory;

    protected $table = 'saran_dukungan';

    protected $fillable = [
        'saran',
        'dukungan'
    ];
}
