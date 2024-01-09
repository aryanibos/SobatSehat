<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';

    protected $fillable = [
        'judul',
        'isi',
        'gambar',
        'user_id',
        'kategori',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
