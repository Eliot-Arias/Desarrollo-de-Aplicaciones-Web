<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require('calculadora.php');
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operacion = $_GET['operacion'];


?>

<center>
    <table bgcolor="bfb8b8" border="1" bordercolor="write">
        <tr>
            <td>Resultado de la <?php echo $operacion?></td>
        </tr>
        <tr>
            <td>
                <?php
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
            </td>
        </tr>
    </table>
</center>
</body>
</html>