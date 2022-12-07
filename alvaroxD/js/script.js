$(document).ready(function () {
    $.post("listarEspe.php", 
        function (response) {
            var resHTML = `
                <option selected disabled>--Seleccione Una Especialidad</option>
            `;
            response.forEach(res => {
                resHTML += `
                <option value="${res.id}">${res.nombre}</option>
                `
            });
            $('#idEspe').html(resHTML);
        },
        "json"
    );

    $('#formulario').submit(function (e) { 
        var nombre = $('#nombreCurso').val();
        var idEspe = $('#idEspe').val();
        var data = {
            "nomCurso" : nombre,
            "idEspe" : idEspe
        };
        $.ajax({
            type: "POST",
            url: "guardarCurso.php",
            data: data,
            dataType: "json",
            success: function (response) {
                if (response.valor) {
                    $.post("mensaje.php",
                        function (response) {
                            $('#mensaje').html(response);
                        }
                    );
                } else {
                    
                }
            }
        });
        

        e.preventDefault();
        
    });

    
});