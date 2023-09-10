var detailModal = document.getElementById('detailModal')
detailModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget
    var id = button.getAttribute('data-bs-detail')
    var nama = button.getAttribute('data-bs-nama')
    var inputID = detailModal.querySelector('.modal-body input#id')
    var inputnama = detailModal.querySelector('.modal-body input#name')
    inputID.value = id
    inputnama.value = nama
});

var hapusModal = document.getElementById('hapusModal')
hapusModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget
    var id = button.getAttribute('data-bs-hapus')
    var nama = button.getAttribute('data-bs-nama')
    var inputID = hapusModal.querySelector('.modal-body input#id')
    var inputnama = hapusModal.querySelector('.modal-body label#name')
    inputID.value = id
    inputnama.textContent = "Apakah anda yakin ingin memblokir " + nama
});
