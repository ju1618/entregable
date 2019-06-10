<?php

  class Profesor
  {
    protected $nombre;
    protected $apellido;
    protected $antigüedad;
    protected $codigo_profesor;

// -----------------SETTERS Y GETTERS---------------------
    public function setNombre (string $unNombre){

      $this->nombre = $unNombre;
    }
    public function setApellido (string $unApellido){

      $this->apellido = $unApellido;
    }

    public function setAntigüedad (string $unaAntig){

      $this->antigüedad = $unaAntig;
    }

    public function setCodigoProfesor (int $unCodigo){

      $this->codigo_profesor = $unCodigo;
    }

    public function getNombre(){
      return $this->nombre;
    }
    
    public function getApellido(){
      return $this->apellido;
    }

    public function getAntig(){
      return $this->antigüedad;
    }

    public function getCodigo(){
      return $this->codigo_profesor;
    }

  }
