<?php
  include_once 'Profesor.php';
  include_once 'ProfesorTitular.php';
  include_once 'ProfesorAdjunto.php';
  include_once 'Alumno.php';

  class Curso //implements ProfesorAdjunto, ProfesorTitular, Alumno
  {

    protected $nombre;
    protected $codigo_curso;
    protected $profesorTitular;
    protected $profesorAdjunto;
    protected $max_alumnos;
    protected $lista_alumnos_curso;

    function __construct($nombre, $codigoCurso, $cupoMaximoDealumnos)
    {
      $this-> setNombre ($nombre);
      $this-> setCodigoCurso ($codigoCurso);
      $this-> setCupo ($cupoMaximoDealumnos);
    }

// -----------------SETTERS Y GETTERS---------------------
    public function setNombre (string $unNombre){

      $this->nombre = $unNombre;
    }
    public function setCodigoCurso (int $unCodigo){

      $this->codigo_curso = $unCodigo;
    }

    public function setCupo (int $cupoMaximoDealumnos){

      $this->max_alumnos = $cupoMaximoDealumnos;
    }

    public function getNombre(){
      return $this->nombre;
    }

    public function getCodigo(){
      return $this->codigo_curso;
    }

// ---------------OTROS METODOS--------------

  public function listarAlumnos(){
    foreach ($lista_alumnos_curso as $unAlumno) {
      echo "<pre>";
      var_dump($unAlumno);
      echo "</pre>";
    }

  }

  public function getProfesores(){
    return [$this->profesorTitular, $this->profesorAdjunto];
  }

  public function agregarUnAlumno(Alumno $unAlumno){
    /*falta ver el tema del cupo y ver si se puede agregar. tengo que mirar el cupo*/
    $tamanioAntes = count($this->lista_alumnos_curso);

    $this->lista_alumnos[] = $unAlumno;

    $tamanioDespues = count($this->lista_alumnos_curso);

    return !($tamanioAntes = $tamanioDespues);

  }
  }
