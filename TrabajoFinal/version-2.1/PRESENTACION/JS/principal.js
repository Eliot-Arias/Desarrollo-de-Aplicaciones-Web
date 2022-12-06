$(document).ready(function () {
    var User = localStorage.getItem('Usuario');
    var data = {'User': User}    
    infoUser();



    function infoUser(){
        var saludo = "Bienvenido " + User;
        $('#user').html(saludo);

        $.post("../LOGICA/consultas/infoUsuario.php", data,
            function (response) {
                var info = JSON.parse(response);
                var resHTML = `
                    <tr>
                        <td>${info.Nombres}</td>
                        <td>${info.Apellidos}</td>
                        <td>${info.Edad}</td>
                        <td>${info.Correo}</td>
                        <td>${info.Nombre_Usuario}</td>
                        <td>${info.Password}</td>
                        <td>${info.Telefono}</td>
                    </tr>
                `;
                console.log(resHTML);
                $('#infoUsuario').html(resHTML);
            },
        );
    }

    $('#cerrarSesion').on('click', function () {
        localStorage.removeItem('Usuario');
        window.location.replace("http://localhost/Desarrollo-de-Aplicaciones-web/TrabajoFinal/version-2.1/PRESENTACION/index.php")
    });

});