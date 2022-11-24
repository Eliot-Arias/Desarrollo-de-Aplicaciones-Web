<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/celurean/bootstrap.min.css">
    <script src="../jquery-3.6.1.min.js"></script>
    <script>
        function enviarIdPlato(valor) {
            var param = {
                'valor': valor
            };
            $.ajax({
                data: param,
                url: "generarReceta.php",
                type: "post",
                success: function(res) {
                    $('#tblReceta').html(res);
                }
            });
        }
    </script>
    <title>Document</title>
</head>

<body>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="card text-center col-md-6">
                    <div class="card-header">
                        <h1>Generar Receta</h1>
                    </div>
                    <div class="card-body">
                        <p>Seleccione Plato</p>
                        <div class="form-group">
                            <select name="select" id="select" onchange="enviarIdPlato($('#select').val())">
                                <?php
                                include('dataConexion.php');
                                $sql = "SELECT * FROM `plato`";
                                $rows = DB::ejectConsult($sql);
                                foreach ($rows as $row) { ?>
                                    <option value="<?php echo $row[0] ?>"> <?php echo $row[1]; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                        <table id="tblReceta" class="table table-hover table-striped table-responsive table-dark text-center mt-3">
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</body>

</html>