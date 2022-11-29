<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Desarrollo-de-Aplicaciones-web/Taller8-Des-II/ejer2/LOGICA/LUsuarios.php";
$nombre = $_POST['nomUser'];
$pwd = $_POST['pwd'];
$provincia = $_POST['provincia'];

$usuario = new Usuarios();
$usuario->setNombre($nombre);
$usuario->setPassword($pwd);
$usuario->setIdProvincia($provincia);

$confirmacion = LUsuarios::guardarUsuario($usuario);
echo $confirmacion;
?>