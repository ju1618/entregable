<?php
  include_once 'Profesor.php';
  include_once 'ProfesorTitular.php';
  include_once 'ProfesorAdjunto.php';
  include_once 'Alumno.php';

  class Curso implements ProfesorAdjunto ProfesorTitular Alumno
  {
    protected $nombre:string;
    protected $codigo_curso:integer;
    protected $profesorTitular:ProfesorTitular;
    protected $profesorAdjunto:ProfesorAdjunto;
    protected $max_alumnos:integer;
    protected $lista_alumnos:array(Alumno);

    // -------------------Setters ------------------
    public function setNombre (string $unNombre){

      $this->nombre = $unNombre;
    }
    public function setCodigoCursp (int $unCodigo){

      $this->codigo_curso = $unCodigo;
    }
      // -------------------Getters ------------------
    public function getNombre(){
      return $this->nombre;
    }

    public function getCodigo(){
      return $this->codigo_curso;
    }

// ---------------OTROS METODOS--------------

  public function listarAlumnos(){

  }

  public function getProfesores(){
    return [$this->profesorTitular, $this->profesorAdjunto];
  }
  }
