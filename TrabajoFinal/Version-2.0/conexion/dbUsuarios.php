<?php
// class Conexion{ 



    // public static function conexion()
    // {
        $servidor = "localhost";
        $usuario = "root";
        $contraseña = "";
        try {
            $conexion = new PDO("mysql:host = $servidor; dbname=usuarios", $usuario, $contraseña);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "INSERT INTO `registr` (`id`, `nombres`, `apellidos`, `edad`, `fecNac`, `correo`, `nombreUsuario`, `contraseña`) VALUES (NULL, 'Eliot Roy', 'Arias Flores', '20', '2002-09-16', 'rampagecopilation@gmail.com', 'Forever', 'Foreveryoung3');";
            
            $conexion->exec($sql);

            echo "<script>console.log('conexion establecida');</script>";
        } catch (PDOException $error) {
            echo "<script>console.log('Error de conexion');</script>";
            ?><pre><?php
            print_r($error);?>
            </pre><?php
        }
    // }
// }




?>