<?php


$usuario = 'root';
$contraseña = '';



try {
    $cn = new PDO("mysql:host=localhost;dbname=tareadb", $usuario, $contraseña);
    $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if (isset($_POST['nombresUsuario'])){
        $nombreUsuario = $_POST['nombresUsuario'];
        $apellidoUsuario = $_POST['apellidosUsuario'];
        $sexo = $_POST['sexo'];

        $sql = "INSERT INTO cliente(nombres, apellidos, sexo) VALUES (:n , :d, :t)"; //Variables escalares... ::Importante

        $ps = $cn -> prepare($sql);
        $ps -> bindParam(':n', $nombreUsuario);
        $ps -> bindParam(':d', $apellidoUsuario);
        $ps -> bindParam(':t', $sexo);
        $ps -> execute();
    }
    // header("Location: http://localhost/Desarrollo-de-Aplicaciones-web/guardarCliente.php ");

} catch (PDOException $th) {
    echo '<pre>';
    print_r($th);
    echo '</pre>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="morph/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                
            </div>
            <div class="col-md-6">
                <br/>
                <br/>
                <br/>
                <br/>
                <div class="card">
                    <div class="card-header text-center h2">Insercion</div>
                    <div class="card-body">
                        <form action="guardarCliente.php" method="POST" autocomplete="on">
                            <div class="form-group">
                                <label for="nombresUsuario">Nombres</label>
                                <input type="text" name="nombresUsuario" class="form-control" id="nombresUsuario" placeholder="Ingrese Nombres">
                            </div>
                            <div class="form-group">
                                <label for="Apellidos">Apellidos</label>
                                <input type="text" name="apellidosUsuario" class="form-control" id="Apellidos" placeholder="Ingrese Apellidos">
                            </div>
                            <br>
                            <div class="form-group text-center">
                                <label >Sexo: </label>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary primary">
                                        Masculino
                                        <input type="radio" name="sexo" id="" value="1">
                                    </label>
                                    <label class="btn btn-primary">
                                        Femenino
                                        <input type="radio" name="sexo" id="" value="0">
                                    </label>
                                </div>
                            </div>                            
                            <br>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-form btn-primary">Guardar</button>
                                <a class="btn btn-form btn-primary" href="listarClientes.php">Ver Lista</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
