<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/Desarrollo-de-Aplicaciones-Web/CRUD-CAPAS/LOGICA/LEspecialidad.php';
if (isset($_POST['id'])) {
    $idEspe = $_POST['id'];
    
    $especialidades = array();
    foreach (LEspecialidad::mostrar($idEspe) as $espe) {
        $especialidades[] = array(
            'ID' => $espe->getIdEspecialidad(),
            'nombre' => $espe->getNombre(),
            'descripcion' => $espe->getDescripcion()
        );
    }
    $jsonString = json_encode($especialidades[0]);
    echo $jsonString;
}
?>