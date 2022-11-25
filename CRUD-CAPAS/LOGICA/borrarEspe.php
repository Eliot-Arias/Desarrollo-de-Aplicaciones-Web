<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/Desarrollo-de-Aplicaciones-Web/CRUD-CAPAS/LOGICA/LEspecialidad.php';
if(isset($_POST['id'])){
    $idEspe = $_POST['id'];
    LEspecialidad::remover($idEspe);
}
?>