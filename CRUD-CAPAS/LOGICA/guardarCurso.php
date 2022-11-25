<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/Desarrollo-de-Aplicaciones-Web/CRUD-CAPAS/LOGICA/LCurso.php';
if(isset($_POST['nomCurso'])){
    $nomCurso = $_POST['nomCurso'];
    $tipoCurso = $_POST['tipoCurso'];
    $horas = $_POST['horas'];
    $ciclo = $_POST['ciclo'];
    $idEspe = $_POST['idEspe'];
    $guardar = new Cursos();
    $guardar->setNombre($nomCurso);
    $guardar->setTipo($nomCurso);
    $guardar->setHoras($horas);
    $guardar->setCiclo($ciclo);
    $guardar->setIdEspecialidad($idEspe);
    LCurso::guardar($guardar);
    echo $nomCurso;
}
