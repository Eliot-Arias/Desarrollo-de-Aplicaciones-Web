<?php
class Usuarios
{
    private $nombre;
    private $password;
    private $idProvincia;

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setIdProvincia($idProvincia)
    {
        $this->idProvincia = $idProvincia;
    }
    public function getIdProvincia()
    {
        return $this->idProvincia;
    }

}
