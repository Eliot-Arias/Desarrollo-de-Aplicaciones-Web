<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Desarrollo-de-Aplicaciones-Web/TrabajoFinal/version-2.1/LOGICA/LRegistrar/L-Usuarios.php";
$user = new usuarios();
$user->setNombres($_POST['nomUser']);
$user->setApellidos($_POST['apeUser']);
$user->setCorreo($_POST['emailUser']);
$user->setNombreUsuario($_POST['tagUser']);
$user->setEdad($_POST['edad']);
$user->setPassword($_POST['password']);
$user->setIdProvincia($_POST['provincia']);
$user->setTelefono($_POST['telefono']);

$result = Lusarios::registrarUsuario($user);

$respuesta = array(
    "valor" => $result
);
echo json_encode($respuesta);
?>
