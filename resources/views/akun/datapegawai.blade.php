 @extends('layouts.master')
@section('container')
<h1 class="h3 mb-0 text-gray-800 mb-2">Data Akun Pegawai</h1>
<div class="d-sm-flex mb-4">
    <!-- Button trigger modal -->
    <a href="/data-pegawai/deleted" class="btn btn-secondary">Akun Pegawai Yang Dihapus</a>
    <!-- Modal -->
    @include('dashboard.barang.modal.pegawaiModal')
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><b>{{ $user->name }}</b></td>
                        <td>
                            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#detailModal" data-bs-detail="{{ $user->id }}" data-bs-nama="{{ $user->name }}">Detail</button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal" data-bs-hapus="{{ $user->id }}" data-bs-nama="{{ $user->name }}">Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="{{ asset('js/modal/modalPegawai.js') }}"></script>
@include('sweetalert::alert')
@endsection
