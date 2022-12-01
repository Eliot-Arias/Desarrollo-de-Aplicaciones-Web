<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Desarrollo-de-Aplicaciones-Web/TrabajoFinal/version-2.1/DATOS/Conexion/conection.php";
?>
<?php

$db = new db();
$cnn = $db->operation();
$idDepar = $_POST['idDepar'];
$sql = "CALL `CONSULTAR_PROVINCIA`($idDepar)";
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
?>