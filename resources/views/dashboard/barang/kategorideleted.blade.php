@extends('layouts.master')
@section('container')
<h1 class="h3 mb-0 text-gray-800 mb-2">Kategori Yang Telah Dihapus</h1>
<div class="d-sm-flex mb-4">
    <!-- Button trigger modal -->
    <a href="/kategori-barang" class="btn btn-secondary mr-4">Kembali</a>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Banyak Produk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorydelete as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><b>{{ $category->name }}</b></td>
                        <td>{{ $category->Products->count() }}</td>
                        <td>
                            <a href="/kategori-barang/restore/{{ $category->id }}" class="btn btn-warning">Pulihkan</a>
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
