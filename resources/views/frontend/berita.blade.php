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
                        <img class="img-fluid rounded w-75 align-self-end" src="{{ asset('frontend') }}/img/dokter-covid.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4" style="background-color: #5ce1e6; color: white;">// BERITA TERPOPULER //</p>
                    <h1 class="mb-4">Virus Corona Varian Omicron Meningkat Kembali Di Singapura!!! Masyarakat Di Minta Lebih Waspada</h1>
                    <p style="text-align: justify; color: black;">Virus Corona Virus Corona varian Omicron merupakan jenis virus Corona yang baru saja ditemukan. Setelah COVID-19 varian Delta, kali ini muncul kembali COVID-19 varian baru, yaitu varian Omicron. Virus Corona varian Omicron ini terdeteksi berasal dari Afrika Selatan, hanya dalam waktu beberapa minggu, virus varian ini pun mulai ditemukan di berbagai negara. Gejala Omicron mirip dengan gejala varian-varian sebelumnya, termasuk demam, batuk, kelelahan, sakit kepala, dan pilek. Namun, beberapa orang yang terinfeksi Omicron mungkin tidak mengalami gejala sama sekali. 
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
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/corona.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Virus Corona</h5>
                            <p class="text-primary">Virus Corona Meningkat Lagi Di Singapura</p>
                            <div class="team-social text-center">
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/corona.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Virus Corona</h5>
                            <p class="text-primary">Virus Corona Meningkat Lagi Di Singapura</p>
                            <div class="team-social text-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/corona.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Virus Corona</h5>
                            <p class="text-primary">Virus Corona Meningkat Lagi Di Singapura</p>
                            <div class="team-social text-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/corona.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Virus Corona</h5>
                            <p class="text-primary">Virus Corona Meningkat Lagi Di Singapura</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection