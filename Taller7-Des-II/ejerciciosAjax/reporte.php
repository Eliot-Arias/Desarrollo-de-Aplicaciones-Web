<?php 
sleep(2);
?>

<thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Horas</th>
        <th>Ciclo</th>
        <th>Especialidad</th>
    </tr>
</thead>
<tbody>
    <?php 
    include('db.php');
    $idEspe = $_POST['valor'];
    
    $sql = "SELECT * FROM `curso` WHERE `IDESPECIALIDAD` = '$idEspe'";
    $rows = DB::ejectConsult($sql);
    foreach ($rows as $row) { ?>
        <tr>
            <td> <?php echo $row[0] ?> </td>
            <td> <?php echo $row[1] ?> </td>
            <td> <?php echo $row[2] ?> </td>
            <td> <?php echo $row[3] ?> </td>
            <td> <?php echo $row[4] ?> </td>
            <td> <?php echo $row[5] ?> </td>
        </tr>
    <?php } ?>
</tbody>