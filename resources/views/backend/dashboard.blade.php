@extends('backend.appMain')
@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    @if (Auth::user()->status == 'p')
        <h4 class="m-0">
        </h4>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Selamat Datang <strong>{{ Auth::user()->name }}</strong> di Aplikasi Kami, Silahkan Tunggu Konfirmasi dari MIMIN
            Ganteng Yah!!! >.< <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
                <div class="row mt-4">
                    <nav class="w-100">
                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc"
                                role="tab" aria-controls="product-desc" aria-selected="true">Deskripsi Aplikasi</a>
                        </div>
                    </nav>
                    <div class="tab-content p-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                            aria-labelledby="product-desc-tab" style="text-align: justify">
                            &nbsp;&nbsp;&nbsp;&nbsp;Aplikasi Sobat Sehat adalah aplikasi inovatif yang dirancang untuk
                            memberikan
                            pelayanan kesehatan masyarakat yang bertujuan untuk meningkatkan kesadaran dan
                            pemahaman masyarakat tentang pentingnya menjaga kesehatan. Aplikasi ini juga
                            memudahkan untuk mengakses berbagai informasi-informasi yang lengkap terkait kesehatan
                            dan relevan bagi pengguna, sehingga memudahkan mereka untuk menemukan acara terkait
                            pemeriksaan kesehatan yang sesuai dengan kebutuhan kesehatan pada tubuh kita. Aplikasi ini
                            juga menyediakan banyak fitur untuk masyarakat mulai dari menampilkan informasi, mencari
                            acara atau kegiatan yang akan dilaksanakan, pengingat agar kita tidak lupa, saran dan
                            dukungan, dan terakhir yaitu forum diskusi untuk berdiskusi tentang kesehatan ataupun
                            penyakit yang ada di tubuh kita. Dengan fitur fitur ini dapat membantu pengguna tidak
                            merasa kesulitan lagi jika ingin melakukan konsultasi ataupun pemeriksaan terkait kesehatan.
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    @endif
    <!-- Small boxes (Stat box) -->
    <div class="row">
        @if (Auth::user()->status == 'a')
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>
                            @if ($count_jadwals <= 10)
                                0{{ $count_jadwals }}
                            @else
                                {{ $count_jadwals }}
                            @endif
                        </h3>

                        <p>Total Data Jadwal </p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('jadwal') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>
                            @if ($count_sarandukungan <= 10)
                                0{{ $count_sarandukungan }}
                            @else
                                {{ $count_sarandukungan }}
                            @endif
                        </h3>

                        <p>Total Saran & Dukungan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="{{ route('saran-dan-dukungan') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        @endif
        @if (Auth::user()->role == 'a')
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>
                            @if ($count_beritas <= 10)
                                0{{ $count_beritas }}
                            @else
                                {{ $count_beritas }}
                            @endif
                        </h3>

                        <p>Total Data Berita</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ route('berita') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3 class="text-white">
                            @if ($count_users <= 10)
                                0{{ $count_users }}
                            @else
                                {{ $count_users }}
                            @endif
                        </h3>

                        <p class="text-white">Total Kontributor</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ route('user') }}" class="small-box-footer text-white">More info <i
                            class="fas fa-arrow-circle-right text-white"></i></a>
                </div>
            </div>
            <!-- ./col -->
        @endif

    </div>
    <!-- /.row -->
@endsection
