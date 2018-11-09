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
    $this->$conBD = new conexion();
  }

  function Usuario()
  {

  }

  public static function CrearUsuario ()
  {
    $sql = "INSERT INTO usuario (user_name, password, nombre, apellido, emailadd, rol) VALUES(
            '$this->$user_name', '$this->$password', '$this->$nombre', '$this->$apellido', $this->$emailadd, $this->$rol)";
    $res = $this->$conBD->ejecutarconsulta($sql);
  }

  function UpdateUsuario (){
    $sql = "UPDATE usuario SET "
  }
}

 ?>
