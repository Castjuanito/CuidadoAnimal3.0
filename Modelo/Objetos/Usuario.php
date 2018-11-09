<?php
include_once "../Modelo/Objetos/conexion.php";

/**
 *
 */
class Usuario
{
  private $id;
  private $user_name;
  private $password;
  private $nombre;
  private $apellido;
  private $emailadd;
  private $rol;
  private $conBD;

  function __construct($id, $user_name, $password, $nombre, $apellido, $emailadd, $rol)
  {
    $this->$id = $id;
    $this->$user_name = $user_name;
    $this->$password = $password;
    $this->$nombre = $nombre;
    $this->$apellido = $apellido;
    $this->$emailadd = $emailadd;
    $this->$rol = $rol;
    $conBD = new conexion();
  }

  function Usuario()
  {

  }

  function CrearUsuario ()
  {
  }
}

 ?>
