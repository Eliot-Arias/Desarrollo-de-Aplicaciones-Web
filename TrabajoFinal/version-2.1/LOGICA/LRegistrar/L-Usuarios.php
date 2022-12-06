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

        $sql1 = "CALL CONSULTAR_TAG_USUARIO('$nombreUsuario')";
        $rows = $cnn->query($sql1);
        if ($rows->rowCount() == 0) {
            $cnn1 = $db->operation();
            $sql = "CALL REGISTRAR_USUARIO('$nombres', '$apellidos', '$edad', '$correo', '$nombreUsuario', '$password', '$idProvincia', '$telefono')";
            $cnn1->query($sql);
            return true;
        } else {
            return false;
        }
    }

    public static function validarUsuario(usuarios $user) {
        $db = new DB();
        $cnn = $db->operation();

        $tagName = $user->getNombreUsuario();
        $password = base64_encode($user->getPassword());

        $sql = "CALL `CONSULTAR_USUARIO`('$tagName', '$password');";
        $rows = $cnn->query($sql);

        if ($rows->rowCount() != 0) {
            return true;
        } else {
            return false;
        }
    }

    public static function infoUser($tagUser){
        $db = new DB();
        $cnn = $db->operation();

        $sql = "CALL `INFO_USUARIO`('$tagUser');";

        $rows = $cnn->query($sql);

        $userInfo = new usuarios();

        foreach ($rows as $row) {
            $userInfo->setNombres($row[1]);
            $userInfo->setApellidos($row[2]);
            $userInfo->setEdad($row[3]);
            $userInfo->setCorreo($row[4]);
            $userInfo->setNombreUsuario($row[5]);
            $userInfo->setPassword(base64_encode($row[6]));
            $userInfo->setTelefono($row[8]);
        }
        return $userInfo;
    }
}

?>