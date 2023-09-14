
{{-- Tambah --}}
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid p-2">
                    <form action="/daftar-barang/baru" method="POST" class="user">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Barang</label>
                            <input type="text" class="form-control" id="name" name="nama" autocomplete="off" placeholder="Nama Barang">
                        </div>
                        <div class="form-group">
                            <label for="kateg">Kategori</label>
                            <select class="form-control" name="kateg">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                            <div class="form-group">
                                <label for="name">Jumlah Barang</label>
                                <input type="number" class="form-control" min="0" oninput="validity.valid||(value='');" id="name" autocomplete="off" placeholder="Jumlah Produk" name="jumlah">
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <input type="submit" class="btn btn-primary" value="Simpan">
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
                            <label id="name"></label>
                            <input type="text" class="form-control" id="id" name="id"
                                autocomplete="off" readonly hidden>
                            {{-- <input type="text" class="form-control" id="name" name="nama" autocomplete="off"
                                required> --}}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <input type="submit" class="btn btn-danger" value="Hapus">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

