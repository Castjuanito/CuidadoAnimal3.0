<?php
include_once "../Modelo/Objetos/conexion.php";


class Caso{
  var $idHistoria;
  var $titulo;
  var $descripcion;
  var $conBD;

  function __construct ($idHistoria, $titulo, $descripcion)
  {
    $conBD = new conexion();
  }

  function Caso ()
  {

  }

  public static function crearCaso($idHistoria, $titulo, $descripcion)
  {
    $sql = "INSERT INTO CASO (IDHISTORIA, TITULO, DESCRIPCION) VALUES ($idHistoria, '$titulo', '$descripcion')";
    return $conBD->ejecutarconsulta($sql);
  }
}
?>
