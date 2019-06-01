<?php

  class Alumno
  {
    protected $nombre;
    protected $apellido;
    protected $codigo_alumno;

    function __construct(string $unNombre, string $unApellido, int $unCodigo)
    {
      $this->setNombre($unNombre);
      $this->setApellido($unApellido);
      $this->setCodigoAlumno($unCodigo);
    }
      // -------------------Setters ------------------
    public function setNombre (string $unNombre){

      $this->nombre = $unNombre;
    }
    public function setApellido (string $unApellido){

      $this->apellido = $unApellido;
    }
    public function setCodigoAlumno (int $unCodigo){

      $this->codigo_alumno = $unCodigo;
    }
      // -------------------Getters ------------------
    public function getNombre(){
      return $this->nombre;
    }

    public function getApellido(){
      return $this->apellido;
    }

    public function getCodigo(){
      return $this->codigo_alumno;
    }

  }
