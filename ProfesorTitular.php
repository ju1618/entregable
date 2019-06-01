<?php
  require_once 'Profesor.php'

class ProfesorTitular extends Profesor
{
  protected $especialidad;

// -----------------SETTERS---------------------
  public function setEspecialidad (string $unaEspecialidad){

    $this->especialidad = $unaEspecialidad;
  }
// -----------------GETTERS---------------------
  public function getEspecialidad(){
    return $this->especialidad;
  }
}
