<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Desarrollo-de-Aplicaciones-Web/TrabajoFinal/version-2.1/LOGICA/LRegistrar/L-Usuarios.php";

$tagUser = $_POST['User'];
$user = new usuarios();
$user = Lusarios::infoUser($tagUser);
$info = array(
    "Nombres" => $user->getNombres(),
    "Apellidos" => $user->getApellidos(),
    "Edad" => $user->getEdad(),
    "Correo" => $user->getCorreo(),
    "Nombre_Usuario" => $user->getNombreUsuario(),
    "Password" => $user->getPassword(),
    "Telefono" => $user->getTelefono()
);

echo json_encode($info)
?>