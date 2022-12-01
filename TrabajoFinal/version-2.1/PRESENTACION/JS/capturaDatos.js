$(document).ready(function () {
    console.log("jquery2 is ready");

    $('#formRegistro').submit(function (e) {
        var data = {
            nomUser : $('#nomUser').val(),
        };
        e.preventDefault();
    });

});