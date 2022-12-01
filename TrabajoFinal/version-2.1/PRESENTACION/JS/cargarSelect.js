$(document).ready(function () {    
    $.ajax({
        url: "../LOGICA/consultas/cargarPaises.php",
        type: "POST",
        success: function (response) {
            var paises = JSON.parse(response);
            resHTML = "";
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
                resHTML = "";
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
                resHTML = "";
                prov.forEach(res => {
                    resHTML += `
                    <option value="${res.id}">${res.nombre}</option>
                `
                })
                $('#provincia').html(resHTML);
            }
        });

    });



})