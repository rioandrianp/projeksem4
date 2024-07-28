<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Laporan;
use App\Models\Pegawai;
use App\Models\Nasabah;
use Carbon\Carbon;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil semua pegawai dan nasabah
        $pegawais = Pegawai::all();
        $nasabahs = Nasabah::all();

        // Loop untuk membuat data laporan
        foreach ($pegawais as $pegawai) {
            foreach ($nasabahs as $nasabah) {
                Laporan::create([
                    'tanggal' => Carbon::now(),
                    'jam' => Carbon::now()->format('H:i:s'),
                    'nama_pegawai' => $pegawai->Id_pegawai,
                    'nama_nasabah' => $nasabah->Id_nasabah,
                    'jumlah_koin_100' => rand(0, 10),
                    'jumlah_koin_200' => rand(0, 10),
                    'jumlah_koin_500' => rand(0, 10),
                    'jumlah_koin_1000' => rand(0, 10),
                    'jumlah_rupiah' => rand(100000, 1000000),
                ]);
            }
        }
    }
}
