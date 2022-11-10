<?php
include('template/header.php');
$nom = "";
$monto = "";
if (isset($_POST['nomProducto'])) {
    $nom = $_POST['nomProducto'];
    $monto = $_POST['monto'];
}
if ($nom != "") {
    $sql = "INSERT INTO `producto` (`nombre`, `monto`) VALUES ( '$nom', '$monto');";
    DB::ejectOperation($sql);
}
?>

<div class="container d-flex justify-content-center mt-5">
    <div class="col-md-5 mt-5">
        <div class="card">
            <div class="card-header text-center ">
                <h1 class="mb-0">Registro de nuevo Producto</h1>
            </div>
            <div class="card-body">
                <form action="registrarProducto.php" method="POST" autocomplete="on">
                    <div class="form-group">
                        <label for="nomProducto">Nombre Producto</label>
                        <input type="text" name="nomProducto" class="form-control" id="nomProducto" placeholder="Ingrese Nombre">
                        <!--small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</!--small-->
                    </div>
                    <div class="form-group">
                        <label for="monto">Monto</label>
                        <input type="text" name="monto" class="form-control" id="monto" placeholder="Ingrese Monto">
                    </div>
                    <div class="form-group">
                    </div>
                    <div class="form-group text-center mt-3">
                        <button type="submit" class="btn btn-form btn-primary ">Registrar</button>
                        <a name="" id="" class="btn btn-primary" href="listarProducto.php" role="button">Ver Lista</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>