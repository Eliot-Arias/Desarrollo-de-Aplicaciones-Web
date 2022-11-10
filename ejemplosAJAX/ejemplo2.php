<?php 

    $valor = $_POST['v1'];
    switch ($valor) {
        case 1:
            $reques =  include('lunes.php');
            break;
        case 2:
            $reques = include('martes.php');
            break;
        case 3:
            $reques = include('miercoles.php');
            break;
        case 4:
            $reques = include('jueves.php');
            break;
        case 5:
            $reques = include('viernes.php');
            break;
        case 6:
            $reques = include('sabado.php');
            break;
        case 7:
            $reques = include('domingo.php');
            break;
        default:
            break;
    }
?>