<?php 

class DB{
    private $user="root";
    private $password="";
    private $url="mysql:host=localhost;dbname=ventasdb";

    // Consulta de datos y retur de una lista
    public function ejecutarConsultas($sql){
        $cn = new PDO($this->url, $this->user, $this->password);
        $rows = $cn->query($sql);
        return $rows;
    }

    // Otras operaciones como ingrese o eliminacion de datos.
    public function ejecutarOperacion($sql){        
        $cn = new PDO($this->url, $this->user, $this->password);
        $cn -> query($sql);
    }
}
?>