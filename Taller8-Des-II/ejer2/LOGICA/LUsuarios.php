<?php 
include_once $_SERVER["DOCUMENT_ROOT"] . "/Desarrollo-de-Aplicaciones-web/Taller8-Des-II/ejer2/ENTIDADES/Usuarios.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/Desarrollo-de-Aplicaciones-web/Taller8-Des-II/ejer2/DATOS/DB.php";
class LUsuarios{
    public static function guardarUsuario(Usuarios $usuarios){
        $nombre = $usuarios->getNombre();
        $password = $usuarios->getPassword();
        $idProvincia = $usuarios->getIdProvincia();
        
        $cnn = new db();
        $cnn = $cnn->connect();
        $sql = "INSERT INTO usuarios (NOMBRE,PASSWORD,IDPROVINCIA) VALUES ('$nombre', '$password', $idProvincia)";
        $cnn = $cnn->query($sql);
        return "usuario guardado";
    }
}
?>