<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Desarrollo-de-Aplicaciones-Web/TrabajoFinal/version-2.1/DATOS/Conexion/conection.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/Desarrollo-de-Aplicaciones-Web/TrabajoFinal/version-2.1/ENTIDADES/Usuarios.PHP";

class Lusarios{

    public static function registrarUsuario(usuarios $user){
        $db = new DB();
        $cnn =$db->operation();
        $nombres = $user->getNombres();
        $apellidos = $user->getApellidos();
        $edad = $user->getEdad();
        $correo = $user->getCorreo();
        $nombreUsuario = $user->getNombreUsuario();
        $password = base64_encode($user->getPassword());
        $idProvincia = $user->getIdProvincia();
        $telefono = $user->getTelefono();

        $sql = "CALL REGISTRAR_USUARIO(':A', ':B', ':C', ':D', ':E', ':F', ':G', ':H')";
        $save = $cnn->prepare($sql);
        $save->bindParam(':A', $nombres);
        $save->bindParam(':B', $apellidos);
        $save->bindParam(':C', $edad);
        $save->bindParam(':D', $correo);
        $save->bindParam(':E', $nombreUsuario);
        $save->bindParam(':F', $password);
        $save->bindParam(':G', $idProvincia);
        $save->bindParam(':H', $telefono);
        $save->execute();
        return "Data Inserted";
    }
}

?>