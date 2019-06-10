<?php
  require_once 'Profesor.php'

class ProfesorAdjunto extends Profesor
{
  protected $cantidadHoras;

// -----------------SETTERS Y GETTERS---------------------
  public function setHoras (string $unasHoras){

    $this->cantidadHoras = $unasHoras;
  }

  public function getHoras(){
    return $this->cantidadHoras;
  }
}
