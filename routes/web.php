<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\SaranDukunganController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Halaman Home
Route::get('/', [FrontendController::class, 'index'])->name('home');

Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/berita', [FrontendController::class, 'berita'])->name('berita');
Route::get('/jadwal_lokasi', [FrontendController::class, 'jadwalLokasi'])->name('jadwal_lokasi');
Route::get('saran_dukungan', [FrontendController::class, 'saranDukungan'])->name('saran_dukungan');
Route::get('/about', [FrontendController::class, 'about'])->name('about');


// Halaman Login dan Register
Route::get('/loreg', function () {
    return view('logreg.index');
});


Auth::routes();

Route::group(['middleware' => ['auth', 'role:a']], function () {
    // halaman Dashboard
    Route::get('/dashbord', [DashboardController::class, 'index'])->name('dashboard');

    // Mengubahkan data jadwal
    Route::get('/jadwal/menggubahkan-data-jadwal/{id}', [JadwalController::class, 'menggubahkanDataJadwal'])->name('jadwal.edit');
    Route::put('/jadwal/update/{id}', [JadwalController::class, 'update'])->name('jadwal.update');

    // Menghapus data jadwal
    Route::get('/jadwal/delete/{id}', [JadwalController::class, 'menghapusDataJadwal'])->name('jadwal.delete');

    // halaman Berita
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita');

    // Menambahkan data berita
    Route::get('/berita/menambahkan-data-berita', [BeritaController::class, 'menambahkanDataBerita'])->name('berita.tambah');
    Route::post('/berita/store', [BeritaController::class, 'store'])->name('berita.store');

    // Mengubahkan data berita
    Route::get('/berita/menggubahkan-data-berita/{id}', [BeritaController::class, 'mengubahkanDataBerita'])->name('berita.edit');
    Route::put('/berita/update/{id}', [BeritaController::class, 'update'])->name('berita.update');

    // Melihat data berita
    Route::get('/berita/melihat-data-berita/{id}', [BeritaController::class, 'melihatDataBerita'])->name('berita.detail');

    // Menghapus data berita
    Route::get('/berita/delete/{id}', [BeritaController::class, 'menghapusDataBerita'])->name('berita.delete');

    // halaman Lokasi
    Route::get('/lokasi', [LokasiController::class, 'index'])->name('lokasi');

    // Menambahkan data lokasi
    Route::get('/lokasi/menambahkan-data-lokasi', [LokasiController::class, 'menambahkanDataLokasi'])->name('lokasi.tambah');
    Route::post('/lokasi/store', [LokasiController::class, 'store'])->name('lokasi.store');

    // Mengubahkan data lokasi
    Route::get('/lokasi/menggubahkan-data-lokasi/{id}', [LokasiController::class, 'mengubahkanDataLokasi'])->name('lokasi.edit');
    Route::put('/lokasi/update/{id}', [LokasiController::class, 'update'])->name('lokasi.update');

    // Menghapus data lokasi
    Route::get('/lokasi/delete/{id}', [LokasiController::class, 'menghapusDataLokasi'])->name('lokasi.delete');

    // Halaman Saran dan Dukungan
    Route::get('/saran-dan-dukungan', [SaranDukunganController::class, 'index'])->name('saran-dan-dukungan');

    // menghapus data saran dan dukungan
    Route::get('/saran-dan-dukungan/delete/{id}', [SaranDukunganController::class, 'destroy'])->name('saran-dan-dukungan.delete');

    // Halaman User
    Route::get('/kelola-user', [UserController::class, 'index'])->name('user');
    // validasi user
    Route::get('/kelola-user/validasi-user/{id}', [UserController::class, 'validasiUser'])->name('user.validasi');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::group(['middleware' => ['auth']], function () {
    // halaman Dashboard
    Route::get('/dashbord', [DashboardController::class, 'index'])->name('dashboard');

    // halaman Jadwal
    Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal');

    // Melihat data jadwal
    Route::get('/jadwal/melihat-data-jadwal/{id}', [JadwalController::class, 'melihatDataJadwal'])->name('jadwal.detail');


    // Menambahkan data jadwal
    Route::get('/jadwal/menambahkan-data-jadwal', [JadwalController::class, 'menambahkanDataJadwal'])->name('jadwal.tambah');
    Route::post('/jadwal/store', [JadwalController::class, 'store'])->name('jadwal.store');

    // Halaman Saran dan Dukungan
    Route::get('/saran-dan-dukungan', [SaranDukunganController::class, 'index'])->name('saran-dan-dukungan');

    // menambahkan data saran dan dukungan
    Route::get('/saran-dan-dukungan/create', [SaranDukunganController::class, 'create'])->name('saran-dan-dukungan.create');
    Route::post('/saran-dan-dukungan/store', [SaranDukunganController::class, 'store'])->name('saran-dan-dukungan.store');

    // show data saran dan dukungan
    Route::get('/saran-dan-dukungan/show/{id}', [SaranDukunganController::class, 'show'])->name('saran-dan-dukungan.show');
});
