@extends('backend.appMain')

@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Daftar Alamat</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Alamat</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List Alamat</h3>
        </div>
        <a href="{{ route('lokasi.tambah') }}">
            <button type="button" class="btn btn-rounded btn-info mt-3" style="margin-left: 20px"><span
                    class="btn-icon-start text-info"><i class="fa fa-plus text-white"></i>
                </span>Tambah Data</button>
        </a>


        <!-- /.card-header -->
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lokasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($lokasis as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item['nama_lokasi'] }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('lokasi.edit', $item->id) }}"
                                        class="btn btn-primary shadow btn-xs sharp " style="margin-left: 10px"><i
                                            class="fas fa-pencil-alt"></i></a>
                                    <a href="{{ route('lokasi.delete', $item->id) }}">
                                        <button class="btn btn-danger shadow btn-xs sharp" style="margin-left: 10px"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i
                                                class="fa fa-trash"></i></button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
