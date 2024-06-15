<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    protected $table = 'event';
    protected $primaryKey = 'id';
    protected $fillable = [
        'namaEvent',
        'bintangTamu',
        'tgl',
        'tempat',
        'waktu',
        'jumlahTiket',
        'harga',
        'gambar',
        'deskripsi',
    ];
}
