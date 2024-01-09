@extends('backend.appMain')

@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Daftar Kontributor</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Kontributor</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List Kontributor</h3>
        </div>
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
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($users as $item)
                        <tr>
                            @if ($item['role'] == 'k')
                                <td>{{ $no++ }}</td>
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['email'] }}</td>
                                <td>
                                    @if ($item['role'] == 'k')
                                        <span class="badge badge-info">Kontributor</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($item['status'] == 'a')
                                        <span class="badge badge-success">Approve</span>
                                    @else
                                        <span class="badge badge-warning">Pending</span>
                                    @endif

                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('user.validasi', $item->id) }}"
                                            class="btn btn-info shadow btn-xs sharp "><i class="fas fa-check"></i></a>
                                        </a>
                                    </div>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
