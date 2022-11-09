<?php


class DB{

    private static $url = "mysql:host:localhost;dbname=mydb";
    private static $user = "root";
    private static $password = "";


    public static function ejectConsult($sql){
        $conection = new PDO(DB::$url, DB::$user, DB::$password);
        $rows = $conection->query($sql);
        return $rows;
    }

    public static function ejectOperation($sql){
        $conection = new PDO(DB::$url, DB::$user, DB::$password);
        $conection->query($sql);
    }





}


?>