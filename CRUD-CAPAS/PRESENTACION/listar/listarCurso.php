<?php
include('../template/header.php');
?>

<div class="container">
    <div class="row">
        <div class="jumbotron">
            <h1 class="display-2 text-center">Listado de Cursos</h1>
            <hr class="my-2">
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center ">
                    <h1 class="mb-0">Registrar nuevo Curso</h1>
                </div>
                <div class="card-body">
                    <form action="" id="form" autocomplete="on">
                        <div class="form-group mb-4">
                            <input type="hidden" class="form-control" id="idCurso">
                            <input type="text" class="form-control" id="nomCurso" placeholder="Nombre">
                        </div>
                        <div class="form-group mb-4">
                            <select class="form-control" name="tipoCurso" id="selectTipo">
                                <option selected disabled>--Seleccione el Tipo de Curso--</option>
                                <option value="1">Principales</option>
                                <option value="2">Transversales</option>
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <input type="text" class="form-control" name="horasCurso" id="" aria-describedby="helpId" placeholder="Horas">
                        </div>
                        <div class="form-group mb-4">
                            <input type="text" class="form-control" name="cicloCurso" id="" aria-describedby="helpId" placeholder="Ciclo">
                        </div>
                        <div class="form-group mb-4">
                            <select class="form-control" name="idEspe" id="selectEspe">
                            </select>
                        </div>
                        <hr class="my-2">
                        <div class="form-group mt-2 d-grid">
                            <button type="submit" class="btn btn- btn-primary">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-sm table-hover table-striped table-responsive table-dark text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Horas</th>
                        <th>Ciclo</th>
                        <th>ID Especialidad</th>
                        <th colspan="2">Funciones</th>
                    </tr>
                </thead>
                <tbody id="contenidoTblCurso">

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include('../template/footer.php');
?>