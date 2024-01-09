@extends('backend.appMain')

@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Daftar Saran Dukungan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Saran Dukungan</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List Saran Dukungan</h3>
        </div>

        <a href="{{ route('saran-dan-dukungan.create') }}">
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
                        <th>Saran</th>
                        <th>Dukungan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($sarandukungans as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ Str::limit($item['saran'], 30, '...') }}</td>
                            <td>{{ Str::limit($item['dukungan'], 30, '...') }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('saran-dan-dukungan.show', $item->id) }}"
                                        class="btn btn-info shadow btn-xs sharp "><i class="fas fa-info"></i></a>
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
