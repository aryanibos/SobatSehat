@extends('backend.appMain')
@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Tambah Saran dan Dukungan </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Tambah Saran dan Dukungan </li>
            </ol>
        </div>
    </div>
@endsection
@section('content')
    <div class="card-header" style="margin-top: -33px">
        <a href="{{ route('saran-dan-dukungan') }}">
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
                    <h4 class="card-title">Form Tambah Saran dan Dukungan</h4>
                </div>
                <div class="card-body">
                    <div class="form-validation">
                        <form method="POST" action="{{ route('saran-dan-dukungan.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="mb-3 row">
                                        <label class="col-lg-3 col-form-label" for="saran">Saran
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <textarea name="saran" id="" cols="30" rows="10" class="form-control"></textarea>
                                            <div class="invalid-feedback">
                                                Please Masukkan Saran Terbaru..
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-3 col-form-label" for="dukungan">Dukungan
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <textarea name="dukungan" id="" cols="30" rows="10" class="form-control"></textarea>
                                            <div class="invalid-feedback">
                                                Please Masukkan Dukungan Terbaru..
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
