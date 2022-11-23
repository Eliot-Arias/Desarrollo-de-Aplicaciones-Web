<?php 

class DBconection{

    private static $url = "mysql:host=localhost;dbname=dbusuarios";
    private static $user = "root";
    private static $password = "";

    public static function ejectutarConsulta($sql){
        $cn = new PDO(DBconection::$url, DBconection::$user, DBconection::$password);
        $rows = $cn ->query($sql);
        return $rows;
    }

    public static function ejectutarOperacion($sql)
    {
        $cn = new PDO(DBconection::$url, DBconection::$user, DBconection::$password);
        $cn->query($sql);        
    }

}

?>