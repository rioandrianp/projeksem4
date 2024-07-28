<?php

namespace App\Http\Controllers;
use App\Models\Nasabah;
use App\Models\User;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;



class NasabahController extends Controller
{
    public function dashboard()
    {
        // $totalsaldo = Saldo::count();
        return view('nasabah.dashboard');
    }
    public function nasabah()
    {
        $nasabah = Nasabah::all();
        $totalnasabah = $nasabah->count();
        return view('admin.datanasabah', compact('nasabah', 'totalnasabah'));
    }
    public function nasabahtambah()
    {
        return view('admin.datanasabah'); // Pastikan view ini ada dan benar
    }


    public function tambah(Request $request)
    {
        $validatedData = $request->validate([
            'nama_nasabah' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'gender' => 'required|in:L,P',
            'no_hp' => 'required|string|max:20',
        ]);

        $nasabah = new Nasabah();
        $nasabah->nama_nasabah = $request->input('nama_nasabah');
        $nasabah->alamat = $request->input('alamat');
        $nasabah->gender = $request->input('gender');
        $nasabah->no_hp = $request->input('no_hp');
        $nasabah->save();

        return redirect()->route('admin.datanasabah')->with('success', 'Data nasabah berhasil ditambahkan');
    }
    public function hapusnasabah($Id_nasabah)
    {
        $nasabah = Nasabah::where('Id_nasabah', $Id_nasabah)->first();

        if (!$nasabah) {
            return back()->with('error', 'Data nasabah tidak ditemukan!');
        }

        $nasabah->delete();

        return back()->with('success', 'Data nasabah berhasil dihapus!');
    }
    public function editnasabah($Id_nasabah)
    {
        $nasabah = Nasabah::findOrFail($Id_nasabah);
        return view('editnasabah', compact('nasabah'));
    }
    public function updatenasabah(Request $request, $Id_nasabah)
    {
        $validatedData = $request->validate([
            'nama_nasabah' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'gender' => 'required|in:L,P',
            'no_hp' => 'required|string|max:20',
        ]);

        $nasabah = Nasabah::findOrFail($Id_nasabah);
        $nasabah->update($validatedData);
        return back()->with('success', 'Data nasabah berhasil diperbarui!');
    }

    public function createTarikSaldo()
    {
        $saldo = auth()->user()->saldo;
        return view('nasabah.tariksaldo', compact('saldo'));
    }

    public function storeTarikSaldo(Request $request)
    {
        $validatedData = $request->validate([
            'jumlah' => 'required|numeric|min:0|max:' . auth()->user()->saldo,
        ]);
        auth()->user()->tarikSaldo($validatedData['jumlah']);
        return redirect()->back()->with('success', 'Saldo berhasil ditarik.');
    }

    public function createKirimSaldo()
    {
        return view('nasabah.kirimsaldo');
    }

    public function storeKirimSaldo(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'email' => 'required|email|exists:users,email',
            'jumlah' => 'required|numeric|min:0',
        ]);

        // Simpan data transaksi kirim saldo ke dalam database
        auth()->user()->kirimSaldo($validatedData['email'], $validatedData['jumlah']);

        return redirect()->back()->with('success', 'Saldo berhasil dikirim.');
    }
    public function riwayatTransaksi()
    {
        $riwayatTransaksi = Transaksi::all(); // Ambil semua data transaksi (sesuaikan dengan model dan logika Anda)

        return view('nasabah.riwayattransaksi', compact('riwayatTransaksi'));
    }
    public function profile()
    {
        $user = User::find(auth()->id());
        return view('nasabah.profile', compact('user'));
    }
}

