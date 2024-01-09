<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';

    protected $fillable = [
        'gambar',
        'lokasi_id',
        'nama_acara',
        'tanggal',
        'kategori',
    ];

    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class, 'lokasi_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
