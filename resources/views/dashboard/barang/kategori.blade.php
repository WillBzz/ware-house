@extends('layouts.master')
@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h2>Kategori</h2>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-plus"></i>&nbsp;
            Tambah Kategori
        </button>

        <!-- Modal -->
        @include('dashboard.barang.modal.KategoriModal')
    </div>
    {{-- <div class="card-deck mt-4">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-3 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <p class="card-text"><small class="text-muted">banyak Product:
                                {{ $category->Products->count() }}</small></p>
                        <a class="btn btn-warning" href="/kategori-barang/edit/{{ $category->id }}">Edit</a>
                        <a class="btn btn-danger" href="/kategori-barang/hapus/{{ $category->id }}">Delete</a>
    
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div> --}}
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kategori</th>
                            <th>Banyak Produk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
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
