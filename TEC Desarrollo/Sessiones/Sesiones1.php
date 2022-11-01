<?php
session_start();

// $_SESSION['ses1'] = 'Jesus';
// echo $_SESSION['ses1'];

// SEsiones con array
// $_SESSION['ses2'] = array();
// $_SESSION['ses2'][0] = 'Jesus';
// $_SESSION['ses2'][1] = 'romero';

// echo $_SESSION['ses2'][0];
// echo $_SESSION['ses2'][1];

// Declaramos y accedemos a las sesiones.
$_SESSION['ses3']['nombre'] = 'jesus';
$_SESSION['ses3']['edad'] = '30';
echo $_SESSION['ses3']['nombre'];
echo $_SESSION['ses3']['edad'];
?><pre><?php
print_r($_SESSION['ses3']);
?></pre>
<?php

// Alternativas para eliminar sesiones

// unset($_SESSION['ses3']['nombre']);
echo $_SESSION['ses3']['nombre'];
session_destroy();

?>

