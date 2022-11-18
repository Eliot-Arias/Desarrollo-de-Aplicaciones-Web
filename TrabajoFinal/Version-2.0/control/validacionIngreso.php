<?php
// $usuario = $_POST['nombreUsuario'];
// $contraseña = $_POST['contraseñaUsuario'];

// session_start();
// $_SESSION['usuario'] = $usuario;
try {

    include('../conexion/dbUsuarios.php');
    $sql = ";";
    
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