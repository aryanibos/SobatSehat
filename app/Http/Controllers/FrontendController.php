<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home');
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
