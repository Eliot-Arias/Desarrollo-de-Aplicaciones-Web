<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/Desarrollo-de-Aplicaciones-Web/Examen-Habilidades/Datos/conexion/conexion.php';
$db = new db();
$cnn = $db->connect();
$sql = "SELECT * FROM `tbl_especialidad`";
$rows = $cnn->query($sql);
$array = array();
foreach ($rows as $row) {
    $array[] = array(
        'id' => $row[0],
        'nombre' => $row[1]
    );
}
$jsonString = json_encode($array);
echo $jsonString;
