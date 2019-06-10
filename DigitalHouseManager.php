<?php

include_once 'Profesor.php';
include_once 'ProfesorTitular.php';
include_once 'ProfesorAdjunto.php';
include_once 'Alumno.php';
include_once 'Curso.php';


class DigitalHouseManager implements ProfesorAdjunto, ProfesorTitular, Alumno, Curso
{
  protected $lista_alumnos[]; /*array de objetos tipo alumnos */
  protected $lista_profTitular[]; /*array de objetos tipo Profesor Titular */
  protected $lista_profAdjunto[]; /*array de objetos tipo Profesor Adjunto */
  protected $lista_cursos[]; /*array de objetos tipo Curso */

  function __construct()
  {
    // code...
  }

  // --------------- SETTERS Y GETTERS--------------


  //------------OTROS METODOS ----------------------

  public function altaCurso($nombre, $codigoCurso, $cupoMaximoDealumnos){

    esteCurso = new Curso($nombre,$codigoCurso,$cupoMaximoDealumnos);

    $this->lista_curso[]=esteCurso;
    //----con los datos q me dan tengo q instanciar un curso y guardarlo en la $lista_cursos

  }

  public function altaProfesorAdjunto($nombre, $apellido, $codigoProfesor, $cantidadDeHoras){
    nuevoProfeAdj = new ProfesorAdjunto($nombre, $apellido, $codigoProfesor, $cantidadDeHoras);
    $this->lista_profAdjunto[] = nuevoProfeAdj;

  }

  public function altaProfesorTitular($nombre, $apellido, $codigoProfesor, $especialidad){
    nuevoProfeATit = new ProfesorTitular($nombre, $apellido, $codigoProfesor, $especialidad);
    $this->lista_profTitular[] = nuevoProfeTit;

  }

  public function altaAlumno($nombre, $apellido, $codigoAlumno){
    nuevoAlumno = new Alumno($nombre, $apellido, $codigoAlumno);
    $this->lista_alumnos[] = nuevoAlumno;

  }

  public function inscribirAlumno($codigoAlumno, $codigoCurso){


  }
}
