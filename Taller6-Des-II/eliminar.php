<?php 
    include('template/header.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM `persona` WHERE `persona`.`ID_PERSONA` = $id";
    DB::ejectOperation($sql);
    header("location: http://localhost/Desarrollo%20de%20Aplicaciones%20web/Taller6-Des-II/listar.php" )
?>