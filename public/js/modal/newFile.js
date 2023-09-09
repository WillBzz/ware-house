exampleModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;
    var id = button.getAttribute('data-bs-whatever');
    var name = button.getAttribute('data-bs-name');
    var inputID = exampleModal.querySelector('.modal-body input#id');
    inputID.value = id;
});
