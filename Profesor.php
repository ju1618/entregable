<?php

  class Profesor
  {
    protected $nombre;
    protected $apellido;
    protected $antigüedad;
    protected $codigo_profesor;

    // -------------------Setters ------------------
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
      // -------------------Getters ------------------
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
