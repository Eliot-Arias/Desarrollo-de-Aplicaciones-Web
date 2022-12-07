<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/Desarrollo-de-Aplicaciones-Web/Examen-Habilidades/Logica/Lcurso.php';
if (isset($_POST['nombre'], $_POST['idEspe']) ) {
    $nomCurso = $_POST['nombre'];
    $idEspe = $_POST['idEspe'];
    $guardar = new Cursos();
    $guardar->setNombre($nomCurso);
    $guardar->setIdEspecialidad($idEspe);
    $res = LCurso::guardar($guardar);
    $valor = array(
        "valor" => $res
    );
}else{
    $valor = array(
        "valor" => "false"
    );
}
echo json_encode($valor);
