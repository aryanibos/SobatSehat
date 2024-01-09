<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwals = Jadwal::all();
        $lokasis = Lokasi::all();
        return view('backend.jadwal.index', compact('jadwals', 'lokasis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function menambahkanDataJadwal()
    {
        $lokasis = Lokasi::all();
        return view('backend.jadwal.create', compact('lokasis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|mimes:jpg,jpeg,png|max:2048',
            'lokasi_id' => 'required',
            'nama_acara' => 'required|min:3|max:100',
            'tanggal' => 'required',
            'kategori' => 'required',
        ]);
        $validate = $request->all();
        // jika ada request gambar maka
        if ($request->hasFile('gambar')) {
            // simpan sementara file tersebut kedalam variabel file
            $file = $request->file('gambar');
            // kemudian buat nama file dari gabungan timestamp dan extension
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // kemudian simpan file ke dalam folder public/upload/gambar-jadwal
            $file->move('upload/gambar-jadwal', $filename);
            // kemudian isi kolom gambar di database dengan nama file yang sudah dibuat
            $validate['gambar'] = $filename;
        }

        // dd($validate);
        Jadwal::create($validate);
        return redirect()->route('jadwal')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function melihatDataJadwal($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $lokasis = Lokasi::all();
        return view('backend.jadwal.show', compact('jadwal', 'lokasis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function menggubahkanDataJadwal($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $lokasis = Lokasi::all();
        return view('backend.jadwal.edit', compact('jadwal', 'lokasis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'mimes:jpg,jpeg,png|max:2048',
            'lokasi_id' => 'required',
            'nama_acara' => 'required|min:3|max:100',
            'tanggal' => 'required',
            'kategori' => 'required',
        ]);
        $validate = $request->all();
        $jadwal = Jadwal::find($id);
        // jika ada request gambar maka
        if ($request->hasFile('gambar')) {
            // Hapus file lama
            $old_image = $jadwal->gambar;
            if (file_exists(public_path('upload/gambar-jadwal/' . $old_image))) {
                unlink(public_path('upload/gambar-jadwal/' . $old_image));
            }
            // simpan sementara file tersebut kedalam variabel file
            $file = $request->file('gambar');
            // kemudian buat nama file dari gabungan timestamp dan extension
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // kemudian simpan file ke dalam folder public/upload/gambar-jadwal
            $file->move('upload/gambar-jadwal', $filename);
            // kemudian isi kolom gambar di database dengan nama file yang sudah dibuat
            $validate['gambar'] = $filename;
        }
        $jadwal->update($validate);
        return redirect()->route('jadwal')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function menghapusDataJadwal($id)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->delete();
        return redirect()->route('jadwal')->with('success', 'Data berhasil dihapus');
    }
}
