<?php
include('db.php');
$res = array();
if (isset($_POST['nomCurso']) and isset($_POST['idEspe'])) {
    $nombre = $_POST['nomCurso'];
    $idEspe = $_POST['idEspe'];
    $db = new db();
    $cn = $db->operacion();
    $sql = "INSERT INTO `tbl_curso` (`ID_CURSO`, `NOMBRE`, `ID_ESPECIALIDAD`) VALUES(NULL, '$nombre', '$idEspe');";
    $rows = $cn->query($sql);    
    $res = array(
        "valor" => true
    );
} else {
    $res = array(
        "valor" => false
    );
}
echo json_encode($res);







?>