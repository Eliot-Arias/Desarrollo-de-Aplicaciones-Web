<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte AJAX</title>
    <link rel="stylesheet" href="CSS/celurean/bootstrap.min.css">
    <script src="../jquery-3.6.1.min.js"></script>
    <script>
        function enviarIdEspe(valor) {
            var param = {
                'valor': valor
            };
            $('#tblReporte').html('<img src="loader.gif" alt="loading"/><br/><h3>Un momento, por favor...</h3>');
            $.ajax({
                data: param,
                url: "reporte.php",
                type: "post",
                success: function(res) {
                    $('#tblReporte').html(res);
                }
            });
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="card text-center col-md-6">
                <div class="card-header">
                    <h1>Generación de reporte por Especialidad</h1>
                </div>
                <div class="card-body">
                    <p>Seleccione Especialidad</p>

                    <div class="form-group">
                        <select name="select" id="select" onchange="enviarIdEspe($('#select').val())">
                            <?php
                            include('db.php');
                            $sql = "SELECT * FROM `especialidad`";
                            $rows = DB::ejectConsult($sql);
                            foreach ($rows as $row) { ?>
                                <option value="<?php echo $row[0] ?>"> <?php echo $row[1]; ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <table id="tblReporte" class="table table-hover table-striped table-responsive table-dark text-center mt-3">

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>