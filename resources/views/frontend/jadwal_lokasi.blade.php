@extends('frontend.appMain')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Lokasi & Jadwal</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Lokasi & Jadwal Kegiatan</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-1"></div>
                <div class="col-lg-10 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4 text-center fs-1 text-primary">Lokasi Dan Jadwal Kegiatan</h1>
                    <p style="text-align: justify; color: black;" class="fs-5">Untuk mengetahui informasi tentang lokasi
                        dan jadwal
                        kegiatan yang diselenggarakan oleh aplikasi Sobat Sehat, pengunjung dapat mengunjungi situs web atau
                        aplikasi Sobat Sehat. Informasi ini dapat digunakan untuk merencanakan lokasi dan jadwal kegiatan
                        yang berhubungan dengan jadwal kesehatan, sehingga dapat membantu pengunjung dalam menentukan lokasi
                        dan jadwal kegiatan.
                    </p>
                </div>
                <div class="col-lg-1"></div>
            </div>
            <br>
        </div>
        <div class="container px-5">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-10">
                        </div>
                        <div class="col-sm-12 col-md-2">
                            <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search"
                                        class="form-control form-control-sm" placeholder=""
                                        aria-controls="example1"></label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                                aria-describedby="example1_info">
                                <thead>
                                    <tr class="table-primary h-20">
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column descending">No</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">
                                            Nama Lokasi</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                            Nama Acara</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1"
                                            aria-label="Engine version: activate to sort column ascending">Waktu</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Kategori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">1</td>
                                        <td>Klinik Dental JPP, Depok</td>
                                        <td>Konsultasi Gigi</td>
                                        <td>12-12-2023/00:00</td>
                                        <td>UMUM</td>
                                    </tr>
                                    <tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">2</td>
                                        <td>Klinik Dental JPP, Depok</td>
                                        <td>Konsultasi Gigi</td>
                                        <td>12-12-2023/00:00</td>
                                        <td>UMUM</td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">3</td>
                                        <td>Klinik Dental JPP, Depok</td>
                                        <td>Konsultasi Gigi</td>
                                        <td>12-12-2023/00:00</td>
                                        <td>UMUM</td>
                                    </tr>
                                    <tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">4</td>
                                        <td>Klinik Dental JPP, Depok</td>
                                        <td>Konsultasi Gigi</td>
                                        <td>12-12-2023/00:00</td>
                                        <td>UMUM</td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">5</td>
                                        <td>Klinik Dental JPP, Depok</td>
                                        <td>Konsultasi Gigi</td>
                                        <td>12-12-2023/00:00</td>
                                        <td>UMUM</td>
                                    </tr>
                                    <tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">6</td>
                                        <td>Klinik Dental JPP, Depok</td>
                                        <td>Konsultasi Gigi</td>
                                        <td>12-12-2023/00:00</td>
                                        <td>UMUM</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="example1_previous"><a
                                            href="#" aria-controls="example1" data-dt-idx="0" tabindex="0"
                                            class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#"
                                            aria-controls="example1" data-dt-idx="1" tabindex="0"
                                            class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                            data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                            data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                    <li class="paginate_button page-item next" id="example1_next"><a href="#"
                                            aria-controls="example1" data-dt-idx="7" tabindex="0"
                                            class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </div>
@endsection
