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
    $alumnos = array('A001' => 'Sussie', 'A002' => 'Pepe', 'A003' => 'Alberto');
    echo "<h2 align='center'>Reporte General de Alumnos</h2><hr color='red' width='52%'/>";
    /*foreach ($alumnos as $cod => $nombre) {
        echo $cod . ' ' . $nombre . '<br/>';
    }*/
    ?>
    <center>
        <?php
        echo "<table border='2'>";
        echo "<tr bgcolor='yellow'>";
        echo "<th>Codigo</th>";
        echo "<th>Alumnos</th>";
        echo "</tr>";
        foreach($alumnos as $cod => $nombre){
            echo "<tr>" . "<td>" . $cod . "</td>" . "<td>" . $nombre . "</td>" . "</tr>";
        }
        echo "</table>";
        ?>        
    </table> 
    </center>
</body>
</html>