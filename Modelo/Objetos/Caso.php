<?php
include_once "../Modelo/Objetos/conexion.php";


class Caso{
  private $idHistoria;
  private $titulo;
  private $descripcion;
  private $id;
  private $conBD;

  function __construct ($idHistoria, $titulo, $descripcion)
  {
    $this->conBD = new conexion();
    $this->idHistoria = $idHistoria;
    $this->titulo = $titulo;
    $this->descripcion = $descripcion;
  }

  function Caso ()
  {

  }

  public static function crearCaso()
  {
    $sql = "INSERT INTO CASO (IDHISTORIA, TITULO, DESCRIPCION) VALUES ($this->$idHistoria, '$this->$titulo', '$this->$descripcion')";
    return $conBD->ejecutarconsulta($sql);
  }

  public static function actualizarCaso ()
  {
    $sql = "UPDATE caso SET IDHISTORIA = " . $this->$idHistoria . ", TITULO = "  . $this->$titulo . ", DESCRIPCION = " . $this->$descripcion . "WHERE CASO.ID = " . $this->$id;
    return $this->$conBD->ejecutarconsulta($sql);
  }

  public static function borrarCaso()
  {
    $sql = "DELETE FROM CASO WHERE CASO.ID = "  . $this->$id;
    return $conBD->ejecutarconsulta($sql);
  }
}
?>
