<?php
include_once '../Modelo/Objetos/CentroVeterinario.PHP';
  /**
   *
   */
  class c_CentroVeterinario
  {

    public function crearCentroVeterinario($idOwner)
    {
      $CentroVet = new ($idOwner, 'nombre veterinaria', ' ', ' ', ' ', ' ', ' ', 'consultorio');
      $CentroVet->crearCentroVeterinario();
    }
  }

 ?>
