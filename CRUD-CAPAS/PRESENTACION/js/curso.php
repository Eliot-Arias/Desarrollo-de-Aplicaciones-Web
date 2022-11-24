<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/Desarrollo-de-Aplicaciones-Web/CRUD-CAPAS/LOGICA/LCurso.php';
foreach (LEspecialidad::listar() as $espe) { ?>
    <tr idespe="<?php echo $espe->getIdEspecialidad() ?>">
        <td><?php echo $espe->getIdEspecialidad(); ?></td>
        <td><?php echo $espe->getNombre(); ?></td>
        <td><?php echo $espe->getDescripcion(); ?></td>
        <td><button type="button" name="" id="" class="btn btn-sm btn-dark modificar-espe">Modificar</button></td>
        <td><button type="button" name="" id="" class="btn btn-sm btn-dark eliminar-espe">Eliminar</button></td>

    </tr>
<?php } ?>