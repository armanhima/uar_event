<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiket extends Model
{
    use HasFactory;
    
    protected $table = 'event';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'telp',
        'nik',
        'namaEvent',
        'tgl',
        'tempat',
        'waktu'
    ];
}
