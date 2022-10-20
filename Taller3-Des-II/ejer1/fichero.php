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
    $alumnos = array('Sussie', 'Pepe', 'Alberto', 'Lucas', 'Gianluca');
    $notas = array(18, 10, 05, 14, 12);

    
    ?>

    <!--center>
        <table border="1">
            <tr>
                <td>Alumno</td>
                <td>Notas</td>
                <td>Estado</td>
            </tr>
            <tr>
                <td>
                    <?php/*
                    for($i = 0; $i <5; $i++){
                        echo $alumnos[$i] . '<br/>';
                    }*/
                    ?>
                </td>
                <td>
                    <?php/*
                    for($i = 0; $i <5; $i++){                    
                        echo $notas[$i] . '<br/>';
                    }*/
                    ?>
                </td>
                <td>
                    <?php
                    /*for($i = 0; $i <5; $i++){
                        if($notas[$i] > 10){
                            echo 'aprobado';
                        }elseif($notas[$i] < 11){
                            echo 'desaprobado';
                        }
                        echo '<br/>';
                    }*/
                    ?>
                </td>
            </tr>
        </table>
    </center-->

    <!--Fichero con bucle While-->
    <center>
        <table border="1">
            <tr>
                <td>Alumno</td>
                <td>Notas</td>
                <td>Estado</td>
            </tr>
            <tr>
                <td>
                    <?php
                    $i = 0;
                    while($i <5){
                        echo $alumnos[$i] . '<br/>';
                        $i++;
                    }
                    ?>
                </td>
                <td>
                    <?php
                    $i = 0;
                    while($i <5){
                        echo $notas[$i] . '<br/>';
                        $i++;
                    }
                    ?>
                </td>
                <td>
                    <?php
                    $i = 0;
                    while($i <5){
                        if($notas[$i] > 10){
                            echo 'aprobado';
                        }elseif($notas[$i] < 11){
                            echo 'desaprobado';
                        }
                        echo '<br/>';
                        $i++;
                    }
                    ?>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>