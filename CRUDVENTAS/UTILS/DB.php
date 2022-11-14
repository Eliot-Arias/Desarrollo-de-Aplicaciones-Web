<?php

class DB{
    private $user="root";
    private $password="";
    private $url="mysql:host=localhost;dbname=ventasdb";

    // INSERT
    public function ejecutarConsultas($sql){
        $cn = new PDO($this->url, $this->user, $this->password);
        $rows = $cn->query($sql);
        return $rows;
    }


    public function ejecutarOperacion($sql){        
        $cn = new PDO($this->url, $this->user, $this->password);
        $cn -> query($sql);
    }
}

?>