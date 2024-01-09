@extends('frontend.appMain')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid header bg-primary p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white mb-5">Kesehatan Yang Baik Adalah Akar Dari Kebahagiaan</h1>
                <div class="row g-4">
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">167</h2>
                            <p class="text-light mb-0">Jadwal Kegiatan</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">04</h2>
                            <p class="text-light mb-0">Dokter Ahli</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('frontend') }}/img/carousel-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="{{ asset('frontend') }}/img/about-1.jpg"
                            alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="{{ asset('frontend') }}/img/about-2.jpg"
                            alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4"
                        style="background-color: #5ce1e6; color: white;">Tentang Kami</p>
                    <h1 class="mb-4">Mengapa Anda Harus Mempercayai Kami? Kenali Tentang Kami</h1>
                    <p style="text-align: justify; color: black;">Aplikasi Sobat Sehat adalah aplikasi inovatif yang
                        dirancang untuk memberikan pelayanan kesehatan masyarakat yang bertujuan untuk meningkatkan
                        kesadaran dan pemahaman masyarakat tentang pentingnya menjaga kesehatan. Aplikasi ini juga
                        memudahkan untuk mengakses berbagai informasi-informasi yang lengkap terkait kesehatan dan relevan
                        bagi pengguna, sehingga memudahkan mereka untuk menemukan acara terkait pemeriksaan kesehatan yang
                        sesuai dengan kebutuhan kesehatan pada tubuh kita. Aplikasi ini juga menyediakan banyak fitur untuk
                        masyarakat mulai dari menampilkan informasi, mencari acara atau kegiatan yang akan dilaksanakan,
                        pengingat agar kita tidak lupa, saran dan dukungan, dan terakhir yaitu forum diskusi untuk
                        berdiskusi tentang kesehatan ataupun penyakit yang ada di tubuh kita. Dengan fitur fitur ini dapat
                        membantu pengguna tidak merasa kesulitan lagi jika ingin melakukan konsultasi ataupun pemeriksaan
                        terkait kesehatan. Kami Juga Menawarkan Pelayanan Untuk Masayarakat Jika Ingin Melakukan Konsultasi,
                        Yaitu:</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Lokasi dan Jadwal Kegiatan</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Saran dan Dukungan</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Services</p>
                <h1>Jadwal & Kegiatan</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="fa fa-heartbeat text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Vaksinasi Ebola</h4>
                        <p class="mb-4">Bertujuan agar mesyarakat terhindar dari virus ebola</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="fa fa-x-ray text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Konsutasi Kesehatan Balita</h4>
                        <p class="mb-4">Agar anak balita memiliki jaminan kesehatan yang baik kedepan</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="fa fa-brain text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Pengecekan gula darah, asam urat, kolesterol</h4>
                        <p class="mb-4">Agar dapat mengetahui seberapa besar hal GDAC yang ada pada tubuh</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4" style="background-color: #5ce1e6; color: white;">
                    Berita</p>
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


    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Contuct Us</p>
                    <h1 class="mb-4">Hubungi Kami </h1>
                    <p class="mb-4">Sebelum konsultasi mari kami bantu apa yang kalian butuhkan</p>
                    <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                            style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Hubungi Kami</p>
                            <h5 class="mb-0">+62857 8824 1715</h5>
                        </div>
                    </div>
                    <div class="bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                            style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Email Kami</p>
                            <h5 class="mb-0">Alpukat6_RPL@<br>gmail.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Anda">
                                        <label for="nama">Nama</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Masukan Email Anda">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="phone" placeholder="Masukan nomor telephone anda">
                                        <label for="phone">Nomor Telephone</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Apa yang bisa kami bantu?" id="keluhan" style="height: 100px"></textarea>
                                        <label for="keluhan">Apa yang bisa kami bantu?</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
@endsection
