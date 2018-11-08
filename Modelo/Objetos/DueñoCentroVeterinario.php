<?php
/**
 *
 */
include_once "../modelo/objetos/conexion.php" 


class DuenoCentroVeterinario
{
  var $user_name;
  var $password;
  var $nombre;
  var $apellido;
  var $emailadd;
  var $connection = new conexion();


  function __construct(){
  $this->connection = new conexion();
  }
  public function create_DueñoCentroVeterinario($value='')
  {

  }
  public function delete_DueñoCentroVeterinario($value='')
  {

  }
  public function update_DueñoCentroVeterinario($value='')
  {
    // code...
  }
  public function findAll($value='')
  {
    // code...
  }

  public function fingById($value='')
  {
    // code...
  }


}
 ?>
