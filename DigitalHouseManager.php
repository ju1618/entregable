<?php

include_once 'Profesor.php';
include_once 'ProfesorTitular.php';
include_once 'ProfesorAdjunto.php';
include_once 'Alumno.php';
include_once 'Curso.php';


class DigitalHouseManager implements ProfesorAdjunto, ProfesorTitular, Alumno, Curso
{
  protected $lista_alumnos_total; /*array de objetos tipo alumnos  */
  // protected $lista_alumnos_curso[];
  protected $lista_profTitular; /*array de objetos tipo Profesor Titular */
  protected $lista_profAdjunto; /*array de objetos tipo Profesor Adjunto */
  protected $lista_cursos; /*array de objetos tipo Curso */

  // function __construct()
  // {
  //   // code...
  // }

  // --------------- SETTERS Y GETTERS--------------


  //------------OTROS METODOS ----------------------

  public function altaCurso($nombre, $codigoCurso, $cupoMaximoDealumnos){

    $esteCurso = Curso::new Curso($nombre,$cupoMaximoDealumnos,$cantidadAlumnos,$lista_alumnos_curso);

    $this->lista_curso[$codigoCurso]=$esteCurso;
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
    $this->lista_alumnos_total[] = nuevoAlumno;

  }

  public function inscribirAlumno($codigoAlumno, $codigoCurso){ //perdidisima en esta funcion

    if ($lista_cursos[$codigoCurso][$cupoMaximoDealumnos]<count($lista_cursos[$codigoCurso][$cantidadAlumnos])){
      // agregar alumno al curso
      $this->lista_cursos[$codigoCurso][$lista_alumnos_curso][]=$this->lista_alumnos_total[$codigoAlumno];
      // sumar la cantidad de alumnos a ese curso
      $this->lista_cursos[$codigoCurso][$cantidadAlumnos]++;
      echo "Inscripción satisfactoria";
    }else{
      echo "No hay más cupo para este curso";
    }

  }

  public function asignarProfesores($codigoCurso, $codigoProfesorTitular, $codigoProfesorAdjunto){

    $this->lista_cursos[$codigoCurso][$profesorAdjunto]=$this->lista_profAdjunto[$codigoProfesorAdjunto];
    $this->lista_cursos[$codigoCurso][$profesorTitular]=$this->lista_profTitular[$codigoProfesorTitular];

    }

}
