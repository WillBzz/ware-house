@extends('layouts.master')
@section('container')
<h1 class="h3 mb-0 text-gray-800 mb-2">Data Barang Yang Telah Dihapus</h1>
<div class="d-sm-flex mb-4">
    <!-- Button trigger modal -->
    <a href="/daftar-barang" class="btn btn-secondary mr-4">Kembali</a>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Stok Produk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($deletedbarang as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->Category->name }}</td>
                        <td>{{ $product->qty }}</td>
                        <td>
                            <a href="/daftar-barang/restore/{{ $product->id }}" class="btn btn-warning">Pulihkan</a>
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
