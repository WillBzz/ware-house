@if (isset($aksi))
    <div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true"
        style="display: block">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Akun Pegawai</h5>
                </div>
                <div class="modal-body">
                    <div class="container-fluid p-2">
                        <form action="/data-pegawai/hapus/{{ $target->id }}" method="POST" class="user">
                            @csrf
                            <div class="form-group">
                                <label
                                    for="name">{{ 'apakah anda yakin ingin menghapus Data Barang ' . $target->name }}</label>
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
