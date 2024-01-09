<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lokasis = Lokasi::all();
        return view('backend.lokasi.index', compact('lokasis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function menambahkanDataLokasi()
    {
        return view('backend.lokasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lokasi' => 'required|min:3|max:500',
        ]);

        $validate = $request->all();

        Lokasi::create($validate);
        return redirect()->route('lokasi')->with('success', 'Lokasi berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function mengubahkanDataLokasi($id)
    {
        $lokasi = Lokasi::findOrFail($id);
        return view('backend.lokasi.edit', compact('lokasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lokasi' => 'required|min:3|max:500',
        ]);
        $validate = $request->all();
        Lokasi::find($id)->update($validate);
        return redirect()->route('lokasi')->with('success', 'Lokasi berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function menghapusDatalokasi($id)
    {
        $lokasi = Lokasi::find($id);
        $lokasi->delete();
        return redirect()->route('lokasi')->with('success', 'Lokasi berhasil dihapus');
    }
}
