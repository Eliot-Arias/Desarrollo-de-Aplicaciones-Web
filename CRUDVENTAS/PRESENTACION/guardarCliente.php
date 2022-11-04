<?php include('../template/header.php');?>

<?php 

try {    
    if (isset($_POST['nomCliente'])){
        $nomCliente = $_POST['nomCliente'];
        $apeCliente = $_POST['apeCliente'];
        $dni = $_POST['dniCliente'];
        include('../UTILS/DB.php');

        $db = new DB(); 

        $sql = "CALL GUARDARCLIENTE('$nomCliente', '$apeCliente', '$dni');"; //Variables escalares... ::Importante
        
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
                    <div class="card-header text-center h2">Insercion de Clientes</div>
                    <div class="card-body">
                        <form action="" method="POST" autocomplete="on">
                            <div class="form-group">
                                <label for="nomCliente">Nombres</label>
                                <input type="text" name="nomCliente" class="form-control" id="nomCliente" placeholder="Ingrese Familia">
                            </div>
                            <div class="form-group">
                                <label for="apeCliente">Apellidos</label>
                                <input type="text" name="apeCliente" class="form-control" id="apeCliente" placeholder="Ingrese Familia">
                            </div>
                            <div class="form-group">
                                <label for="dniCliente">DNI</label>
                                <input type="text" name="dniCliente" class="form-control" id="dniCliente" placeholder="Ingrese Familia">
                            </div>                        
                            <br>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-form btn-primary">Guardar</button>
                                <a class="btn btn-form btn-primary" href="listarCliente.php">Ver Lista</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>