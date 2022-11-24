$(document).ready(function () {

    var editar = false;

    tablaEspe();
    $('#form').submit(function (e) {
        var datosEspe = {
            nomEspe: $('#nomEspe').val(),
            desEspe: $('#desEspe').val(),
            idEspe: $('#idEspe').val()
        };

        var url = editar == false ? '../../LOGICA/guardarEspe.php' : '../../LOGICA/modificarEspe.php';

        $.post(url, datosEspe, function (response) {
            console.log(response);
            tablaEspe();
            $('form').trigger('reset');
        });
        e.preventDefault();
    });





    function tablaEspe() {
        $.ajax({
            url: '../js/listar.php',
            type: 'POST',
            success: function (response) {
                $('#contenidoTblEspe').html(response);
            }
        });
    }

    $(document).on('click', '.eliminar-espe', function () {
        if (confirm('En verdad deseas eliminar esta especialidad de la tabla..???')) {
            var btn = $(this)[0].parentElement.parentElement;
            var id = $(btn).attr('idEspe');
            $.post('../../LOGICA/borrarEspe.php', { id }, function (response) {
                tablaEspe()
                console.log(response);
            });
        }
    })
    $(document).on('click', '.modificar-espe', function () {        
        var btn = $(this)[0].parentElement.parentElement;
        var id = $(btn).attr('idEspe');
        $.post('../../LOGICA/Espe.php', { id }, function(response){
            const especialidad = JSON.parse(response);
            $('#nomEspe').val(especialidad.nombre);
            $('#desEspe').val(especialidad.descripcion);
            $('#idEspe').val(especialidad.ID);
            editar = true;
        });
        
    })


});