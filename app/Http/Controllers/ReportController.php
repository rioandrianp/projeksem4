<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TabelAutoTransaksi;
use App\Models\Laporan;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function index()
    {
        $laporan = [];
        return view('admin.pencarianlaporan');
    }

    // Method untuk mencari laporan berdasarkan tanggal
    public function cariLaporan(Request $request)
    {
        $tanggal = $request->input('tanggal');
        $laporan = Laporan::where('tanggal', $tanggal)->get();

        return view('admin.pencarianlaporan', compact('laporan'));
    }
}
