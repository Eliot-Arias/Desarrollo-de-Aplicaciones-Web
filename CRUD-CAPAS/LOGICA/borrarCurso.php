<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/Desarrollo-de-Aplicaciones-Web/CRUD-CAPAS/LOGICA/LCurso.php';
if(isset($_POST['id'])){
    $idCurso = $_POST['id'];
    LCurso::remover($idCurso);
}
