var editModal = document.getElementById('editModal')
editModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget
    var id = button.getAttribute('data-bs-whatever')
    var kode = button.getAttribute('data-bs-code')
    var name = button.getAttribute('data-bs-name')
    var kateg = button.getAttribute('data-bs-kateg')
    var jumlah = button.getAttribute('data-bs-qty')
    var inputkode = editModal.querySelector('.modal-body input#kode')
    var inputID = editModal.querySelector('.modal-body input#id')
    var inputname = editModal.querySelector('.modal-body input#name')
    var kategs = editModal.querySelectorAll('.modal-body select option')
    var jumlahs = editModal.querySelector('.modal-body input#jumlah')
    jumlahs.value = jumlah
    inputkode.value = kode
    kategs.forEach(element => {
        if (element.innerHTML == kateg) {
            element.setAttribute('selected', true)
        }else{
            element.removeAttribute('selected')
        }
    });
    inputID.value = id
    inputname.value = name
})

var hapusModal = document.getElementById('hapusModal')
hapusModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget
    var id = button.getAttribute('data-bs-hapus')
    var nama = button.getAttribute('data-bs-nama')
    var inputID = hapusModal.querySelector('.modal-body input#id')
    var inputnama = hapusModal.querySelector('.modal-body label#name')
    inputID.value = id
    inputnama.textContent = "Apakah anda yakin ingin menghapus barang " + nama
});
