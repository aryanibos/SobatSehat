@extends('backend.appMain')
@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Tambah Data Berita</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Tambah Berita</li>
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
                        <form method="POST" action="{{ route('berita.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="mb-3 row">
                                        <label class="col-lg-3 col-form-label" for="gambar">Upload Gambar
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-5">
                                            <input type="file" class="form-control" id="gambar"
                                                placeholder="Masukkan Upload Gambar Terbaru.." name="gambar" required>
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
                                                placeholder="Masukkan Judul Terbaru.." name="judul" required>
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
                                            <textarea name="isi" id="" cols="30" rows="10" class="form-control"></textarea>
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
                                                <option hidden>Pilih Kategori Berita</option>
                                                <option value="Pendidikan">Pendidikan</option>
                                                <option value="Ekonomi">Ekonomi</option>
                                                <option value="Teknologi">Teknologi</option>
                                                <option value="Kesehatan">Kesehatan</option>
                                                <option value="Lainnya...">Lainnya...</option>
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
