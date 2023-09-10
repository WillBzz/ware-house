{{-- @if (isset($aksi))
    @if ($aksi == 'edit' || $aksi == 'hapus')
        <div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true"
            style="display: block">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ $aksi == 'edit' ? 'Edit' : 'hapus' }} data
                            barang</h5>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid p-2">
                            @if ($aksi == 'edit')
                                <form action="/daftar-barang/edit/{{ $target->id }}" method="POST" class="user">
                                @elseif($aksi == 'hapus')
                                    <form action="/daftar-barang/hapus/{{ $target->id }}" method="POST"
                                        class="user">
                            @endif
                            @csrf
                            <div class="form-group">
                                <label
                                    for="name">{{ $aksi == 'edit' ? 'Nama Barang' : 'apakah anda yakin ingin menghapus Data Barang ' . $target->name }}</label>
                                @if ($aksi == 'edit')
                                    <input type="text" class="form-control" id="name" name="nama"
                                        autocomplete="off" required value="{{ $target->name }}">
                                    <label for="kateg">Kategori</label>
                                    <select class="form-control" name="kateg">
                                        <option value="{{ $target->category->id }}">{{ $target->category->name }}
                                        </option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="row">
                                        <div class="col text-center">
                                            <label for="name">Jumlah Barang</label>
                                            <input type="number" class="form-control" min="0"
                                                oninput="validity.valid||(value='');" id="name" autocomplete="off"
                                                value="{{ $target->qty }}" name="jumlah">
                                        </div>
                                        <div class="col text-center">
                                            <label for="name">Harga Barang</label>
                                            <input type="number" class="form-control" min="0"
                                                oninput="validity.valid||(value='');" id="name" autocomplete="off"
                                                value="{{ $target->price }}" name="harga">
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="modal-footer">
                                <a href="/daftar-barang" class="btn btn-secondary">Close</a>
                                <input type="submit" class="btn {{ $aksi == 'edit' ? 'btn-primary' : 'btn-danger' }}"
                                    value="{{ $aksi == 'edit' ? 'Simpan' : 'Hapus' }}">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif
@endif --}}

<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid p-2">
                    <form action="/daftar-barang/baru" method="POST" class="user">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Barang</label>
                            <input type="text" class="form-control" id="name" name="nama" autocomplete="off"
                                placeholder="Nama Barang">
                        </div>
                        <div class="form-group">
                            <label for="kateg">Kategori</label>
                            <select class="form-control" name="kateg">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="col text-center">
                                <label for="name">Jumlah Barang</label>
                                <input type="number" class="form-control" min="0"
                                    oninput="validity.valid||(value='');" id="name" autocomplete="off"
                                    placeholder="Jumlah Produk" name="jumlah">
                            </div>
                            <div class="col text-center">
                                <label for="name">Harga Barang</label>
                                <input type="number" class="form-control" min="0"
                                    oninput="validity.valid||(value='');" id="name" autocomplete="off"
                                    placeholder="Harga Produk" name="harga">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Tambahkan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- edit --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid p-2">
                    <form action="/daftar-barang/edit" method="POST" class="user">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Barang</a></label>
                            <input type="text" class="form-control" id="id" name="id"
                                autocomplete="off" readonly hidden>
                            <input type="text" class="form-control" id="name" name="nama"
                                autocomplete="off" required >
                        </div>
                        <div class="form-group">
                            <label for="kateg">Kategori</label>
                            <select class="form-control" name="kateg">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="col text-center">
                                <label for="name">Jumlah Barang</label>
                                <input type="number" class="form-control" id="jumlah" autocomplete="off"
                                    placeholder="Jumlah Produk" name="jumlah" required>
                            </div>
                            <div class="col text-center">
                                <label for="name">Harga Barang</label>
                                <input type="number" class="form-control" id="harga" autocomplete="off"
                                    placeholder="Harga Produk" name="harga" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Edit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- hapus --}}
<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Barang</h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid p-2">
                    <form action="/daftar-barang/hapus" method="POST" class="user">
                        @csrf
                        <div class="form-group">
                            <label id="name">Apakah anda yakin ingin menghapus barang</label>
                            <input type="text" class="form-control" id="id" name="id"
                                autocomplete="off" readonly hidden>
                            {{-- <input type="text" class="form-control" id="name" name="nama" autocomplete="off"
                                required> --}}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-danger" value="Hapus">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

