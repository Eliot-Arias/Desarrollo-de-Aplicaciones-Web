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
$nroVenta = $_GET['nroVenta'];
$nombreCliente = $_GET['nombreCliente'];
$cantidad = $_GET['cantidad'];
$producto = $_GET['producto'];
$monto = $_GET['monto'];
$igv = 0.18;
$totalBruto = $monto * $cantidad;
$calculoTotal = $totalBruto * $igv;
$totalNeto = $totalBruto + $calculoTotal;    
?>
<center>
    <table border="2" bordercolor="blue" bgcolor="bfb8b8">
        <tr>
            <td>Nro de venta</td>
            <td>
                <?php
                echo $nroVenta;
                ?>
            </td>
        </tr>
        <tr>
            <td>Cliente</td>
            <td>
                <?php
                echo $nombreCliente;
                ?>
            </td>
        </tr>
        <tr>
            <td>Producto</td>
            <td>
                <?php
                echo $producto;
                ?>
            </td>
        </tr>
        <tr>
            <td>Monto</td>
            <td>
                <?php
                echo $monto;
                ?>
            </td>
        </tr>
        <tr>
            <td>IGV</td>
            <td>                
                <?php
                echo $igv;
                ?>
            </td>
        </tr>
        <tr>
            <td>Monto Bruto</td>
            <td>                
                <?php
                echo $totalBruto;
                ?>
            </td>
        </tr>
        <tr>
            <td>Monto Neto</td>
            <td>
                <?php
                echo $totalNeto;
                ?>
            </td>
        </tr>
    </table>
</center>

</body>
</html>