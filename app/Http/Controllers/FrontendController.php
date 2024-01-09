<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }
<<<<<<< HEAD
    public function saranDukungan()
    {
        return view('frontend.saran_dukungan');
    }

=======

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
>>>>>>> 163d6fc2f54ebf79651f549a11c50a92f2ff94ba
}
