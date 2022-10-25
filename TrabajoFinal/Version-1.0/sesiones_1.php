<?php
session_start();

echo "Ssuario:" . $_SESSION['usuario'] . '<br/>' . "Estatus: " . $_SESSION['estatus'];

?>