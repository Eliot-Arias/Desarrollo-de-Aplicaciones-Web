<?php 
session_start();

$_SESSION["usuario"] = "Fortalezawtf2";
$_SESSION["estatus"] = "logueado";

echo "Sesion Iniciada" . '<br/>';

echo "Usuario:" . $_SESSION["usuario"] . '<br/>' . "estatus: " . $_SESSION["estatus"];





?>