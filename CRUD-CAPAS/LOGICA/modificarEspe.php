<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/Desarrollo-de-Aplicaciones-Web/CRUD-CAPAS/LOGICA/LEspecialidad.php';
$nomEspe = $_POST['nomEspe'];
$desEspe = $_POST['desEspe'];
$idEspe = $_POST['idEspe'];
$modificar = new Especialidad();
$modificar->setNombre($nomEspe);
$modificar->setDescripcion($desEspe);
$modificar->setIdEspecialidad($idEspe);
LEspecialidad::modificar($modificar);

?>