<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan'; // Nama tabel dalam database

    protected $primaryKey = 'Id_laporan'; // Nama primary key

    protected $fillable = [
        'tanggal',
        'jam',
        'nama_pegawai',
        'nama_nasabah',
        'jumlah_koin_100',
        'jumlah_koin_200',
        'jumlah_koin_500',
        'jumlah_koin_1000',
        'jumlah_rupiah',
    ];

    // Relasi dengan tabel Pegawai
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'nama_pegawai', 'Id_pegawai');
    }

    // Relasi dengan tabel Nasabah
    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class, 'nama_nasabah', 'Id_nasabah');
    }
}
