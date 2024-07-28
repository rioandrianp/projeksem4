<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    use HasFactory;
    protected $table = 'nasabah'; // Nama tabel dalam database
    protected $primaryKey = 'Id_nasabah'; // Nama primary key
    protected $fillable = [
        'nama_nasabah',
        'alamat',
        'gender',
        'no_hp',
    ];

    // Relasi dengan tabel Laporan
    public function laporans()
    {
        return $this->hasMany(Laporan::class, 'nama_nasabah', 'Id_nasabah');
    }
}
