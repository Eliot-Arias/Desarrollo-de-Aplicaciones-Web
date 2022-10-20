<?php
/* Getting the values from the form and assigning them to variables. */
require('calculadora.php');
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operacion = $_GET['operacion'];


/* Printing the result of the sum of the two numbers. */
switch($operacion){
    case 'suma':
        echo Operacion::suma($num1, $num2);
        break;
    case 'resta':
        echo Operacion::resta($num1, $num2);
        break;
    case 'division':
        echo Operacion::division($num1, $num2);
        break;
    case 'multiplicacion':
        echo Operacion::multiplicacion($num1, $num2);
        break;
    case 'modulo':
        echo Operacion::modulo($num1, $num2);
        break;
}


?>