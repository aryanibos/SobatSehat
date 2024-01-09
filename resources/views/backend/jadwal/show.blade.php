@extends('backend.appMain')
@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Detail Data Jadwal Kegiatan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Detail Jadwal Kegiatan</li>
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
    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none">{{ $jadwal['nama_acara'] }}</h3>
                    <div class="col-12">
                        <img src="{{ asset('upload/gambar-jadwal/' . $jadwal['gambar']) }}" style="border-radius: 20px;"
                            class="product-image" alt="Product Image">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3">{{ $jadwal['nama_acara'] }}</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>
                                <strong>Tanggal</strong>
                            </h5>
                        </div>
                        <div class="col-md-1">
                            :
                        </div>
                        <div class="col-md-6">
                            @php
                                echo date('d F Y', strtotime($jadwal['tanggal']));
                            @endphp
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>
                                <strong>Waktu</strong>
                            </h5>
                        </div>
                        <div class="col-md-1">
                            :
                        </div>
                        <div class="col-md-6">
                            08:00 WIB - SELESAI
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>
                                <strong>Alamat</strong>
                            </h5>
                        </div>
                        <div class="col-md-1">
                            :
                        </div>
                        <div class="col-md-6">
                            @foreach ($lokasis as $item)
                                {{ $item->nama_lokasi }}
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>
                                <strong>kategori</strong>
                            </h5>
                        </div>
                        <div class="col-md-1">
                            :
                        </div>
                        <div class="col-md-6">
                            {{ $jadwal['kategori'] }}
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            {{-- <div class="row mt-4">
                <nav class="w-100">
                    <div class="nav nav-tabs" id="product-tab" role="tablist">
                        <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc"
                            role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                        <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments"
                            role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
                        <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating"
                            role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
                    </div>
                </nav>
                <div class="tab-content p-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                        aria-labelledby="product-desc-tab"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                        vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                        cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem
                        elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh,
                        congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius
                        metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum
                        at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque
                        viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat
                        a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non
                        convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat
                        fringilla sollicitudin ultrices vel metus. </div>
                    <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                        Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum
                        risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras
                        eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros
                        ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim
                        vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl
                        dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur
                        vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel,
                        tincidunt ipsum. </div>
                    <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab">
                        Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean
                        elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent
                        vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non
                        bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut.
                        Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus
                        odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna
                        vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi
                        orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper
                        posuere. Integer finibus orci vitae vehicula placerat. </div>
                </div>
            </div> --}}
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
