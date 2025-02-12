<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $table = 'paket';

    protected $fillable = [
        'nama',
        'gambar_paket',
        'id_layanan',
        'fitur',
        'harga',
        'durasi_pengerjaan',
    ];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan');
    }
}