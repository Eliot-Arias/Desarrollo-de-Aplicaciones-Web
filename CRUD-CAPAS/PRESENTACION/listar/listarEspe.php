<?php
include('../template/header.php');

?>

<div class="container">
    <div class="row">
        <div class="jumbotron">
            <h1 class="display-2 text-center">Listado de Especialidades</h1>
            <hr class="my-2">
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center ">
                    <h1 class="mb-0">Registrar nueva Especialidad</h1>
                </div>
                <div class="card-body">
                    <form action="" id="formEspe" autocomplete="on">
                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="hidden" class="form-control" id="idEspe">
                                <input type="text" class="form-control" id="nomEspe" placeholder="Nombre">
                                <label for="nomEspe">Nombre</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="" id="desEspe" rows="5" placeholder="Especialidad"></textarea>
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
                        <th>Descripcion</th>
                        <th colspan="2">Funciones</th>
                    </tr>
                </thead>
                <tbody id="contenidoTblEspe">

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include('../template/footer.php');
?>
<script src="../js/listarEspe.js"></script>