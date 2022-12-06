<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Desarrollo-de-Aplicaciones-Web/TrabajoFinal/version-2.1/PRESENTACION/TEMPLATE/header.php";
session_start();
?>
<div class="container">
    <div class="row">
        <div class="jumbotron text-center">
            <h1 class="display-3" id="user"></h1>
            <p class="lead">Info de Usuario

            </p>
            <hr class="my-2">
            <p></p>
            <p class="lead">
                <button class="btn btn-dark btn-lg" href="index.php" role="button" id="cerrarSesion">Cerrar Sesion</button>
            </p>
        </div>
        <div class="col-sm-12">
            <table class="table table-sm table-hover table-striped table-responsive table-dark text-center">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Edad</th>
                        <th>Correo</th>
                        <th>Nombre de Usuario</th>
                        <th>Password(Encriptada)</th>
                        <th>Telefono</th>
                    </tr>
                </thead>
                <tbody id="infoUsuario">
                    
                </tbody>
            </table>
        </div>
    </div>
    .
</div>



<script src="JS/principal.js"></script>
<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Desarrollo-de-Aplicaciones-Web/TrabajoFinal/version-2.1/PRESENTACION/TEMPLATE/footer.php";
?>