<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte AJAX</title>
    <link rel="stylesheet" href="celurean/bootstrap.min.css">
    <script src="../jquery-3.6.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#espe').keyup(function(e) {
                var buscar = $('#espe').val();
                $.ajax({
                    url: 'buscador.php',
                    type: 'POST',
                    data: {buscar},
                    success: function(responde) {
                        $('#tblReporte').html(responde);
                    }
                })
            })
        })
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
                    <div class="form-group">
                        <label for="espe">Busque una Especialidad</label>
                        <input type="text" class="form-control" name="espe" id="espe" aria-describedby="helpId" placeholder="">
                    </div>
                    <table id="tblReporte" class="table table-hover table-striped table-responsive table-dark text-center mt-3">

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>