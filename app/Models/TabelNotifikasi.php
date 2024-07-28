<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelNotifikasi extends Model
{
    use HasFactory;

    protected $table = 'tabel_notifikasi';

    protected $primaryKey = 'Id_notif';

    protected $fillable = [
        'id_nasabah',
        'pesan',
        'is_read',
        'tanggal_buat',
    ];

    protected $casts = [
        'is_read' => 'boolean',
        'tanggal_buat' => 'datetime',
    ];

    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class, 'id_nasabah');
    }
}
