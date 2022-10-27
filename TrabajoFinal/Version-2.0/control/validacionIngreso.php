<?php
// $usuario = $_POST['nombreUsuario'];
// $contraseña = $_POST['contraseñaUsuario'];

// session_start();
// $_SESSION['usuario'] = $usuario;

// include('../conexion/dbUsuarios.php');
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
try {
    $conexion = new PDO("mysql:host = $servidor; dbname=usuarios", $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `registr` (`id`, `nombres`, `apellidos`, `edad`, `fecNac`, `correo`, `nombreUsuario`, `contraseña`) VALUES (NULL, 'Eliot Roy', 'Arias Flores', '20', '2002-09-16', 'rampagecopilation@gmail.com', 'wtf3', 'Foreveryoung3');";
    
    $conexion->exec($sql);

    ?>
    <script>console.log('Conexion e Insertacion correcta')</script>
    <?php

} catch (PDOException $th) {
    echo '<pre>';
    print_r($th);
    echo '</pre>';
}
?>