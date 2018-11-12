<?php
include_once "../Modelo/Objetos/conexion.php";


class DetalleCaso{
  private $idCaso;
  private $info;
  private $fecha;

  function __construct ($info)
  {
    $this->info = $info;
  }


  public function crearCaso()
  {
    $conBD = new conexion();
    $sql = "INSERT INTO detalle_caso (info) VALUES ('$this->info')";
    return $conBD->ejecutarconsulta($sql);
  }

  public function actualizarCaso ()
  {
    $sql = "UPDATE detalle_caso SET id_caso = ". $this->idCaso .",  info = '" .$this->info. "', fecha = ".
            $this->fecha." WHERE detalle_caso.id =".$this->idCaso;
    return $conBD->ejecutarconsulta($sql);
  }

  public function borrarCaso()
  {
    $sql = "DELETE FROM detalle_caso WHERE detalle_caso.id = ". $this->id;
    return $conBD->ejecutarconsulta($sql);
  }

}
?>
