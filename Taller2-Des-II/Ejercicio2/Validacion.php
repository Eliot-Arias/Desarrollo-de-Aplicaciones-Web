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
    
    $nombreEstudiante = $_GET['nombreEstudiante'];    
    $cursoSeleccionado = $_GET['curso'];
    $precioMensual = $_GET['precioMensual'];
    $duracionMes = $_GET['duracionMes'];
    $formaPago = $_GET['formaPago'];
    $dscto = 0.10;

    ?>
    <center>
        <h1>Matricula Estudiante</h1>
        <hr color="red" width="35%">
        <table border="2" bordercolor="blue" bgcolor="bfb8b8">
            <tr>
                <td>Nombre Alumno: </td>
                <td>
                    <?php
                    echo $nombreEstudiante;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Curso</td>
                <td>
                    <?php
                    echo $cursoSeleccionado;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Precio Mes:</td>
                <td>
                    <?php
                    echo $precioMensual;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Duración Mes:</td>
                <td>
                    <?php
                    echo $duracionMes;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Forma Pago:</td>
                <td>
                    <?php
                    switch ($formaPago){
                        case 'dscto':
                            echo "Pago completo con 10% de dscto";
                            break;
                        case 'sinDscto':
                            echo "Pago Segmentado";
                            break;
                        default:
                            header("Location: http://localhost/Desarrollo%20de%20Aplicaciones%20web/Taller2-Des-II/Ejercicio2/Matricula.html ");                        
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Adicionales:</td>
                <td>
                    <?php
                    //ini_set('display_errors',0);                   
                    //$cursosAdicionales = $_GET['word'] . ' '. $_GET['windows'] . ' '. $_GET['excel']; 
                    /*$cursosAdicionales = ' ';
                    if( isset( $_GET['word'])){
                        $cursosAdicionales = $cursosAdicionales . ' ' . $_GET['word']; 
                    }
                    elseif( isset( $_GET['windows'])){
                        $cursosAdicionales = $cursosAdicionales . ' ' . $_GET['windows'];
                    }
                    elseif( isset( $_GET['excel'])){
                        $cursosAdicionales = $cursosAdicionales . ' ' . $_GET['excel'];
                    }else{
                        echo "No selecciono ningun curso";
                    }*/
                    $cursosAdicionales = "";
                    if (isset($_GET['cursosSeleccionados'])) {                        
                        echo implode(' - ', $_GET['cursosSeleccionados']);
                        foreach( $_GET['cursosSeleccionados'] as $cursos){
                            $cursosAdicionales = $cursosAdicionales . ' ' . $cursos;

                        }                       
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Total a Pagar:</td>
                <td>
                    <?php
                    $pagoSinDscto = $duracionMes * $precioMensual;
                    $pagoConDscto = $pagoSinDscto - ($pagoSinDscto * $dscto);
                    $validar = $formaPago == 'dscto';
                    
                    if($validar){
                        if(count($_GET['cursosSeleccionados']) == 3){
                            echo $pagoConDscto + 150;
                        }elseif(count($_GET['cursosSeleccionados']) == 2){
                            echo $pagoConDscto + 100;
                        }elseif(count($_GET['cursosSeleccionados']) == 1){
                            echo $pagoConDscto + 50;
                        }
                    }elseif($validar == false){
                        if(count($_GET['cursosSeleccionados']) == 3){
                            echo $pagoSinDscto + 150;
                        }elseif(count($_GET['cursosSeleccionados']) == 2){
                            echo $pagoSinDscto + 100;
                        }elseif(count($_GET['cursosSeleccionados']) == 1){
                            echo $pagoSinDscto + 50;
                        }
                    }
                    ?>
                </td>
            </tr>
        </table>
    </center>
    <?php
    ?>
</body>
</html>