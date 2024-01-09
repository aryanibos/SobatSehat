@extends('backend.appMain')
@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Detail Data Saran & Dukungan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Detail Saran & Dukungan</li>
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
    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body">
            <div class="row mt-4">
                <nav class="w-100">
                    <div class="nav nav-tabs" id="product-tab" role="tablist">
                        <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc"
                            role="tab" aria-controls="product-desc" aria-selected="true">Saran</a>
                        <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments"
                            role="tab" aria-controls="product-comments" aria-selected="false">Dukungan</a>
                    </div>
                </nav>
                <div class="tab-content p-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                        aria-labelledby="product-desc-tab"> {{ $sarandukungan['saran'] }}
                    </div>
                    <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                        {{ $sarandukungan['dukungan'] }}
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
