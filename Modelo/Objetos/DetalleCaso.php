<?php
include_once "../Modelo/Objetos/conexion.php";


class DetalleCaso{
  private $id;
  private $idCaso;
  private $info;
  private $fecha;

  function __construct ($idCaso, $info)
  {
    $this->info = $info;
    $this->idCaso = $idCaso;
  }


  public function crearDetalleCaso()
  {
    $conBD = new conexion();
    $sql = "INSERT INTO detalle_caso (caso_id,info) VALUES ($this->idCaso, '$this->info')";
    return $conBD->ejecutarconsulta($sql);
  }

  public function actualizarDetalleCaso ()
  {
    $sql = "UPDATE detalle_caso SET id_caso = ". $this->idCaso .",  info = '" .$this->info. "', fecha = ".
            $this->fecha." WHERE detalle_caso.id =".$this->idCaso;
    return $conBD->ejecutarconsulta($sql);
  }

  public function borrarDetalleCaso()
  {
    $sql = "DELETE FROM detalle_caso WHERE detalle_caso.id = ". $this->id;
    return $conBD->ejecutarconsulta($sql);
  }

}
?>
