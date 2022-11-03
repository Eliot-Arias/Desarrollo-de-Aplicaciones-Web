<?php

$id = $_GET['id'];

echo $id;

$usuario = 'root';
$contraseña = '';



try {
    $nom = $_POST['nombreEspecialidad'];
    $des = $_POST['descripcion'];
    $cn = new PDO("mysql:host=localhost;dbname=pruebadb", $usuario, $contraseña);
    $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE FROM especialidad WHERE `especialidad` . `IDESPECIALIDAD` = :n"; //Variables escalares... ::Importante

    $ps = $cn -> prepare($sql);
    $ps -> bindParam(':n', $id);
    // $ps -> bindParam(':n', $nom);
    // $ps -> bindParam(':n', $des);
    $ps -> execute();
    header("Location: http://localhost/Desarrollo-de-Aplicaciones-web/CRUD/listarEspe.php ");

} catch (PDOException $th) {
    echo '<pre>';
    print_r($th);
    echo '</pre>';
}
?>