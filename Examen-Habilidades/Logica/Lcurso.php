<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/Desarrollo-de-Aplicaciones-Web/Examen-Habilidades/Datos/conexion/conexion.php';
include_once $_SERVER["DOCUMENT_ROOT"] . '/Desarrollo-de-Aplicaciones-Web/Examen-Habilidades/ENTIDADES/cursos.php';

class LCurso{

    public static function guardar(Cursos $cursos){
        $nomCurso = $cursos->getNombre();
        $idEspe = $cursos->getIdEspecialidad();
        $db = new db();
        $cnn = $db->connect();
        try {
            if ($nomCurso != "" and $idEspe != "") {
                $sql = "INSERT INTO `tbl_curso` (`ID_CURSO`, `NOMBRE`, `ID_ESPECIALIDAD`) VALUES (NULL, '$nomCurso', '$idEspe');";
                $cnn->query($sql);
                return true;
            } else {
                return false;
            }
            
            
        } catch (PDOException $th) {
            return false;
        }
    }
}
