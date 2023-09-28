{{-- tambah modal(register) --}}
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambahkan Akun Pegawai</h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid p-2">
                    <form method="POST" action="/data-pegawai/create">
                        @csrf
                        <form role="form">
                            <div class="form-group mb-5">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <input id="name" name="name" class="form-control" placeholder="Name" type="text" required>
                                </div>
                            </div>
                            <div class="form-group mb-5">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <input id="email" name="email" class="form-control" placeholder="Email" type="email" required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <input id="password" name="password" class="form-control" placeholder="Password" type="password" required>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <input id="password-confirm" name="password_confirmation" class="form-control" placeholder=" Confirm Password" type="password" required>
                                </div>
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
