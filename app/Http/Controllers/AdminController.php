<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Nasabah;
use App\Models\Pegawai;
use App\Models\User;


class AdminController extends Controller
{
    /**
     * Menampilkan halaman data admin.
     */
    public function admin()
    {
        $admin = Admin::all();
        $totaladmin = $admin->count();
        return view('admin.dataadmin', compact('admin', 'totaladmin'));
    }

    /**
     * Menampilkan halaman dashboard.
     */
    // public function dashboard()
    // {
    //     return view('admin.dashboard');
    // }

    /**
     * Menampilkan form untuk menambahkan data admin.
     */
    public function dashboard()
    {
        $totalpegawai = Pegawai::count();
        $totalnasabah = Nasabah::count();
        return view('admin.dashboard', compact('totalnasabah', 'totalpegawai'));
    }
    public function profile()
    {
        $user = User::find(auth()->id());
        return view('admin.profile', compact('user'));
    }

 }
