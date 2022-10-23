<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <center>
        <?php
        $numero = $_GET['numero'];        
        ?>        
        <h1>Tabla de Multiplicar del numero <?php echo $numero;?></h1>
        <hr color="red" width="45%">
        <form action="tabla.php">
            <table border="2" bordercolor="blue" bgcolor="bfb8b8">
                <tr>
                    <th>Numero</th>
                    <th>Operador</th>
                    <th>Tabla</th>
                    <th>Resultado</th>
                </tr>
                <tr>
                    <td align="center">
                        <?php
                        for($i = 1; $i <= 12; $i++){
                            echo $numero . '<br/>';
                        }
                        ?>
                    </td>
                    <td align="center">
                        <?php
                        $operador = $_GET['operacion'];
                        switch($operador){
                            case '+':
                                for ($i=1; $i <= 12; $i++) { 
                                    echo ' + ' . '<br/>';
                                }
                                break;
                            case '-':
                                for ($i=1; $i <= 12; $i++) { 
                                    echo ' - ' . '<br/>';
                                }
                                break;
                            case '*':
                                for ($i=1; $i <= 12; $i++) { 
                                    echo ' * ' . '<br/>';
                                }
                                break;
                            case '/':
                                for ($i=1; $i <= 12; $i++) { 
                                    echo ' / ' . '<br/>';
                                }
                                break;
                            case '%':
                                for ($i=1; $i <= 12; $i++) { 
                                    echo ' % ' . '<br/>';
                                }
                                break;
                        }?>
                    </td>
                    <td align="center">
                        <?php
                        for($i = 1; $i <= 12; $i++){
                            echo $i . '<br/>';
                        }
                        ?>
                    </td>
                    <td align="center">
                        <?php
                        switch($operador){
                            case '+':
                                for ($i=1; $i <= 12; $i++) { 
                                    echo $numero + $i . '<br/>';
                                }
                                break;
                            case '-':
                                for ($i=1; $i <= 12; $i++) { 
                                    echo $numero - $i . '<br/>';
                                }
                                break;
                            case '*':
                                for ($i=1; $i <= 12; $i++) { 
                                    echo $numero * $i . '<br/>';
                                }
                                break;
                            case '/':
                                for ($i=1; $i <= 12; $i++) { 
                                    echo $numero / $i . '<br/>';
                                }
                                break;
                            case '%':
                                for ($i=1; $i <= 12; $i++) { 
                                    echo $numero % $i . '<br/>';
                                }
                                break;
                        }
                        
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>