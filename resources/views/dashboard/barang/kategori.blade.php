@extends('layouts.master')
@section('container')
<h1 class="h3 mb-0 text-gray-800">Kategori</h1>
<div class="d-sm-flex mb-4">
    <!-- Button trigger modal -->
    <a href="#" class="btn btn-secondary mr-4">Kategori Yang Dihapus</a>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-plus"></i>&nbsp;
        Tambah Kategori
    </button>

    <!-- Modal -->
    @include('dashboard.barang.modal.KategoriModal')
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
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><b>{{ $category->name }}</b></td>
                        <td>{{ $category->Products->count() }}</td>
                        <td>
                            <a class="btn btn-warning" href="/kategori-barang/edit/{{ $category->id }}">Edit</a>
                            <a class="btn btn-danger" href="/kategori-barang/hapus/{{ $category->id }}">Delete</a>
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
