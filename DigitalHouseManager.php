<?php

include_once 'Profesor.php';
include_once 'ProfesorTitular.php';
include_once 'ProfesorAdjunto.php';
include_once 'Alumno.php';
include_once 'Curso.php';


class DigitalHouseManager extends ProfesorAdjunto ProfesorTitular Alumno Curso
{
  protected $lista_alumnos : array(Alumno);
  protected $lista_profTitular : array(ProfesorTitular);
  protected $lista_profAdjunto : array(ProfesorAdjunto);
  protected $lista_cursos : array(Curso);

  function __construct(argument)
  {
    // code...
  }

  // --------------- SETTERS Y GETTERS--------------


  //------------OTROS METODOS ----------------------

  public function altaCurso($nombre, $codigoCurso, $cupoMaximoDealumnos){
    //----con los datos q me dan tengo q instanciar un curso y guardarlo en la lista_alumnos

  }

  public function altaProfesorAdjunto($nombre, $apellido, $codigoProfesor, $cantidadDeHoras){


  }

  public function altaProfesorTitular($nombre, $apellido, $codigoProfesor, $especialidad){


  }

  public function altaAlumno($nombre, $apellido, $codigoAlumno){


  }
}
