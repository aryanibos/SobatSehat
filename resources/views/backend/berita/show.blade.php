@extends('backend.appMain')
@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Detail Data berita Kegiatan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Detail berita Kegiatan</li>
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
    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none">{{ $berita['nama_acara'] }}</h3>
                    <div class="col-12">
                        <img src="{{ asset('upload/gambar-berita/' . $berita['gambar']) }}" style="border-radius: 20px;"
                            class="product-image" alt="Product Image">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3">{{ $berita['judul'] }}</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>
                                <strong>Published</strong>
                            </h6>
                        </div>
                        <div class="col-md-1">
                            :
                        </div>
                        <div class="col-md-6">
                            @php
                                echo date('d F Y', strtotime($berita['created_at']));
                            @endphp
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>
                                <strong>Penulis</strong>
                            </h6>
                        </div>
                        <div class="col-md-1">
                            :
                        </div>
                        <div class="col-md-6">
                            {{ $berita->user->name }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>
                                <strong>kategori</strong>
                            </h6>
                        </div>
                        <div class="col-md-1">
                            :
                        </div>
                        <div class="col-md-6">
                            {{ $berita['kategori'] }}
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="row mt-4">
                <nav class="w-100">
                    <div class="nav nav-tabs" id="product-tab" role="tablist">
                        <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc"
                            role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                    </div>
                </nav>
                <div class="tab-content p-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                        aria-labelledby="product-desc-tab">{{ $berita['isi'] }}</div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
