$(document).ready(function () {
    var editarCurso = false;

    tablaCurso();
    selectCurso();    

    $('#formCurso').submit(function (e) { 
        var datosCurso = {
            nomCurso: $('#nomCurso').val(),
            tipoCurso: $('#selectTipo').val(),
            horas: $('#horasCurso').val(),
            ciclo: $('#cicloCurso').val(),
            idEspe: $('#selectEspe').val(),
        };
        var url = editarCurso == false ? '../../LOGICA/guardarCurso.php' : '../../LOGICA/modificarCurso.php';
        $.post(url, datosCurso,function (response) {
                console.log(url);
                console.log(response);
                tablaCurso();
                $('#formCurso').trigger('reset');
            }
        );
        e.preventDefault();
    });

    function tablaCurso (){
        $.ajax({
            url: "../js/curso.php",
            type: "POST",
            success: function (response) {
                $('#contenidoTblCurso').html(response);
            }
        });
    }

    function selectCurso(){
        $.ajax({
            url: "../../LOGICA/opcionSelect.php",
            type: "POST",
            success: function (response) {
                $('#selectEspe').html(response);
            }
        });
    }

    $(document).on('click', '.eliminar-curso', function () {
        if (confirm('En verdad deseas eliminar este curso de la tabla..??')){
            var btn = $(this)[0].parentElement.parentElement;
            var id = $(btn).attr('idCurso');
            $.post('../../LOGICA/borrarCurso.php', { id }, function (response) {
                tablaCurso();
                console.log(response);
            });
        }
    })

    $(document).on('click', '.modificar-curso',function () {
        var btn = $(this)[0].parentElement.parentElement;
        var id = $(btn).attr('idCurso');
        $.post("../../LOGICA/curso.php", {id}, 
            function (response) {
                const curso = JSON.parse(response);
                console.log(curso);
                $('#idCurso').val(curso.id);
                $('#nomCurso').val(curso.nombre);
                $('#selectTipo').val(curso.tipo);
                $('#horasCurso').val(curso.horas);
                $('#cicloCurso').val(curso.ciclo);
                $('#selectEspe').val(curso.idEspecialidad);
                editarCurso = true;
            } 
        );
    });
});