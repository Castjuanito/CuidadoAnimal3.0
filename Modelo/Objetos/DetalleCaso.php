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
    $conBD = new conexion();
    $sql = "DELETE FROM detalle_caso WHERE detalle_caso.id = ". $this->id;
    return $conBD->ejecutarconsulta($sql);
  }

  public function getById($id)
  {
    $conBD = new conexion();
    $sql = "SELECT * FROM DETALLE_CASO WHERE DETALLE_CASO.ID =".$id;
    $consulta = $conBD->ejecutarconsulta($sql);
    if (!($consulta->num_rows < 1))
    {
      $fila = mysqli_fetch_array($consulta);
      $detalle = new DetalleCaso($fila['caso_id'],$fila['info']);
      $detalle->setFecha($fila['fecha']);
      $detalle->setId($fila['id']);
      return $detalle;
    }else {
      return false;
    }
  }
  public function getByCaso($id_caso)
  {
    $conBD = new conexion();
    $sql = "SELECT * FROM DETALLE_CASO WHERE DETALLE_CASO.CASO_ID =".$id_caso;
    $res = $conBD->ejecutarconsulta($sql);
    $detalles = [];
    while ($fila = mysqli_fetch_array($res)) {
      $detalle = new DetalleCaso($fila['caso_id'],$fila['info']);
      $detalle->setFecha($fila['fecha']);
      $detalle_>setId($fila['id']);
      $detalles[] = $detalle;
    }
    return $detalles;
  }

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Id Caso
     *
     * @return mixed
     */
    public function getIdCaso()
    {
        return $this->idCaso;
    }

    /**
     * Set the value of Id Caso
     *
     * @param mixed idCaso
     *
     * @return self
     */
    public function setIdCaso($idCaso)
    {
        $this->idCaso = $idCaso;

        return $this;
    }

    /**
     * Get the value of Info
     *
     * @return mixed
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set the value of Info
     *
     * @param mixed info
     *
     * @return self
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get the value of Fecha
     *
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of Fecha
     *
     * @param mixed fecha
     *
     * @return self
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

}
?>
