<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'nama_admin' => 'Admin1',
            'alamat' => 'Babakan Sirna',
            'gender' => 'L',
            'no_hp' => '08123456789',

        ]);

        Admin::create([
            'nama_admin' => 'Admin2',
            'alamat' => 'Babakan Sirna',
            'gender' => 'P',
            'no_hp' => '087654321',
        ]);

        // Tambahkan data admin lain jika diperlukan
    }
}
