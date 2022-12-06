$(document).ready(function () {
    console.log("JQuery is ready");

    ingreso();
    function ingreso() {
        $.ajax({
            type: "POST",
            url: "titulos/ingresoP.php",
            success: function (response) {
                $("#tituloForm").html(response);
            },
        });
        $.ajax({
            type: "POST",
            url: "formularios/ingreso.php",
            success: function (response) {
                $("#tipoForm").html(response);
            },
        });
        console.log("asdasd");
        $('#formIngreso').submit(function (e) {
            var tagUser = $('#tagUser').html();
            var psw = $('#password').html();
            data = { tagUser: tagUser, psw: psw }
            $.ajax({
                type: "POST",
                url: "../../LOGICA/Validacion/validarIngreso.php",
                data: data,
                success: function (response) {
                    console.log(response);
                }
            });

            e.preventDefault();

        });
    }
    
    $(document).on('click', '#linkRegistro',function (e) {
        $.ajax({
            type: "POST",
            url: "titulos/registroP.php",
            success: function (response) {
                $("#tituloForm").html(response);
            },
        });
        $.ajax({
            type: "POST",
            url: "formularios/registro.php",
            success: function (response) {
                $("#tipoForm").html(response);
            },
        });
        e.preventDefault();        
    });

    $(document).on('click', '#linkIngreso', function (e) {
        ingreso();
        e.preventDefault(); 
    });

    

});


