<?php

// $url = 'mysql: host:localhost;bdname=pruebadb';
$usuario = 'root';
$contraseña = '';



try {
    $nom = $_POST['nombreEspecialidad'];
    $des = $_POST['descripcion'];
    $cn = new PDO("mysql:host=localhost;dbname=pruebadb", $usuario, $contraseña);
    $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO especialidad(NOMBRE, DESCRIPCION) VALUES (:n , :d)"; //Variables escalares... ::Importante

    $ps = $cn -> prepare($sql);
    $ps -> bindParam(':n', $nom);
    $ps -> bindParam(':d', $des);
    $ps -> execute();
    header("Location: http://localhost/Desarrollo%20de%20Aplicaciones%20web/CRUD/listarEspe.php ");

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
    <link rel="stylesheet" href="css/morph/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Guardado Exitoso</strong> La especialidad y su descripcion se guardaron correctamente
    </div>
</body>
</html>