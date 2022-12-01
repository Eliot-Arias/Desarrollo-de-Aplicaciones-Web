$(document).ready(function () {
    console.log("jquery2 is ready");



    $('#formRegistro').submit(function (e) {
        e.preventDefault();
        var nomUser = $('#nomUser').val();
        var pwd = $('#password').val();
        var provincia = $('#tagUser').val();

        data = { nomUser, pwd, provincia }

        $.post("../../LOGICA/guardarUsuario.php", data,
            function (response) {
                console.log(response);
            }
        );
        $('#formRegistro').trigger('reset');
    });

});