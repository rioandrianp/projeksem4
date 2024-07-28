<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->name = "admin";
        $user->email = "admin1@gmail.com";
        $user->password = bcrypt('12');
        $user->role = 1;
        $user->save();

        $userpegawai = new User;
        $userpegawai->name = "pegawai";
        $userpegawai->email = "pegawai@gmail.com";
        $userpegawai->password = bcrypt('12');
        $userpegawai->role = 2;
        $userpegawai->save();

        $usernasabah = new User;
        $usernasabah->name = "nasabah";
        $usernasabah->email = "nasabah@gmail.com";
        $usernasabah->password = bcrypt('12');
        $usernasabah->role = 3;
        $usernasabah->save();

        $user = new User;
        $user->name = "Irman G";
        $user->email = "irma12n@gmail.com";
        $user->password = bcrypt('12');
        $user->role = 1;
        $user->save();

        $userpegawai = new User;
        $userpegawai->name = "Rio A";
        $userpegawai->email = "rio12@gmail.com";
        $userpegawai->password = bcrypt('12');
        $userpegawai->role = 2;
        $userpegawai->save();

        $usernasabah = new User;
        $usernasabah->name = "Variel";
        $usernasabah->email = "variel12@gmail.com";
        $usernasabah->password = bcrypt('12');
        $usernasabah->role = 3;
        $usernasabah->save();

    }
}
