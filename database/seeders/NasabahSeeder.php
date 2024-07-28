<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nasabah;

class NasabahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat data nasabah menggunakan metode create
        Nasabah::create([
            'nama_nasabah' => 'Alice',
            'alamat' => 'Jl. Contoh No. 123',
            'gender' => 'P', // Perempuan
            'no_hp' => '08123456789',
        ]);

        Nasabah::create([
            'nama_nasabah' => 'Bob',
            'alamat' => 'Jl. Contoh No. 456',
            'gender' => 'L', // Laki-laki
            'no_hp' => '087654321',
        ]);

        // Tambahkan data nasabah lain jika diperlukan
    }
}
