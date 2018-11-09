<?php
include_once "../Modelo/Objetos/conexion.php";

/**
 *
 */
class Usuario
{
  var $id;
  var $user_name;
  var $password;
  var $nombre;
  var $apellido;
  var $emailadd;
  var $rol;
  var $conBD;

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
    $sql =
  }
}

 ?>
