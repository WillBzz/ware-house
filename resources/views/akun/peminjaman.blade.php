@extends('layouts.master')
@section('container')
<h1 class="h3 mb-0 text-gray-800 mb-2">Peminjaman Barang</h1>
<div class="d-sm-flex mb-4">
    <!-- Button trigger modal -->
    <!-- <a href="/data-pegawai/deleted" class="btn btn-secondary">Akun Pegawai Yang Dihapus</a> -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">
        <i class="fas fa-plus"></i>&nbsp;
        Tambah Peminjaman
    </button>
    <!-- Modal -->
    {{-- <!-- @include('dashboard.barang.modal.pegawaiModal') --> --}}
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nama Barang</th>
                        <th>Jumlah Pinjam</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peminjam as $item)
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->products_id }}</td>
                    <td>{{ $item->jumlah_pinjam }}</td>
                    <td>{{ $item->tanggal_pinjam }}</td>
                    <td>{{ $item->tanggal_kembali }}</td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection
