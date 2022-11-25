<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/Desarrollo-de-Aplicaciones-Web/CRUD-CAPAS/LOGICA/LCurso.php';
if (isset($_POST['id'])) {
    $idCurso = $_POST['id'];
    
    $cursos = array();
    foreach (LCurso::mostrar($idCurso) as $curso) {
        $cursos[] = array(
            'id' => $curso->getIdCurso(),
            'nombre' => $curso->getNombre(),
            'tipo' => $curso->getTipo(),
            'horas' => $curso->getHoras(),
            'ciclo' => $curso->getCiclo(),
            'idEspecialidad' => $curso->getIdEspecialidad()
        );
    }
    $jsonString = json_encode($cursos[0]);
    echo $jsonString;
}
