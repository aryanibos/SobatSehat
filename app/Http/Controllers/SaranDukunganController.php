<?php

namespace App\Http\Controllers;

use App\Models\SaranDukungan;
use Illuminate\Http\Request;

class SaranDukunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sarandukungans = SaranDukungan::all();
        return view('backend.sarandukungan.index', compact('sarandukungans'));
    }

    public function create()
    {
        return view('backend.sarandukungan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'saran' => 'required|min:3|max:1000',
            'dukungan' => 'required|min:3|max:1000',
        ]);

        $validate = $request->all();

        SaranDukungan::create($validate);
        return redirect()->route('saran-dan-dukungan')->with('success', 'Saran & Dukungan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $sarandukungan = SaranDukungan::find($id);
        return view('backend.sarandukungan.show', compact('sarandukungan'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sarandukungan = SaranDukungan::find($id);
        $sarandukungan->delete();
        return redirect()->route('saran-dan-dukungan')->with('success', 'Saran & Dukungan berhasil dihapus');
    }
}
