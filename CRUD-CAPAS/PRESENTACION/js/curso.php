<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/Desarrollo-de-Aplicaciones-Web/CRUD-CAPAS/LOGICA/LCurso.php';
foreach (LCurso::listar() as $curso) { ?>
    <tr idCurso="<?php echo $curso->getIdCurso() ?>">
        <td><?php echo $curso->getIdCurso(); ?></td>
        <td><?php echo $curso->getNombre(); ?></td>
        <td><?php echo $curso->getTipo(); ?></td>
        <td><?php echo $curso->getHoras(); ?></td>
        <td><?php echo $curso->getCiclo(); ?></td>
        <td><?php echo $curso->getIdEspecialidad(); ?></td>
        <td><button type="button" name="" id="" class="btn btn-sm btn-dark modificar-curso">Modificar</button></td>
        <td><button type="button" name="" id="" class="btn btn-sm btn-dark eliminar-curso">Eliminar</button></td>
    </tr>
<?php } ?>