<?php


class DB{

    private static $url = "mysql:host=localhost;dbname=practicadb";
    private static $user = "root";
    private static $password = "";


    public static function ejectConsult($sql){
        $conect = new PDO(DB::$url, DB::$user, DB::$password);
        $rows = $conect->query($sql);
        return $rows;
    }

    public static function ejectOperation($sql){
        $conect = new PDO(DB::$url, DB::$user, DB::$password);
        $conect->query($sql);
    }

}
