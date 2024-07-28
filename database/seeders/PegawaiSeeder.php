<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pegawai;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat data pegawai menggunakan metode create
        Pegawai::create([
            'nama_pegawai' => 'John Doe',
            'alamat' => 'Jl. Contoh No. 123',
            'tahun_masuk' => '2024-may-01',
        ]);

        Pegawai::create([
            'nama_pegawai' => 'Jane Doe',
            'alamat' => 'Jl. Contoh No. 456',
            'tahun_masuk' => '2024-may-01',
        ]);

        // Tambahkan data pegawai lain jika diperlukan
    }
}
