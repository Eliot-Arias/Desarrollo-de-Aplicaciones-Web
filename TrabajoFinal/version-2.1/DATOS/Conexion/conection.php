<?php 
class DB{
    private $url = 'mysql:host=localhost;dbname=trabajofinaldb';
    private $user = 'root';
    private $password = '';
    public function operation(){
        $cnn = new PDO($this->url, $this->user, $this->password);
        return $cnn;
    }
}
?>