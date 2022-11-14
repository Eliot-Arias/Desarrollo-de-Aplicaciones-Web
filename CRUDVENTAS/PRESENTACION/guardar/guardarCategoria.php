<?php 

include('../../template/header.php');
include('../../UTILS/DB.php');

try {    
    if (isset($_POST['nombreCategoria'])){
        $nombreFamilia = $_POST['nombreCategoria'];
        $des = $_POST['des'];
        $familia = $_POST['idfamilia'];
        $db = new DB();
        $sql = "CALL GUARDARCATEGORIA('$nombreFamilia', '$des', '$familia');"; //Variables escalares... ::Importante        
        $db->ejecutarOperacion($sql);        
    }
} catch (PDOException $th) {
    echo '<pre>';
    print_r($th);
    echo '</pre>';
}

?>
    <div class="container">
        <div class="row">
            <div class="col-md-3">                
            </div>
            <div class="col-md-6">
                <br/>
                <br/>
                <br/>
                <br/>
                <div class="card">
                    <div class="card-header text-center h2">Insercion de Categorias</div>
                    <div class="card-body">
                        <form action="" method="POST" autocomplete="on">
                            <div class="form-group">
                                <label for="nombreCategoria">Categoria</label>
                                <input type="text" name="nombreCategoria" class="form-control" id="nombreCategoria" placeholder="Ingrese Categoria">
                            </div>
                            <div class="form-group">
                                <label for="des">Descripcion</label>
                                <textarea class="form-control" name="des" id="des" rows="3"></textarea>                               
                            </div>
                            <div class="form-group">
                                <?php
                                $db = new DB();                                
                                $rows=$db->ejecutarConsultas('CALL LISTARFAMILIAS();');
                                ?>
                                <label for="idfamilia">Familia</label>
                                <select class="form-control" name="idfamilia" id="idfamilia">
                                    <option selected disabled>-- Selecciones Familia --</option>
                                    <?php foreach ($rows as $row) {?>                                        
                                        <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                                    <?php } ?> 
                                </select>
                            </div>
                            <br>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-form btn-primary">Guardar</button>
                                <a class="btn btn-form btn-primary" href="../listar/listarCategoria.php">Ver Lista</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>