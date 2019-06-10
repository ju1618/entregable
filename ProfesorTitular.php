<?php
  require_once 'Profesor.php'

class ProfesorTitular extends Profesor
{
  protected $especialidad;

// -----------------SETTERS Y GETTERS---------------------
  public function setEspecialidad (string $unaEspecialidad){

    $this->especialidad = $unaEspecialidad;
  }

  public function getEspecialidad(){
    return $this->especialidad;
  }
}
