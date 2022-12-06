$(document).ready(function () {    
    $.ajax({
        url: "../LOGICA/consultas/cargarPaises.php",
        type: "POST",
        success: function (response) {
            var paises = JSON.parse(response);
            resHTML = `<option selected disabled>--Elija una Pais--</option>`;
            paises.forEach(res => {
                resHTML += `
                    <option value="${res.id}">${res.pais}</option>
                `
            })            
            $('#selectPais').html(resHTML);
        }
    });

    $('#selectPais').change(function (e) { 
        var idPais = $('#selectPais').val();
        console.log(idPais);
        $.ajax({
            url: "../LOGICA/consultas/cargarDepartamentos.php",
            type: "POST",
            data: { idPais },
            success: function (response) {
                var dep = JSON.parse(response);
                resHTML = `<option selected disabled>--Elija una Departamento--</option>`;
                dep.forEach(res => {
                    resHTML += `
                    <option value="${res.id}">${res.nombre}</option>
                `
                })
                $('#depar').html(resHTML);
            }
        });        
        
    });

    $('#depar').change(function (e) {
        var idDepar = $('#depar').val();
        console.log(idDepar);
        $.ajax({
            url: "../LOGICA/consultas/cargarProvincias.php",
            type: "POST",
            data: { idDepar },
            success: function (response) {
                var prov = JSON.parse(response);
                resHTML = `<option selected disabled>--Elija una Provincia--</option>`;
                prov.forEach(res => {
                    resHTML += `
                    <option value="${res.id}">${res.nombre}</option>
                `
                })
                $('#provincia').html(resHTML);
            }
        });

    });
    


    //Formulario Registro 
    $('#formRegistro').submit(function (e) {
        var nomUser = $('#nomUser').val();
        var apeUser = $('#apeUser').val();
        var emailUser = $('#emailUser').val();
        var tagUser = $('#tagUser').val();
        var edad = $('#edad').val();
        var telefono = $('#telefono').val();
        var provincia = $('#provincia').val();
        var password = $('#password').val();

        var data = { nomUser, apeUser, edad, tagUser, emailUser, telefono, provincia, password};

        $.ajax({
            type: "POST",
            url: "../LOGICA/Registro/guardarUsuario.php",
            data: data,
            success: function (response) {
                var res = JSON.parse(response);
                if (res.valor) {
                    $.post("error/confirm.php",
                        function (response) {
                            $('#confirmacion').html(response);
                            setTimeout(function () {
                                $('#confirmacion').fadeOut(1500);
                            }, 3000);
                        }
                    );
                } else {
                    $.post("error/errorRegistro.php", 
                        function (response) {
                            $('#confirmacion').html(response);
                            setTimeout(function () {
                                $('#confirmacion').fadeOut(1500);
                            }, 3000);
                        }
                    );
                }
            }
        });
        e.preventDefault();
        $('formRegistro').trigger('reset');
    });
})