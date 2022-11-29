
<?php
include('template/header.php');
// $cn = new DB();
echo '<pre>';
$rows = DB::ejectConsult('SELECT * FROM persona');
echo '</pre>';
?>
            <div class="container">
                <div class="row">
                    <div class="jumbotron">
                        <h1 class="display-2 text-center">Listado de Personas</h1>
                        <hr class="my-2">
                        <a class="btn btn-outline-dark" href="registro.php" role="button">Registrar Nueva Persona</a>
                        <hr class="my-2">
                    </div>
                    <table class="table table-hover table-striped table-responsive table-dark text-center">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>DNI</th>
                                <th>Modificar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rows as $row) { ?>
                                <tr>
                                    <td scope="row"><?php echo $row[0]; ?></td>
                                    <td><?php echo $row[1]; ?></td>
                                    <td><?php echo $row[2]; ?></td>
                                    <td><?php echo $row[3]; ?></td>
                                    <td><a class="btn btn-dark btn-sm" href="modificar.php?id=<?php echo $row[0]; ?>" role="button">modificar</a></td>
                                    <td><a class="btn btn-dark btn-sm" href="eliminar.php?id=<?php echo $row[0]; ?>" role="button">eliminar</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
</body>
</html>