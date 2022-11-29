<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/celurean/bootstrap.min.css">
    <script src="../JS/jquery-3.6.1.min.js"></script>
    <script src="../JS/select.js"></script>
    <title>Ejercicio: 1</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="jumbotron">
                <h1 class="display-2 text-center">Ejercicio Ajax - JSON</h1>
                <hr class="my-2">
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Selects en Cascada</h1>
                    </div>
                    <div class="card-body">
                        <form action="" id="form" autocomplete="on">
                            <div class="form-group">
                                <label for="">Seleccione Familia</label>
                                <select class="form-control" onchange="enviarIdFamilia($('#selectFamilia').val())" name="" id="selectFamilia">
                                    <option selected disabled>-- FAMILIA --</option>
                                    <?php
                                    include('../DB/DB.php');
                                    $db = new db();
                                    $cnn = $db->connect();
                                    $sql = "SELECT * FROM `familia`";
                                    $rows = $cnn->query($sql);
                                    foreach ($rows as $row) { ?>
                                        <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Seleccione Categoria</label>
                                <select class="form-control" onchange="enviarIdCategoria($('#selectCategoria').val())" name="" id="selectCategoria">                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Seleccione Producto</label>
                                <select class="form-control" onchange="" name="" id="selectProducto">
                                    <option selected disabled>-- PRODUCTO --</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <!-- <div class="card-footer text-muted">
                        Footer
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>