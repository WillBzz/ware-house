{{-- edit modal --}}
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Akun Pegawai</h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid p-2">
                    <form action="/data-pegawai/detail" method="POST" class="user">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Akun</label>
                            <input type="text" class="form-control" id="id" name="id" autocomplete="off" readonly hidden>
                            <input type="text" class="form-control" id="name" name="nama" autocomplete="off" readonly>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
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
                <h5 class="modal-title" id="exampleModalLabel">Blokir Akun Pegawai</h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid p-2">
                    <form action="/data-pegawai/hapus" method="POST" class="user">
                        @csrf
                        <div class="form-group">
                            <label id="name"></label>
                            <input type="text" class="form-control" id="id" name="id" autocomplete="off" readonly hidden>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <input type="submit" class="btn btn-danger" value="Blokir">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
