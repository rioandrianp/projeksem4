<?php

namespace App\Http\Controllers;
use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function perhitungankoin()
    {
        $laporan = Laporan::all();

        return view('pegawai.perhitungankoin', compact('laporan'));
    }
}
