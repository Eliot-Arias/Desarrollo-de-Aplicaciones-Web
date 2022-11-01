<?php

// $url = 'mysql: host:localhost;bdname=pruebadb';
$usuario = 'root';
$contraseña = '';



try {
    $nom = 'AAA';
    $des = 'BBB';
    $cn = new PDO("mysql:host=localhost;dbname=pruebadb", $usuario, $contraseña);
    $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO especialidad(NOMBRE, DESCRIPCION) VALUES ('$nom', '$des')";

    $cn -> query($sql);

    echo 'Data Inserter';

} catch (PDOException $th) {
    echo '<pre>';
    print_r($th);
    echo '</pre>';
}