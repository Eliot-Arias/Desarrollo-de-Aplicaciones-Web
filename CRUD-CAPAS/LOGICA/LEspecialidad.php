<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/Desarrollo-de-Aplicaciones-Web/CRUD-CAPAS/ENTIDADES/Especialidad.php';
include_once $_SERVER["DOCUMENT_ROOT"] . '/Desarrollo-de-Aplicaciones-Web/CRUD-CAPAS/DATOS/db.php';
class LEspecialidad{
    public static function guardar(Especialidad $especialidad){
        $nom = $especialidad->getNombre();
        $des = $especialidad->getDescripcion();
        $db = new DB();
        $cnn = $db->connect();
        $sql = "INSERT INTO especialidad (nombre,descripcion) values('$nom','$des')";
        $cnn->query($sql);

        echo "Data Inserted";
    }

    public static function remover($idEspe){        
        $db = new DB();
        $cnn = $db->connect();
        $sql = "DELETE FROM especialidad WHERE idespecialidad = '$idEspe'";
        $cnn->query($sql);
        echo "data deleted";
    }

    public static function mostrar($idEspe){
        $db = new DB();
        $cnn = $db->connect();
        $sql = "SELECT * FROM especialidad WHERE idespecialidad = '$idEspe'";
        $rows = $cnn->query($sql);
        $especialidades = array();

        foreach ($rows as $row) {
            $espe = new Especialidad();
            $espe->setIdEspecialidad($row[0]);
            $espe->setNombre($row[1]);
            $espe->setDescripcion($row[2]);
            array_push($especialidades, $espe);
        }
        return $especialidades;
    }

    public static function listar(){
        $db = new DB();
        $cnn = $db->connect();
        $sql = "SELECT * FROM especialidad";
        $rows = $cnn->query($sql);
        $especialidades = array();

        foreach ($rows as $row) {
            $espe = new Especialidad();
            $espe->setIdEspecialidad($row[0]);
            $espe->setNombre($row[1]);
            $espe->setDescripcion($row[2]);
            array_push($especialidades, $espe);
        }        
        return $especialidades;
    }

    public static function modificar(Especialidad $especialidad){
        $nom = $especialidad->getNombre();
        $des = $especialidad->getDescripcion();
        $id = $especialidad->getIdEspecialidad();
        $db = new DB();
        $cnn = $db->connect();
        $sql = "UPDATE `especialidad` SET `NOMBRE` = '$nom', `DESCRIPCION` = '$des' WHERE `especialidad`.`IDESPECIALIDAD` = $id;";
        $cnn->query($sql);
        echo "data updated";
    }
}


?>