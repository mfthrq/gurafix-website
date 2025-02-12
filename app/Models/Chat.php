<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $table = 'chat'; // Nama tabel di database

    protected $fillable = [
        'id_sender',
        'id_receiver',
        'message',
        'attachments',
    ];

    /**
     * Relasi ke User sebagai pengirim
     */
    public function sender()
    {
        return $this->belongsTo(User::class, 'id_sender');
    }

    /**
     * Relasi ke User sebagai penerima
     */
    public function receiver()
    {
        return $this->belongsTo(User::class, 'id_receiver');
    }
}
