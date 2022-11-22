<thead>
    <tr>
        <th>Nombre</th>
        <th>Cantidad</th>
        <th>Unidad</th>
        <th>ID Plato</th>
        <th>Nombre Plato</th>
    </tr>
</thead>
<tbody>
    <?php
    include('dataConexion.php');
    $idPlato = $_POST['valor'];

    $sql = "SELECT * FROM `vistaplato` WHERE `id_plato` = '$idPlato'";
    $rows = DB::ejectConsult($sql);
    foreach ($rows as $row) { ?>
        <tr>
            <td> <?php echo $row[0] ?> </td>
            <td> <?php echo $row[1] ?> </td>
            <td> <?php echo $row[2] ?> </td>
            <td> <?php echo $row[3] ?> </td>
            <td> <?php echo $row[4] ?> </td>
        </tr>
    <?php } ?>
</tbody>