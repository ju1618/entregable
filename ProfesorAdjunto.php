<?php
  require_once 'Profesor.php';

class ProfesorAdjunto extends Profesor
{
  protected $cantidadHoras;

  public function __construct($nombre, $apellido, $codigoProfesor, $cantidadDeHoras)
  {
    $this-> setNombre($nombre);
    $this->setApellido($apellido);
    $this->setCodigoProfesor($codigoProfesor);
    $this->setHoras($cantidadDeHoras);
    $this->antiguedad = 0;
  }
// -----------------SETTERS Y GETTERS---------------------
  public function setHoras (string $unasHoras){

    $this->cantidadHoras = $unasHoras;
  }

  public function getHoras(){
    return $this->cantidadHoras;
  }
}
