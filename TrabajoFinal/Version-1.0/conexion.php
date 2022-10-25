<?php

$servidor = "localhost";
$usuario = "root";
$contraseña = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programación', 'foto.jpg');";

    $conexion->exec($sql);

    echo "Conexion Establecida";
} catch (PDOException $error) {
    echo "Conexion Erronea" . $error;
}


?>