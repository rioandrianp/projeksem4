<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelAutoTransaksi extends Model
{
    use HasFactory;

    protected $table = 'tabel_auto_transaksi';

    protected $primaryKey = 'Id_auto';

    protected $fillable = [
        'id_rekening',
        'tipe_transaksi',
        'penerima_transaksi',
        'jumlah_transaksi',
        'tanggal_transaksi',
        'status_transaksi',
    ];

    protected $casts = [
        'jumlah_transaksi' => 'decimal:2',
        'tanggal_transaksi' => 'date',
    ];

    public function rekening()
    {
        return $this->belongsTo(Rekening::class, 'id_rekening');
    }

    public function penerima()
    {
        return $this->belongsTo(Penerima::class, 'penerima_transaksi');
    }
}
