<?php 
class db{
    private $url = "mysql:host=localhost;dbname=pruebadb";
    private $user = "root";
    private $pwd = "";

    public function connect(){
        $conn = new PDO($this->url, $this->user, $this->pwd);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}
?>