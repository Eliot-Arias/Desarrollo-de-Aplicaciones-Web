<?php 
include('../DB/DB.php');

$db = new db();
$cnn = $db->connect();

if (isset($_GET['idFamilia'])) {
    $idFamilia = $_GET['idFamilia'];
    $sql = "SELECT * FROM categoria WHERE idFamilia=$idFamilia";
    $rows = $cnn->query($sql);

    $resJson = array();

    foreach ($rows as $row) {
        array_push($resJson, array('id' => $row['0'], 'nombre' => $row['1']));
    }
    echo json_encode($resJson);
}

if (isset($_GET['idCategoria'])) {
    $idCategoria = $_GET['idCategoria'];
    $sql = "SELECT * FROM producto WHERE idCategoria=$idCategoria";
    $rows = $cnn->query($sql);

    $resJson = array();

    foreach ($rows as $row) {
        array_push($resJson, array('id' => $row['0'], 'nombre' => $row['1']));
    }
    echo json_encode($resJson);
}
?>