<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/celurean/bootstrap.min.css">
    <script src="js/jquery-3.6.1.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="jumbotron text-center mb-4">
                <h1 class="display-3">Modulo de Insercion de Cursos</h1>
                <hr class="my-2">
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-body">
                        <form action="" id="formCurso" autocomplete="on">
                            <div class="form-group">
                                <label for="curso">Nombre</label>
                                <input type="text" class="form-control" name="" id="curso" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="selectEspe">Especialidad</label>
                                <select class="form-control" name="" id="selectEspe">
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <div id="mensaje">

                                </div>
                            </div>
                            <div class="form-group mt-4 text-center">
                                <button type="submit" name="" id="" class="btn btn-dark" btn-lg btn-block">Guardar Curso</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/cargarSelect.js"></script>
</body>

</html>