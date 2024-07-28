<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\FinalController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [FinalController::class, 'index'])->name('index');
});

Auth::routes();
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::post('/admin', [App\Http\Controllers\Auth\LoginController::class,'admin.index']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\AdminController;
Route::get('/admin/dataadmin', [AdminController::class, 'admin'])->name('admin.dataadmin');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/adminprofile', [AdminController::class, 'profile'])->name('adminprofile');

use App\Http\Controllers\PegawaiController;
Route::get('/pegawai/dashboard', [PegawaiController::class, 'dashboard'])->name('pegawai.dashboard');
Route::get('/admin/datapegawai', [PegawaiController::class, 'pegawai'])->name('admin.datapegawai');
Route::get('/admin/pegawai/buat', [PegawaiController::class, 'pegawaitambah'])->name('pegawai.buat');
Route::post('/admin/pegawai/tambah', [PegawaiController::class, 'tambah'])->name('pegawai.tambah');
Route::delete('/hapuspegawai/{Id_pegawai}', [PegawaiController::class, 'hapuspegawai'])->name('pegawai.hapus');
Route::get('/editpegawai/{Id_pegawai}', [PegawaiController::class, 'edit'])->name('editpegawai');
Route::put('/updatepegawai/{Id_pegawai}', [PegawaiController::class, 'updatepegawai'])->name('updatepegawai');
Route::get('/pegawai/dashboard', [PegawaiController::class, 'dashboard'])->name('pegawai.dashboard');
Route::get('/pegawai/perhitungankoin', [PegawaiController::class, 'perhitungankoin'])->name('pegawai.perhitungankoin');
Route::get('/pegawai/transaksiharian', [PegawaiController::class, 'transaksiharian'])->name('pegawai.transaksiharian');
Route::get('/pegawai/riwayattransaksi', [PegawaiController::class, 'riwayattransaksi'])->name('pegawai.riwayattransaksi');
Route::get('/pegawai/datanasabah', [PegawaiController::class, 'nasabah'])->name('pegawai.datanasabah');
Route::get('/pegawaiprofile', [PegawaiController::class, 'profile'])->name('pegawaiprofile');
use App\Http\Controllers\NasabahController;
Route::get('/nasabah/dashboard', [NasabahController::class, 'dashboard'])->name('nasabah.dashboard');
Route::get('/admin/datanasabah', [NasabahController::class, 'nasabah'])->name('admin.datanasabah');
Route::get('/admin/nasabah/buat', [NasabahController::class, 'nasabahtambah'])->name('nasabah.tambah');
Route::post('/admin/nasabah/tambah', [NasabahController::class, 'tambah'])->name('nasabah.tambah');
Route::delete('/hapusnasabah/{Id_nasabah}', [NasabahController::class, 'hapusnasabah'])->name('nasabah.hapus');
Route::get('/editnasabah/{Id_nasabah}', [NasabahController::class, 'edit'])->name('editnasabah');
Route::put('/updatenasabah/{Id_nasabah}', [NasabahController::class, 'updatenasabah'])->name('updatenasabah');
Route::get('/nasabah/tariksaldo', [NasabahController::class, 'createTarikSaldo'])->name('tarik-saldo.create');
Route::post('/nasabah/tariksaldo', [NasabahController::class, 'storeTarikSaldo'])->name('tarik-saldo.store');
Route::get('/nasabah/kirimsaldo', [NasabahController::class, 'createKirimSaldo'])->name('kirim-saldo.create');
Route::post('/nasabah/kirimsaldo', [NasabahController::class, 'storeKirimSaldo'])->name('kirim-saldo.store');
Route::get('/riwayat-transaksi', [NasabahController::class, 'riwayatTransaksi'])->name('nasabah.riwayat');
Route::get('/my-profile', [NasabahController::class, 'profile'])->name('user.profile');
use App\Http\Controllers\ReportController;
Route::get('/laporan', [ReportController::class, 'index'])->name('laporan.index');
Route::post('/pencarianlaporan', [ReportController::class, 'cariLaporan'])->name('pencarianlaporan');
use App\Http\Controllers\LaporanController;
Route::get('/pegawai/perhitungankoin', [LaporanController::class, 'perhitungankoin'])->name('pegawai.perhitungankoin');
Route::get('/pegawai/perhitungankoin/{id}', [LaporanController::class, 'show'])->name('laporan.show');

