@extends('layouts.master')
@section('container')
   <h1 class="h3 mb-0 text-gray-800">Data Barang</h1>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        
        <!-- Button trigger modal -->
        <a href="#" class="btn btn-secondary">Data Yang Dihapus</a>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">
                <i class="fas fa-plus"></i>&nbsp;
                Tambah Barang
            </button>

            <!-- Modal -->
            @include('dashboard.barang.modal.barangModal')
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Data Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Stok Produk</th>
                            <th>Harga Produk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->Category->name }}</td>
                                <td>{{ $product->qty }}</td>
                                <td>Rp. {{ $product->price }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                        data-target="#editModal" data-whatever="{{ $product->id }}">Edit</button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#hapusModal" data-whatever="{{ $product->id }}">Hapus</button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
    <script src="{{ asset('js/modal/modal.js') }}"></script>
@endsection
