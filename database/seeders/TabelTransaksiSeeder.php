<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TabelTransaksi;

class TabelTransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksiData = [
            [
                'Id_nasabah' => 1, // Example foreign key, ensure this ID exists in 'nasabah' table
                'tipe_transaksi' => 'Deposit',
                'jumlah_transaksi' => 100000.00,
                'tanggal_transaksi' => '2023-06-21',
            ],
            [
                'Id_nasabah' => 2, // Example foreign key, ensure this ID exists in 'nasabah' table
                'tipe_transaksi' => 'Withdrawal',
                'jumlah_transaksi' => 50000.00,
                'tanggal_transaksi' => '2023-06-22',
            ],
        ];

        foreach ($transaksiData as $data) {
            TabelTransaksi::create($data);
        }
    }
}
