<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\User;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritas = Berita::all();
        $users = User::all();
        return view('backend.berita.index', compact('beritas', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function menambahkanDataBerita()
    {
        $users = User::all();
        return view('backend.berita.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|min:3|max:100',
            'isi' => 'required',
            'gambar' => 'required|mimes:png,jpg,jpeg|max:2048',
            'user_id' => 'required',
            'kategori' => 'required',
        ]);
        $validate = $request->all();

        if ($request->hasFile('gambar')) {
            // simpan sementara file tersebut kedalam variabel file
            $file = $request->file('gambar');
            // kemudian buat nama file dari gabungan timestamp dan extension
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // kemudian simpan file ke dalam folder public/upload/gambar-berita
            $file->move('upload/gambar-berita', $filename);
            // kemudian isi kolom gambar di database dengan nama file yang sudah dibuat
            $validate['gambar'] = $filename;
        }

        // dd($validate);
        Berita::create($validate);

        return redirect()->route('berita')->with('success', 'Berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function melihatDataBerita($id)
    {
        $berita = Berita::find($id);
        return view('backend.berita.show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function mengubahkanDataBerita($id)
    {
        $berita = Berita::findOrFail($id);
        $users = User::all();
        return view('backend.berita.edit', compact('berita', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|min:3|max:100',
            'isi' => 'required',
            'gambar' => 'mimes:png,jpg,jpeg|max:2048',
            'user_id' => 'required',
            'kategori' => 'required',
        ]);
        $validate = $request->all();
        // jika ada request gambar maka
        $berita = Berita::find($id);
        if ($request->hasFile('gambar')) {
            // Hapus file lama
            $old_image = $berita->gambar;
            if (file_exists(public_path('upload/gambar-berita/' . $old_image))) {
                unlink(public_path('upload/gambar-berita/' . $old_image));
            }
            // simpan sementara file tersebut kedalam variabel file
            $file = $request->file('gambar');
            // kemudian buat nama file dari gabungan timestamp dan extension
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // kemudian simpan file ke dalam folder public/upload/gambar-berita
            $file->move('upload/gambar-berita', $filename);
            // kemudian isi kolom gambar di database dengan nama file yang sudah dibuat
            $validate['gambar'] = $filename;
        }
        $berita->update($validate);

        return redirect()->route('berita')->with('success', 'Berita berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function menghapusDataBerita($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
        return redirect()->route('berita')->with('success', 'Berita berhasil dihapus');
    }
}
