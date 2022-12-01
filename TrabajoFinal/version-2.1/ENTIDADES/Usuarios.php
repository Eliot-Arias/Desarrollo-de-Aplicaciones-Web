<?php
class usuarios
{
    private $nombres;
    private $apellidos;
    private $edad;
    private $correo;
    private $nombreUsuario;
    private $password;
    private $idProvincia;
    private $telefono;

    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }
    public function getNombres()
    {
        return $this->nombres;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }
    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }
    public function getEdad()
    {
        return $this->edad;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }
    public function getCorreo()
    {
        return $this->correo;
    }

    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;
    }
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
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

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
}
