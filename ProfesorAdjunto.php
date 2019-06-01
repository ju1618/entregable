<?php
  require_once 'Profesor.php'

class ProfesorAdjunto extends Profesor
{
  protected $cantidadHoras;

// -----------------SETTERS---------------------
  public function setHoras (string $unasHoras){

    $this->cantidadHoras = $unasHoras;
  }
// -----------------GETTERS---------------------
  public function getHoras(){
    return $this->cantidadHoras;
  }
}
