<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Desarrollo-de-Aplicaciones-Web/TrabajoFinal/version-2.1/PRESENTACION/TEMPLATE/header.php";
?>



<div class="container">
    <div class="row">
        <div class="jumbotron text-center" id="tituloForm">
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <div class="card" id="tipoForm">
                <div class="card-body">
                    <form action="" id="formRegistro">
                        <div class="form-group">
                            <label for="nomUser">Nombres</label>
                            <input type="text" name="" id="nomUser" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="apeUser">Apellidos</label>
                            <input type="text" name="" id="apeUser" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="tagUser">Nombre de Usuario</label>
                            <input type="text" name="" id="tagUser" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="emailUser">Correo Electronico</label>
                            <input type="email" name="" id="emailUser" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" name="" id="telefono" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="selectPais">Pais</label>
                            <select class="form-control" name="" id="selectPais">

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="depar">Departamento</label>
                            <select class="form-control" name="" id="depar">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="provincia">Provincia</label>
                            <select class="form-control" name="" id="provincia">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="password">Ingrese Contraseña</label>
                            <input type="password" class="form-control" name="" id="password" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="passwordConfirm">Repita la Contraseña</label>
                            <input type="password" class="form-control" name="" id="passwordConfirm" placeholder="">
                            <hr class="my-3">
                        </div>
                        <div class="form-group mt-3 d-grid">
                            <button type="button" name="" id="" class="btn btn-dark" btn-lg btn-block">Registrarse Ahora</button>
                            <p class="text-center mt-2">¿Ya esta registrado? <a class="link" href="" id="linkIngreso">Ingresar</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Desarrollo-de-Aplicaciones-Web/TrabajoFinal/version-2.1/PRESENTACION/TEMPLATE/footer.php";
?>