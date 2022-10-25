<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/morph/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <title>Ingreso</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">                
            </div>
            <div class="col-md-6">
                <br>
                <br>
                <br>
                <br>
                <div class="card">
                    <div class="card-header"><h4>Ingreso</h4></div>
                    <div class="card-body">
                        <form class="" action="index.php" method="POST" autocomplete="on">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre de Usuario</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Usuario">
                                <!--small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</!--small-->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                            </div>
                            <div class="form-check">
                                <!--input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label-- class="form-check-label" for="exampleCheck1">Recordarme</label-->
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-form btn-primary">Ingresar</button>                                
                            </div>
                            <div class="form-group pregunta">
                                <br>
                                <p>¿No esta registrado? <a class="link" href="registro.php">Registrarse</a> </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>