<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reporte.css">
    <title>Document</title>
</head>
<body>
    <?php
        $nota1 = $_GET['nota1'];
        $nota2 = $_GET['nota2'];
        $nota3 = $_GET['nota3'];
        $nombre = $_GET['nombre'];
        $curso = $_GET['curso'];

        $suma = $nota1 + $nota2 + $nota3;

        $promedio = $suma/3;        
    ?>
    <div class="container">
        <div class="reporte">
            <div class="curso">
                <p>Curso: </p>
                <p class="curso--nombre">
                    <?php
                        // if ($curso == 1) {
                        //     echo "Matematica";
                        // } else if ($curso == 2){
                        //     echo "Java Foundations";
                        // }
                        // else if ($curso == 3){
                        //     echo "Modelado";
                        // }
                        // else if ($curso == 4){
                        //     echo "Algoritmia";
                        // }
                        echo ($curso);
                    ?></p>
            </div>
            <div class="nombre">
                <p>Nombre: </p>
                <p class="nombre--alumno">
                    <?php
                    echo $nombre;
                ?></p>
                </p>
            </div>
            <div class="promedio">
                <p>Promedio: </p>
                <p class="promedio-alumno">
                    <?php
                    echo $promedio;
                ?></p>
                </p>
            </div>
        </div>
    </div>
</body>
</html>