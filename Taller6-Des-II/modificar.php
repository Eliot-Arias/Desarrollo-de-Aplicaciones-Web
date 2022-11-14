<?php
include('template/header.php');
$id = $_GET['id'];
$rows = DB::ejectConsult("SELECT * FROM `persona` WHERE id_persona=$id;");
if(isset($_POST['nomUser'])) {
    $nom = $_POST['nomUser'];
    $ape = $_POST['apeUser'];
    $dni = $_POST['dni'];
    $sql = "UPDATE `persona` SET nombres='$nom', apellidos='$ape', dni='$dni' WHERE id_persona=$id;";
    DB::ejectOperation($sql);
}
?>

<div class="container d-flex justify-content-center mt-5">
    <div class="col-md-5 mt-5">
        <div class="card">
            <div class="card-header text-center ">
                <h1 class="mb-0">Modificar registro </h1>
            </div>
            <div class="card-body">
                <form action="" method="POST" autocomplete="on">
                    <?php foreach ($rows as $row) { ?>
                        <div class="form-group">
                            <label for="nomUser">Nombres</label>
                            <input type="text" name="nomUser" class="form-control" value="<?php echo $row[1] ?>" id="nomUser" placeholder="Ingrese Nombres">
                            <!--small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</!--small-->
                        </div>
                        <div class="form-group">
                            <label for="apeUser">Apellidos</label>
                            <input type="text" name="apeUser" class="form-control" value="<?php echo $row[2] ?>" id="apeUser" placeholder="Ingrese Apellidos">
                        </div>
                        <div class="form-group">
                            <label for="dni">DNI</label>
                            <input type="text" name="dni" class="form-control" value="<?php echo $row[3] ?>" id="dni" placeholder="Ingrese Dni">
                        </div>
                    <?php } ?>
                    <div class="form-group">
                    </div>
                    <div class="form-group text-center mt-3">
                        <button type="submit" class="btn btn-form btn-primary ">Modificar</button>
                        <a name="" id="" class="btn btn-primary" href="listar.php" role="button">Ver Lista</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>