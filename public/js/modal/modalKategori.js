var editModal = document.getElementById('editModal')
editModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget
    var id = button.getAttribute('data-bs-edit')
    var nama = button.getAttribute('data-bs-nama')
    var inputID = editModal.querySelector('.modal-body input#id')
    var inputnama = editModal.querySelector('.modal-body input#name')
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
    inputnama.textContent = "Apakah anda yakin ingin menghapus kategori " + nama
});

