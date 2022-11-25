<?php 
include('../DATOS/DB.php');

$db = new db();
$cnn = $db->connect();

if (isset($_GET['idPais'])) {
    $idPais = $_GET['idPais'];
    $sql = "SELECT * FROM departamento WHERE id_pais=$idPais";
    $rows = $cnn->query($sql);

    $resJson = array();

    foreach ($rows as $row) {
        array_push($resJson, array('id' => $row[0], 'nombre' => $row[1]));
    }
    echo json_encode($resJson);
}

if (isset($_GET['IdDepartamento'])) {
    $IdDepartamento = $_GET['IdDepartamento'];
    $sql = "SELECT * FROM provincia WHERE id_departamento=$IdDepartamento";
    $rows = $cnn->query($sql);

    $resJson = array();

    foreach ($rows as $row) {
        array_push($resJson, array('id' => $row[0], 'nombre' => $row[1]));
    }
    echo json_encode($resJson);
}
?>