<?php 

class db{
    private $url = "mysql:host=localhost;dbname=eliotdb";
    private $user = "root";

    private $pwd = "";

    public function operacion(){
        $cn = new PDO($this->url, $this->user, $this->pwd);
        
        return $cn;
    }

}

?>