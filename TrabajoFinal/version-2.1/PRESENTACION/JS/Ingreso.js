$(document).ready(function () {
    $('#formIngreso').submit(function (e) {
        var tagUser = $('#tagUser').val();
        var pwd = $('#password').val();
        data = {tagUser: tagUser, pwd: pwd}
        $.ajax({
            type: "POST",
            url: "../LOGICA/Validacion/validarIngreso.php",
            data: data,
            success: function (response) {
                var res = JSON.parse(response);
                if (res.valor) {
                    localStorage.setItem("Usuario", tagUser);
                    window.location.replace("http://localhost/Desarrollo-de-Aplicaciones-web/TrabajoFinal/version-2.1/PRESENTACION/principal.php")
                } else {
                    $.post("error/error.php",
                        function (response) {
                            $('#alert').html(response);
                            setTimeout(function () {
                                $('#alert').fadeOut(1500);
                            }, 3000);
                        },
                    );
                }

            }
            
        });        
        e.preventDefault();
        
    });
});