{{-- tambah Peminjaman --}}
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Peminjaman</h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid p-2">
                    <form action="{{ route('peminjam.tambah') }}" method="POST" class="user">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Peminjam</label>
                            <input type="text" class="form-control" id="name" name="nama" autocomplete="off"
                                required placeholder="Nama Peminjam">
                        </div>
                        <div class="form-group">
                            <label for="product">Nama Barang</label>
                            <select class="form-control" name="product">
                                @foreach ($products as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="name">Jumlah</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" autocomplete="off"
                                required placeholder="Jumlah">
                        </div>
                        <div class="form-group">
                            <label for="name">Tanggal Pinjam</label>
                            <input type="date" class="form-control" id="tgpm" name="tgpm" autocomplete="off"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="name">Tanggal Kembali</label>
                            <input type="date" class="form-control" id="tgkm" name="tgkm" autocomplete="off"
                                required>
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
