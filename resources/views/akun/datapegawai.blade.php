@extends('layouts.master')
@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h2>Data Pegawai</h2>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-plus"></i>&nbsp;
            Tambah Data
        </button>
        @include('akun.modal.pegawaiModal')
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Akun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><b>{{ $user->name }}</b></td>
                                <td>
                                    <a class="btn btn-info" href="#">Detail</a>
                                    <a class="btn btn-danger" href="/data-pegawai/hapus/{{ $user->id }}">Blokir</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
