<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Jadwal;
use App\Models\Lokasi;
use App\Models\SaranDukungan;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $count_jadwals = Jadwal::count();
        $count_beritas = Berita::count();
        $count_lokasis = Lokasi::count();
        $count_users = User::count();
        $count_sarandukungan = SaranDukungan::count();
        return view('backend.dashboard', compact('count_jadwals', 'count_beritas', 'count_lokasis', 'count_users', 'count_sarandukungan'));
    }
}
