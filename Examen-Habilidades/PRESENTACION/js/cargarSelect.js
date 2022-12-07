$(document).ready(function () {    
    $.ajax({
        url: "../Logica/listarEspe.php",
        type: "POST",
        success: function (response) {
            var espe = JSON.parse(response);
            resHTML = `<option selected disabled>--Elija una Especialidad--</option>`;
            espe.forEach(res => {
                resHTML += `
                    <option value="${res.id}">${res.nombre}</option>
                `
            })
            $('#selectEspe').html(resHTML);
        }
    });

    $('#formCurso').submit(function (e) { 
        var nombre = $('#curso').val();
        var idEspe = $('#selectEspe').val();
        var data = {
            nombre: nombre,
            idEspe: idEspe
        }
        console.log(data);
        $.ajax({
            type: "POST",
            url: "../Logica/guardarCurso.php",
            data: data,
            success: function (response) {
                var result = JSON.parse(response);
                if(result.valor){
                    $.post("mensaje/registroExitoso.php", 
                        function (response) {
                            $('#mensaje').html(response);
                        }
                    );
                }else{
                    $.post("mensaje/error.php",
                        function (response) {
                            $('#mensaje').html(response);
                        }
                    );
                }

            }
        });        
        e.preventDefault();
        
    });
});