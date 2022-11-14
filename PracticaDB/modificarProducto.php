<?php
include('template/header.php');
$id = $_GET['id'];
$rows = DB::ejectConsult("SELECT * FROM `producto` WHERE id_producto=$id;");
if (isset($_POST['nomProducto'])) {
    $nom = $_POST['nomProducto'];
    $monto = $_POST['monto'];
    $sql = "UPDATE `producto` SET `nombre` = '$nom', `monto` = '$monto' WHERE `producto`.`id_producto` = $id;";
    DB::ejectOperation($sql);
    header("location: http://localhost/Desarrollo%20de%20Aplicaciones%20web/practicadb/listarProducto.php");
}
?>

<div class="container d-flex justify-content-center mt-5">
    <div class="col-md-5 mt-5">
        <div class="card">
            <div class="card-header text-center ">
                <h1 class="mb-0">Modificar producto</h1>
            </div>
            <div class="card-body">
                <form action="" method="POST" autocomplete="on">
                    <?php foreach ($rows as $row) { ?>
                        <div class="form-group">
                            <label for="nomProducto">Nombre del Producto</label>
                            <input type="text" name="nomProducto" class="form-control" value="<?php echo $row[1] ?>" id="nomProducto" placeholder="Ingrese Nombres">
                            <!--small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</!--small-->
                        </div>
                        <div class="form-group">
                            <label for="monto">Monto</label>
                            <input type="text" name="monto" class="form-control" value="<?php echo $row[2] ?>" id="monto" placeholder="Ingrese Apellidos">
                        </div>
                    <?php } ?>
                    <div class="form-group">
                    </div>
                    <div class="form-group text-center mt-3">
                        <button type="submit" class="btn btn-form btn-primary ">Modificar</button>
                        <a name="" id="" class="btn btn-primary" href="listarProducto.php" role="button">Ver Lista</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>