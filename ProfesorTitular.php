<?php
  require_once 'Profesor.php'

class ProfesorTitular extends Profesor
{
  protected $especialidad;

  public function __construct($nombre, $apellido, $codigoProfesor, $especialidad)
  {
    $this-> setNombre($nombre);
    $this->setApellido($apellido);
    $this->setCodigoProfesor($codigoProfesor);
    $this->setEspecialidad($especialidad);
    $this->antiguedad = 0;
  }

// -----------------SETTERS Y GETTERS---------------------
  public function setEspecialidad (string $unaEspecialidad){

    $this->especialidad = $unaEspecialidad;
  }

  public function getEspecialidad(){
    return $this->especialidad;
  }
}
