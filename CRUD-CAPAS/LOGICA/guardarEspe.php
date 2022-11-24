<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/Desarrollo-de-Aplicaciones-Web/CRUD-CAPAS/LOGICA/LEspecialidad.php';
if(isset($_POST['nomEspe'])){
    $nomEspe = $_POST['nomEspe'];
    $desEspe = $_POST['desEspe'];
    $guardar = new Especialidad();
    $guardar->setNombre($nomEspe);
    $guardar->setDescripcion($desEspe);
    LEspecialidad::guardar($guardar);
}
?>