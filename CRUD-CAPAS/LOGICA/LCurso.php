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
        $sql = "INSERT INTO `curso` (`NOMBRE`, `TIPO`, `HORAS`, `CICLO`, `IDESPECIALIDAD`) VALUES ('$nomCurso', '$tipoCurso', '$horas', '$ciclo', '$idEspe');";
        $cnn->query($sql);

        echo "data Inserted";
    }

}

?>