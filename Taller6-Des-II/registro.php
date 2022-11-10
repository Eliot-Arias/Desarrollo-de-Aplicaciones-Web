<?php
include('template/header.php');
$nom = "";
$ape = "";
$dni = "";
if (isset($_POST[''])) {
    $nom = $_POST['nomUser'];
    $ape = $_POST['apeUser'];
    $dni = $_POST['dni'];
}
if ($nom != "") {    
    $sql = "INSERT INTO `persona` (`NOMBRES`, `APELLIDOS`, `DNI`) VALUES ('$nom', '$ape', '$dni');";
    DB::ejectOperation($sql);
}
?>

<div class="container d-flex justify-content-center mt-5">
    <div class="col-md-5 mt-5">
        <div class="card">
            <div class="card-header text-center ">
                <h1 class="mb-0">Registro de Personas</h1>
            </div>
            <div class="card-body">
                <form action="registro.php" method="POST" autocomplete="on">
                    <div class="form-group">
                        <label for="nomUser">Nombres</label>
                        <input type="text" name="nomUser" class="form-control" id="nomUser" placeholder="Ingrese Nombres">
                        <!--small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</!--small-->
                    </div>
                    <div class="form-group">
                        <label for="apeUser">Apellidos</label>
                        <input type="text" name="apeUser" class="form-control" id="apeUser" placeholder="Ingrese Apellidos">
                    </div>
                    <div class="form-group">
                        <label for="dni">DNI</label>
                        <input type="text" name="dni" class="form-control" id="dni" placeholder="Ingrese Dni">
                    </div>
                    <div class="form-group">
                    </div>
                    <div class="form-group text-center mt-3">
                        <button type="submit" class="btn btn-form btn-primary ">Registrar</button>
                        <a name="" id="" class="btn btn-primary" href="listar.php" role="button">Ver Lista</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>