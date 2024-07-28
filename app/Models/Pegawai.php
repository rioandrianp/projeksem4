<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $primaryKey = 'Id_pegawai';
    protected $fillable = [
        'nama_pegawai',
        'alamat',
        'tahun_masuk',
    ];

}
