<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    use HasFactory;
    protected $table = 'rekening'; // Nama tabel dalam database
    protected $primaryKey = 'Id_rekening'; // Nama primary key
    protected $fillable = [
        'id_nasabah',
        'nomor_akun',
        'jumlah_tabungan',
        'tanggal_buat',
        'tanggal_update',
    ];

    // Relasi dengan tabel Nasabah
    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class, 'id_nasabah', 'Id_nasabah');
    }
}
