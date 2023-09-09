@extends('layouts.master')
@section('container')
<h1 class="h3 mb-0 text-gray-800">Data Akun Pegawai</h1>
<div class="d-sm-flex mb-4">
    <!-- Button trigger modal -->
    <a href="#" class="btn btn-secondary mr-4">Akun Yang Diblokir</a>
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
