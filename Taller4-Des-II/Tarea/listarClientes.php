<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="morph/bootstrap.min.css">
    <title>Document</title>
</head>
<?php

// $url = 'mysql: host:localhost;bdname=pruebadb';
$usuario = 'root';
$contraseña = '';

try {
    $cn = new PDO("mysql:host=localhost;dbname=tareadb", $usuario, $contraseña);
    $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM `cliente`";

    // $rows = $cn -> query($sql);
    // $rows->execute();

    // $filas = $rows->fetchAll();
?>
<body>
    <div class="container">
        <br>
        <br>
        
        <a name="" id="" class="btn btn-outline-dark" href="guardarCliente.php" role="button">Agregar Cliente</a>
        <br>
        <br>
        <div class="row">
            <table class="table table-hover table-striped table-responsive table-dark text-center">
                <thead class="">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Sexo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $rows = $cn -> query($sql);
                    foreach ($rows as $row) {?>
                        <tr>
                            <th scope="row"><?php echo $row[0];?></th>
                            <td><?php echo $row[1];?></td>
                            <td><?php echo $row[2];?></td>
                            <td>
                                <?php 
                                if($row[3] == 1){
                                    echo "Masculino";
                                }else{
                                    echo "Femenino";
                                }
                                ?>
                            </td>
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

