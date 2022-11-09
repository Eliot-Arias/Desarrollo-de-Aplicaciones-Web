<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/morph/bootstrap.min.css">
    <title>Document</title>
</head>
<?php

// $url = 'mysql: host:localhost;bdname=pruebadb';
$usuario = 'root';
$contraseña = '';

try {
    $cn = new PDO("mysql:host=localhost;dbname=pruebadb", $usuario, $contraseña);
    $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM `especialidad`";

    // $rows = $cn -> query($sql);
    // $rows->execute();

    // $filas = $rows->fetchAll();
?>
<body>
    <div class="container">
        <br>
        <br>
        
        <a name="" id="" class="btn btn-outline-dark" href="guardarEspe.html" role="button">guardar</a>
        <br>
        <br>
        <div class="row">
            <table class="table table-hover table-striped table-responsive table-dark text-center">
                <thead class="">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Modificar</th>
                        <th scope="col">Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $rows = $cn -> query($sql);
                    foreach ($rows as $row) {?>
                        <tr>
                            <th scope="row" idEspe="<?php echo $row[0]; ?>"><?php echo $row[0];?></th>
                            <td><?php echo $row[1];?></td>
                            <td><?php echo $row[2];?></td>
                            <td><a class="btn btn-dark btn-sm" role="button">modificar</a></td>
                            <td><a class="btn btn-dark btn-sm" role="button">eliminar</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>     
    

<?php
} catch (PDOException $th) {
    echo '<pre>';
    print_r($th);
    echo '</pre>';
}
?>

