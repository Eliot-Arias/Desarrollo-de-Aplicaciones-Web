<?php include('../template/header.php')?>

    <?php 
    
    include('../UTILS/DB.php');
    $sql = "CALL LISTARCLIENTES();";
    $db = new DB();
    $rows = $db->ejecutarConsultas($sql);
    ?>
    <div class="container">
        <br>
        <h1 class="text-center">Mis Clientes</h1>
        <br>        
        <a name="" id="" class="btn btn-outline-dark" href="guardarCliente.php" role="button">Crear Nuevo</a>
        <br>
        <br>
        <div class="row">
            <table class="table table-hover table-striped table-responsive table-dark text-center">                
                <thead class="">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Modificar</th>
                        <th scope="col">Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($rows as $row) {?>
                        <tr>
                            <th scope="row"><?php echo $row[0];?></th>
                            <td><?php echo $row[1];?></td>
                            <td><?php echo $row[2];?></td>
                            <td><?php echo $row[3];?></td>
                            <td><a class="btn btn-dark btn-sm" href="modificar.php?id=<?php echo $row[0];?>" role="button">modificar</a></td>
                            <td><a class="btn btn-dark btn-sm" href="eliminar.php?id=<?php echo $row[0];?>" role="button">eliminar</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>