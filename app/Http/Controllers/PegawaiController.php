<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;
use App\Models\Nasabah;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function dashboard()
    {
        $totalnasabah = Nasabah::count();
        return view('pegawai.dashboard', compact('totalnasabah'));
    }
    public function perhitungankoin()
    {
        return view('pegawai.perhitungankoin');
    }
    public function transaksiHarian(Request $request)
    {
        // Ambil tanggal dari request atau gunakan tanggal hari ini
        $tanggal = $request->input('tanggal', now()->format('Y-m-d'));

        // Query untuk mengambil data transaksi harian berdasarkan tanggal_transaksi
        $transaksiHarian = DB::table('transaksi')
            ->select('Id_transaksi', 'Id_nasabah', 'tipe_transaksi', 'jumlah_transaksi', 'tanggal_transaksi')
            ->whereDate('tanggal_transaksi', $tanggal)
            ->get();

        // Mengirim data ke view
        return view('pegawai.transaksiharian', ['transaksiHarian' => $transaksiHarian, 'tanggal' => $tanggal]);
    }
    public function riwayatTransaksi()
    {
        // Query untuk mengambil semua data transaksi
        $riwayatTransaksi = DB::table('transaksi')
            ->select('Id_transaksi', 'Id_nasabah', 'tipe_transaksi', 'jumlah_transaksi', 'tanggal_transaksi')
            ->orderBy('tanggal_transaksi', 'desc')  // Urutkan berdasarkan tanggal transaksi terbaru
            ->get();

        // Mengirim data ke view
        return view('pegawai.riwayattransaksi', ['riwayatTransaksi' => $riwayatTransaksi]);
    }
    public function nasabah()
    {
        $nasabah = Nasabah::all();
        $totalnasabah = $nasabah->count();
        return view('pegawai.datanasabah', compact('nasabah', 'totalnasabah'));
    }
    public function pegawai()
    {
        $pegawai = Pegawai::all();
        $totalpegawai = $pegawai->count();
        return view('admin.datapegawai', compact('pegawai', 'totalpegawai'));
    }
    public function pegawaitambah()
    {
        return view('admin.datapegawai');
    }
    public function tambah(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pegawai' => 'required|string|max:255',
            'tahun_masuk' => 'required|digits:4|integer',
            'alamat' => 'required|string|max:255',
        ]);
        $pegawai = new Pegawai();
        $pegawai->nama_pegawai = $request->input('nama_pegawai');
        $pegawai->tahun_masuk = $request->input('tahun_masuk');
        $pegawai->alamat = $request->input('alamat');
        $pegawai->save();
        return redirect()->route('admin.datapegawai')->with('success', 'Data pegawai berhasil ditambahkan');
    }
    public function editpegawai($Id_pegawai)
    {
        $pegawai = Pegawai::findOrFail($Id_pegawai);
        return view('editpegawai', compact('pegawai'));
    }
    public function updatepegawai(Request $request, $Id_pegawai)
    {
        $validatedData = $request->validate([
            'nama_pegawai' => 'required|string|max:255',
            'tahun_masuk' => 'required|digits:4|integer',
            'alamat' => 'required|string|max:255',
        ]);

        $pegawai = Pegawai::findOrFail($Id_pegawai);
        $pegawai->update($validatedData);
        return back()->with('success', 'Data pegawai berhasil diperbarui!');
    }
    public function hapuspegawai($Id_pegawai)
    {
        $pegawai = Pegawai::where('Id_pegawai', $Id_pegawai)->first();

        if (!$pegawai) {
            return back()->with('error', 'Data pegawai tidak ditemukan!');
        }

        $pegawai->delete();

        return back()->with('success', 'Data Pegawai berhasil dihapus!');
    }
    public function profile()
    {
        $user = User::find(auth()->id());
        return view('pegawai.profile', compact('user'));
    }

}
