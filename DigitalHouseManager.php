<?php

include_once 'Profesor.php';
include_once 'ProfesorTitular.php';
include_once 'ProfesorAdjunto.php';
include_once 'Alumno.php';
include_once 'Cusro.php';


class DigitalHouseManager implements ProfesorAdjunto ProfesorTitular Alumno Curso
{
  protected $lista_alumnos : array(Alumno);
  protected $lista_profesores : array(Profesor);
  protected $lista_cursos : array(Curso);

  function __construct(argument)
  {
    // code...
  }
}
