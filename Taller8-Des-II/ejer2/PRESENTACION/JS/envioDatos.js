$(document).ready(function () {
    console.log("document.ready2");

    
    
    $('#form').submit(function (e) {
        var nomUser = $('#nombreUsuario').val();
        var pwd = $('#password').val();
        var provincia = $('#selectProvincia').val();

        data = {nomUser, pwd, provincia}

        $.post("../../LOGICA/guardarUsuario.php", data,
            function (response) {
                console.log(response);
            }
        );
        $('#form').trigger('reset');
        e.preventDefault();
    });



});