@extends('layouts.master')
@section('container')
<h1 class="h3 mb-0 text-gray-800 mb-2">Kategori</h1>
<div class="d-sm-flex mb-4">
    <!-- Button trigger modal -->
    <a href="/kategori-barang/deleted" class="btn btn-secondary mr-4">Kategori Yang Dihapus</a>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">
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
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-edit="{{ $category->id }}" data-bs-nama="{{ $category->name }}">Edit</button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal" data-bs-hapus="{{ $category->id }}" data-bs-nama="{{ $category->name }}">Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="{{ asset('js/modal/modalKategori.js') }}"></script>
@include('sweetalert::alert')
@endsection
