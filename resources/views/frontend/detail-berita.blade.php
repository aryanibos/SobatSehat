@extends('frontend.appMain')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Berita</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end"
                            src="{{ asset('frontend') }}/img/dokter-covid.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4"
                        style="background-color: #5ce1e6; color: white;">// BERITA TERPOPULER //</p>
                    <h1 class="mb-4">{{ $berita['judul'] }}</h1>
                    <small>
                        <i class="fa fa-user-circle"></i> {{ $berita->user->name }}
                        <i class="fa fa-calendar" style="margin-left: 5px"></i> {{ $berita->created_at->format('d F Y') }}
                        <i class="fa fa-list" style="margin-left: 5px"></i> {{ $berita['kategori'] }}
                    </small>
                    <p style="text-align: justify; color: black;">
                        &nbsp;&nbsp;&nbsp;{!! $berita['isi'] !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 style="color: #5ce1e6;">BERITA TERPOPULER</h2>
            </div>
            <div class="row g-4">
                @foreach ($beritas as $item)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ asset('upload/gambar-berita/' . $item['gambar']) }}"
                                    alt="">
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <a href="{{ route('detail-berita', $item['id']) }}">
                                    <h5>{{ $item['judul'] }}</h5>
                                </a>
                                <div class="team-social text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
