<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/Desarrollo-de-Aplicaciones-Web/CRUD-CAPAS/ENTIDADES/Cursos.php';
include_once $_SERVER["DOCUMENT_ROOT"] . '/Desarrollo-de-Aplicaciones-Web/CRUD-CAPAS/DATOS/db.php';

class LCurso{

    public static function guardar(Cursos $cursos){
        $nomCurso = $cursos->getNombre();
        $tipoCurso = $cursos->getTipo();
        $horas = $cursos->getHoras();
        $ciclo = $cursos->getCiclo();
        $idEspe = $cursos->getIdEspecialidad();
        $db = new db();
        $cnn = $db->connect();
        $sql = "CALL GUARDARCURSO('$nomCurso', '$tipoCurso', '$horas', '$ciclo', '$idEspe');";
        $cnn->query($sql);
        echo "data Inserted";
    }

    public static function remover($idCurso){
        $db = new DB();
        $cnn = $db->connect();
        $sql = "DELETE FROM curso WHERE idcurso = '$idCurso'";
        $cnn->query($sql);
        echo "data deleted";
    }

    public static function mostrar($idCurso){
        $db = new DB();
        $cnn = $db->connect();
        $sql = "SELECT * FROM curso WHERE idcurso = '$idCurso'";
        $rows = $cnn->query($sql);
        $cursos = array();

        foreach ($rows as $row) {
            $curso = new Cursos();
            $curso->setIdCurso($row[0]);
            $curso->setNombre($row[1]);
            $curso->setTipo($row[2]);
            $curso->setHoras($row[3]);
            $curso->setCiclo($row[4]);
            $curso->setIdEspecialidad($row[5]);

            array_push($cursos, $curso);
        }
        return $cursos;
    }

    public static function listar(){
        $db = new DB();
        $cnn = $db->connect();
        $sql = "SELECT * FROM curso";
        $rows = $cnn->query($sql);
        $cursos = array();

        foreach ($rows as $row) {
            $curso = new Cursos();
            $curso->setIdCurso($row[0]);
            $curso->setNombre($row[1]);
            switch ($row[2]) {
                case 1:
                    $curso->setTipo("Transversal");
                    break;
                case 0:
                    $curso->setTipo("Relleno");
                    break;
            }
            $curso->setHoras($row[3]);
            $curso->setCiclo($row[4]);
            $curso->setIdEspecialidad($row[5]);

            array_push($cursos, $curso);
        }
        return $cursos;
    }

    public static function modificar(Cursos $curso){
        $idcurso = $curso->getIdCurso();
        $nomCurso = $curso->getNombre();
        $tipoCurso = $curso->getTipo();
        $horas = $curso->getHoras();
        $ciclo = $curso->getCiclo();
        $idEspe = $curso->getIdEspecialidad();
        $db = new db();
        $cnn = $db->connect();
        $sql = "UPDATE `curso` SET `NOMBRE` = '$nomCurso', `TIPO` = '$tipoCurso', `HORAS`,  = '$horas', `CICLO`,  = '$ciclo', `IDESPECIALIDAD`,  = '$idEspe'  WHERE `curso`.`IDCURSO` = $idcurso;";
        $cnn->query($sql);
        echo "Data updated";
    }
}

?>