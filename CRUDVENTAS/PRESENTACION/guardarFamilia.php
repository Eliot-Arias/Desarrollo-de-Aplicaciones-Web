<?php include('../template/header.php');?>

<?php 

try {    
    if (isset($_POST['nombreFamilia'])){
        $nombreFamilia = $_POST['nombreFamilia'];
        $des = $_POST['des'];
        include('../UTILS/DB.php');

        $db = new DB(); 

        $sql = "CALL GUARDARFAMILIA('$nombreFamilia', '$des');"; //Variables escalares... ::Importante
        
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
                    <div class="card-header text-center h2">Insercion de Familias</div>
                    <div class="card-body">
                        <form action="" method="POST" autocomplete="on">
                            <div class="form-group">
                                <label for="nombreFamilia">Familia</label>
                                <input type="text" name="nombreFamilia" class="form-control" id="nombreFamilia" placeholder="Ingrese Familia">
                            </div>
                            <div class="form-group">
                                <label for="des">Descripcion</label>
                                <textarea class="form-control" name="des" id="des" rows="3"></textarea>                               
                            </div>
                            <br>                           
                            <br>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-form btn-primary">Guardar</button>
                                <a class="btn btn-form btn-primary" href="listarFamilias.php">Ver Lista</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>