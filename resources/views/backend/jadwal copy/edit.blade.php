@extends('backend.appMain')

@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Edit Data Berita</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Edit Berita</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="card-header" style="margin-top: -33px">
        <a href="{{ route('berita') }}">
            <button type="button" class="btn btn-rounded btn-primary mt-3" style="margin-left: -20px"><span
                    class="btn-icon-start text-primary"><i class="fa fa-arrow-left text-white"></i>
                </span>Kembali</button>
        </a>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Tambah Berita</h4>
                </div>
                <div class="card-body">
                    <div class="form-validation">
                        <form method="POST" action="{{ route('berita.update', $berita['id']) }}"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="mb-3 row">
                                        <label class="col-lg-3 col-form-label" for="gambar">Upload Gambar
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-5">
                                            <img src="{{ asset('upload/gambar-berita/' . $berita['gambar']) }}"
                                                alt="" width="500px"
                                                style="border-radius: 20px; margin-bottom: 10px">
                                            <input type="file" class="form-control" id="gambar"
                                                value="{{ $berita['gambar'] }}" name="gambar">
                                            <div class="invalid-feedback">
                                                Please Masukkan Upload Gambar Terbaru..
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-3 col-form-label" for="judul">Judul
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="judul"
                                                value="{{ $berita['judul'] }}" name="judul" required>
                                            <div class="invalid-feedback">
                                                Please Masukkan Judul Terbaru..
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-3 col-form-label" for="nama_acara">Isi Content
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <textarea name="isi" id="" cols="30" rows="10" class="form-control">{{ $berita['isi'] }}</textarea>
                                            <div class="invalid-feedback">
                                                Please Masukkan Judul Terbaru..
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-3 col-form-label" for="user_id">Penulis
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="user_id"
                                                value="{{ Auth::user()->id }}" name="user_id" required readonly>
                                            <div class="invalid-feedback">
                                                Please Masukkan Judul Terbaru..
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-3 col-form-label" for="kategori">Kategori Berita
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-5">
                                            <select class="form-control" id="kategori" name="kategori" required>
                                                <option value="Pendidikan"
                                                    {{ $berita['kategori'] == 'Pendidikan' ? 'selected' : '' }}>
                                                    Pendidikan</option>
                                                <option value="Ekonomi"
                                                    {{ $berita['kategori'] == 'Ekonomi' ? 'selected' : '' }}>
                                                    Ekonomi</option>
                                                <option value="Teknologi"
                                                    {{ $berita['kategori'] == 'Teknologi' ? 'selected' : '' }}>
                                                    Teknologi</option>
                                                <option value="Kesehatan"
                                                    {{ $berita['kategori'] == 'Kesehatan' ? 'selected' : '' }}>Kesehatan
                                                </option>
                                                <option value="Lainnya..."
                                                    {{ $berita['kategori'] == 'Lainnya...' ? 'selected' : '' }}>Lainnya...
                                                </option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please Masukkan Kategori Berita Terbaru..
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn light btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
