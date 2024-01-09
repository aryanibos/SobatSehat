<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Jadwal;
use App\Models\Lokasi;
use App\Models\SaranDukungan;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::all();
        $beritas = Berita::limit(4)->get();
        $lokasi = Lokasi::all();
        $count_jadwals = Jadwal::count();
        return view('frontend.home', compact('jadwals', 'beritas', 'count_jadwals', 'lokasi'));
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
        $beritas = Berita::all();
        return view('frontend.berita', compact('beritas'));
    }

    public function beritaDetail($id)
    {
        $berita = Berita::find($id);
        $beritas = Berita::limit(4)->get();
        return view('frontend.detail-berita', compact('berita', 'beritas'));
    }

    public function jadwalLokasi()
    {
        $jadwals = Jadwal::all();
        $lokasis = Lokasi::all();
        return view('frontend.jadwal_lokasi', compact('jadwals', 'lokasis'));
    }

    public function saranDukungan()
    {
        return view('frontend.saran_dukungan');
    }

    public function saranDukunganStore(Request $request)
    {
        $request->validate([
            'saran' => 'required|min:3|max:1000',
            'dukungan' => 'required|min:3|max:1000',
        ]);

        $validate = $request->all();

        SaranDukungan::create($validate);
        return redirect()->route('saran_dukungan')->with('success', 'Saran & Dukungan berhasil ditambahkan');
    }
}
