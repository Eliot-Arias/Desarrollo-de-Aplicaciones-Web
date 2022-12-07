<?php

class Cursos{
    private $idCurso;
    private $nombre;
    private $tipo;
    private $horas;
    private $ciclo;
    private $idEspecialidad;


    public function getIdCurso(){
        return $this->idCurso;
    }
    public function setIdCurso($idCurso){
        $this->idCurso = $idCurso;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    
    public function getHoras(){
        return $this->horas;
    }
    public function setHoras($horas){
        $this->horas = $horas;
    }

    public function getCiclo(){
        return $this->ciclo;
    }
    public function setCiclo($ciclo){
        $this->ciclo = $ciclo;
    }

    public function getIdEspecialidad(){
        return $this->idEspecialidad;
    }
    public function setIdEspecialidad($idEspecialidad){
        $this->idEspecialidad = $idEspecialidad;
    }    
}
