<?php
include('../template/header.php');
?>

<div class="container">
    <div class="row">
        <div class="jumbotron">
            <h1 class="display-2 text-center">Listado de Cursos</h1>
            <hr class="my-2">
            <a class="btn btn-outline-dark" href="" role="button">Registrar Nuevo</a>
            <hr class="my-2">
        </div>
        <table id="tablaPresentar" class="table table-hover table-striped table-responsive table-dark text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Horas</th>
                    <th>Ciclo</th>
                    <th>ID Especialidad</th>
                </tr>
            </thead>
            <tbody id="contenidoTbl">

            </tbody>
        </table>
    </div>
</div>

<?php
include('../template/footer.php');
?>