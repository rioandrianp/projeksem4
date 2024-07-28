<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
    public function logout()
{
    Auth::logout();
    return redirect('/login'); // atau halaman lain yang Anda inginkan setelah logout
}
protected function authenticated(Request $request, $user)
{
    if ($user->role=='1') {
        return redirect('/admin/dashboard');
    } elseif ($user->role=='2') {
        return redirect('/pegawai/dashboard');
    } elseif ($user->role=='3') {
        return redirect('/nasabah/dashboard');
    } else {
        return redirect('/login');
    }
}

}
