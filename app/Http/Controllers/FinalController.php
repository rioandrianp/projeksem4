<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FinalController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function admin()
    {
        return view('admin.index');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login'); // atau halaman lain yang Anda inginkan setelah logout
    }






}
