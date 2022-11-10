<?php 
    include('template/header.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM `producto` WHERE `producto`.`id_producto` = $id";
    DB::ejectOperation($sql);
    header("location: http://localhost/Desarrollo%20de%20Aplicaciones%20web/practicadb/listarProducto.php" );
?>