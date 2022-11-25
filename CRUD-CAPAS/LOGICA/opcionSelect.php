<option selected disabled>--Seleccione la Especialidad--</option>
<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/Desarrollo-de-Aplicaciones-Web/CRUD-CAPAS/LOGICA/LEspecialidad.php';
foreach (LEspecialidad::listar() as $espe) { ?>
    <option value="<?php echo $espe->getIdEspecialidad() ?>">
        <?php echo $espe->getNombre(); ?>
    </option>
<?php } ?>