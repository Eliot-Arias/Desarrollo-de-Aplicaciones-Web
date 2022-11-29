<?php 
    include('template/header.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM `persona` WHERE `persona`.`IDPERSONA` = $id";
    DB::ejectOperation($sql);
    header("location: http://localhost/Desarrollo-de-Aplicaciones-web/Taller6-Des-II/listar.php" )
?>