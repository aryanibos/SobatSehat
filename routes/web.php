<?php

use App\Http\Controllers\FrontendController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/berita', [FrontendController::class, 'berita'])->name('berita');
Route::get('/jadwal_lokasi', [FrontendController::class, 'jadwalLokasi'])->name('jadwal_lokasi');
Route::get('saran_dukungan', [FrontendController::class, 'saranDukungan'])->name('saran_dukungan');