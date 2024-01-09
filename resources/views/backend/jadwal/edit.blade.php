@extends('backend.appMain')
@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Edit Data Jadwal Kegiatan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Edit Jadwal Kegiatan</li>
            </ol>
        </div>
    </div>
@endsection
@section('content')
    <div class="card-header" style="margin-top: -33px">
        <a href="{{ route('jadwal') }}">
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
                    <h4 class="card-title">Form Edit Jadwal Kegiatan</h4>
                </div>
                <div class="card-body">
                    <div class="form-validation">
                        <form method="POST" action="{{ route('jadwal.update', $jadwal['id']) }}"
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
                                            <img src="{{ asset('upload/gambar-jadwal/' . $jadwal['gambar']) }}"
                                                alt="" width="500px"
                                                style="border-radius: 20px; margin-bottom: 10px">
                                            <input type="file" class="form-control" id="gambar"
                                                value="{{ $jadwal['gambar'] }} " name="gambar">
                                            <div class="invalid-feedback">
                                                Please Masukkan Upload Gambar Terbaru..
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-3 col-form-label" for="name">Alamat
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-5">
                                            <select name="lokasi_id" class="form-control" id="">
                                                <option hidden>Pilih Kategori Jadwal</option>
                                                @foreach ($lokasis as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $jadwal['lokasi_id'] == $item->id ? 'selected' : '' }}>
                                                        {{ $item->nama_lokasi }}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">
                                                Please Masukkan Nama Lokasi Kegiatan Terbaru..
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-3 col-form-label" for="nama_acara">Nama Jadwal Kegiatan
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="nama_acara"
                                                value="{{ $jadwal['nama_acara'] }}" name="nama_acara" required>
                                            <div class="invalid-feedback">
                                                Please Masukkan Nama Jadwal Kegiatan Terbaru..
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-3 col-form-label" for="tanggal">Waktu Jadwal
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-5">
                                            <input type="date" class="form-control" id="tanggal"
                                                value="{{ $jadwal['tanggal'] }}" name="tanggal" required>
                                            <div class="invalid-feedback">
                                                Please Masukkan Waktu Jadwal Kegiatan Terbaru..
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-3 col-form-label" for="kategori">Kategori Jadwal
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-5">
                                            <select class="form-control" id="kategori" name="kategori" required>
                                                <option value="Kegiatan"
                                                    {{ $jadwal['kategori'] == 'Kegiatan' ? 'selected' : '' }}>
                                                    Kegiatan</option>
                                                <option value="Kegiatan"
                                                    {{ $jadwal['kategori'] == 'Kegiatan' ? 'selected' : '' }}>
                                                    Pelayanan</option>
                                                <option value="Pendampingan"
                                                    {{ $jadwal['kategori'] == 'Pendampingan' ? 'selected' : '' }}>
                                                    Pendampingan</option>
                                                <option value="Lainnya"
                                                    {{ $jadwal['kategori'] == 'Lainnya' ? 'selected' : '' }}>
                                                    Lainnya</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please Masukkan Kategori Jadwal Terbaru..
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
