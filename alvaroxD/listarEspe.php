<?php
include('db.php');

$db = new db();
$cn = $db->operacion();
$sql = "SELECT * FROM tbl_especialidad;";
$rows = $cn->query($sql);
$filas = array();
foreach ($rows as $row) {
    $filas[] = array(
        "id"=>$row[0],
        "nombre"=>$row[1],
    );
}
echo json_encode($filas);






?>