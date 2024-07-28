<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $primaryKey = 'Id_transaksi';

    protected $fillable = [
        'Id_nasabah',
        'tipe_transaksi',
        'jumlah_transaksi',
        'tanggal_transaksi',
    ];

    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class, 'Id_nasabah');
    }
}
