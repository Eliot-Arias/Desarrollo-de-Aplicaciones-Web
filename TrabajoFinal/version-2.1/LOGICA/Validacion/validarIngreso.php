<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Desarrollo-de-Aplicaciones-Web/TrabajoFinal/version-2.1/LOGICA/LRegistrar/L-Usuarios.php";

$tagUser = $_POST['tagUser'];
$pwd = $_POST['pwd'];
$user = new usuarios();

$user->setNombreUsuario($tagUser);
$user->setPassword($pwd);

$validar = Lusarios::validarUsuario($user);
$json = array(
    'valor' => $validar
);

echo json_encode($json);



?>