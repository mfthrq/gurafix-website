<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanan';

    protected $fillable = [
        'id_pelanggan',
        'id_layanan',
        'id_paket',
        'pelanggan_referensi_desain',
        'pelanggan_brief',
        'tanggal_pemesanan',
        'status',
        'link_desain',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(User::class, 'id_pelanggan')->where('id_role', 2);
    }

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan');
    }

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'id_paket');
    }
}

