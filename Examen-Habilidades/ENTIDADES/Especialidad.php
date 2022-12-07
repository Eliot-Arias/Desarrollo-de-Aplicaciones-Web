<?php

class Especialidad{
    private $idEspecialidad;
    private $nombre;
    private $descripcion;

    public function getIdEspecialidad(){
        return $this->idEspecialidad;
    }
    public function setIdEspecialidad($idEspecialidad){
        $this->idEspecialidad = $idEspecialidad;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

}

?>