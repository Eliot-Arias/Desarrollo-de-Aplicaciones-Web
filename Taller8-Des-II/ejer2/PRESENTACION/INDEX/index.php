<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/celurean/bootstrap.min.css">
    <script src="../JS/jquery-3.6.1.min.js"></script>
    <script src="../JS/select.js"></script>
    <script src="../JS/envioDatos.js"></script>
    <title>Usuarios</title>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-2 text-center">Ejercicio Ajax - JSON</h1>
            <hr class="my-2">
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Selects en Cascada</h1>
                    </div>
                    <div class="card-body">
                        <form action="" id="form" autocomplete="on">
                            <div class="form-group">
                                <label for="nombreUsuario">Nombres</label>
                                <input type="text" name="nombreUsuario" id="nombreUsuario" class="form-control" placeholder="" aria-describedby="helpId" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId" required>
                            </div>
                            <div class="form-group">
                                <label for="">Seleccione Pais</label>
                                <select class="form-control" onchange="enviarIdPais($('#selectPais').val())" name="pais" id="selectPais">
                                    <option selected disabled>-- Paises --</option>
                                    <?php
                                    include('../../DATOS/DB.php');
                                    $db = new db();
                                    $cnn = $db->connect();
                                    $sql = "SELECT * FROM `pais`";
                                    $rows = $cnn->query($sql);
                                    foreach ($rows as $row) { ?>
                                        <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Seleccione Departamento</label>
                                <select class="form-control" onchange="enviarIdDepartamento($('#selectDepartamento').val())" name="departamento" id="selectDepartamento">
                                    <option selected disabled>-- Departamentos --</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Seleccione Provincia</label>
                                <select class="form-control" onchange="" name="provincia" id="selectProvincia">
                                    <option selected disabled>-- Provincias --</option>
                                </select>
                            </div>
                            <hr class="my-3">
                            <div class="form-group d-grid">
                                <button type="submit" name="" id="" class="btn btn-block btn-primary" btn-lg btn-block">Registrar Usuario</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>