<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rekening;
use App\Models\Nasabah;
use Carbon\Carbon;

class RekeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil semua nasabah
        $nasabahs = Nasabah::all();

        // Loop untuk membuat data rekening
        foreach ($nasabahs as $nasabah) {
            Rekening::create([
                'id_nasabah' => $nasabah->Id_nasabah,
                'nomor_akun' => 'ACC' . str_pad($nasabah->Id_nasabah, 5, '0', STR_PAD_LEFT),
                'jumlah_tabungan' => rand(1000, 10000),
                'tanggal_buat' => Carbon::now(),
                'tanggal_update' => Carbon::now(),
            ]);
        }
    }
}
