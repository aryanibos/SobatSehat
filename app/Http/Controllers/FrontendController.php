<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::all();
        $beritas = Berita::all();
        return view('frontend.home', compact('jadwals', 'beritas'));
    }
    public function contact()
    {
        return view('frontend.contact');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function berita()
    {
        return view('frontend.berita');
    }

    public function jadwalLokasi()
    {
        return view('frontend.jadwal_lokasi');
    }
}
