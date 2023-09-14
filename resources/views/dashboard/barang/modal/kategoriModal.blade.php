{{-- tambah modal --}}
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid p-2">
                    <form action="/kategori-barang/tambah" method="POST" class="user">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Kategori</label>
                            <input type="text" class="form-control" id="name" name="nama" autocomplete="off" required placeholder="Nama Kategori">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- edit modal --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid p-2">
                    <form action="/kategori-barang/edit" method="POST" class="user">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Kategori</label>
                            <input type="text" class="form-control" id="id" name="id" autocomplete="off" readonly hidden>
                            <input type="text" class="form-control" id="name" name="nama" autocomplete="off" required>
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

{{-- hapus modal --}}
<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Kategori</h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid p-2">
                    <form action="/kategori-barang/hapus" method="POST" class="user">
                        @csrf
                        <div class="form-group">
                            <label id="name"></label>
                            <input type="text" class="form-control" id="id" name="id" autocomplete="off" readonly hidden>
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
