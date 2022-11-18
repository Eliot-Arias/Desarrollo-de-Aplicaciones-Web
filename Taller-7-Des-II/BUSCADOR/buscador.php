<thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
    </tr>
</thead>
<tbody>
    <?php
    include('db.php');

    $buscar = $_POST['buscar'];
    $sql = "SELECT * FROM especialidad WHERE nombre like concat('$buscar%')";

    $rows = DB::ejectConsult($sql);

    foreach ($rows as $row) { ?>
        
        <tr>
            <td><?php echo $row[0] ?></td>
            <td><?php echo $row[1] ?></td>
            <td><?php echo $row[2] ?></td>
        </tr>

    <?php } ?>
</tbody>