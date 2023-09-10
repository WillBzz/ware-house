@extends('layouts.master')
@section('container')
<h1 class="h3 mb-0 text-gray-800 mb-2">Akun Pegawai Yang Telah Dihapus</h1>
<div class="d-sm-flex mb-4">
    <!-- Button trigger modal -->
    <a href="/data-pegawai" class="btn btn-secondary mr-4">Kembali</a>
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
                    @foreach ($usersdeleted as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><b>{{ $user->name }}</b></td>
                        <td>
                            <a href="/data-pegawai/restore/{{ $user->id }}" class="btn btn-warning">Pulihkan</a>
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
