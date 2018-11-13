<?php
include_once "../Modelo/Objetos/conexion.php";


class Caso{
  private $id;
  private $mascota_id;
  private $medico_id;
  private $calificacion;
  private $costo;

  function __construct ($mascota_id, $medico_id)
  {
    $this->mascota_id = $mascota_id;
    $this->medico_id = $medico_id;
    $this->calificacion = 5;
    $this->costo = 0;
  }


  public function crearCaso()
  {
    $connection = new conexion();
    $sql = "INSERT INTO CASO (mascota_id, 	medicoVet_id	, calificacion , costo) VALUES
            ($this->mascota_id, $this->medico_id, $this->calificacion, $this->costo)";
    return $connection->ejecutarconsulta($sql);

  }

  public function actualizarCaso ()
  {
    $conBD = new conexion();
    $sql = "UPDATE caso SET mascota_id = " . $this->mascota_id . ", 	medicoVet_id	 = "  . $this->medico_id . ",
            costo = " . $this->costo .", calificaion = ".$this->calificaion." WHERE CASO.ID = " . $this->id;
    return $conBD->ejecutarconsulta($sql);
  }

  public function borrarCaso()
  {
    $conBD = new conexion ();
    $sql = "DELETE FROM CASO WHERE CASO.ID = "  . $this->id;
    return $conBD->ejecutarconsulta($sql);
  }

  public function getCasos($id_medico)
  {
    $conBD = new conexion();
    $sql = "SELECT * FROM CASO WHERE CASO.medicoVet_id=". $id_medico;
    $consulta = $conBD->ejecutarconsulta($sql);
    $casos = [];
    if (mysqli_num_rows($consulta) > 0)
    {
      while ($fila = mysqli_fetch_array($consulta)) {
        $casos[] = Caso::getById($fila['id']);
      }
    }
    return $casos;
  }

  public function getById($id_caso)
  {
    $conBD = new conexion();
    $sql = "SELECT * FROM CASO WHERE CASO.id = ".$id_caso;
    $consulta = $conBD->ejecutarconsulta($sql);
    if ($consulta->num_rows >= 1)
    {
      $fila = mysqli_fetch_array($consulta);
      $usuarioObj = new Caso($fila['mascota_id'],$fila['medicoVet_id']);
      $usuarioObj->setCalificacion($fila['calificacion']);
      $usuarioObj->setCosto($fila['costo']);
      $usuarioObj->setId($fila["id"]);
      return $usuarioObj;
    }
    else {
      return false;
    }
  }
    /**
     * Get the value of Mascota Id
     *
     * @return mixed
     */
    public function getMascotaId()
    {
        return $this->mascota_id;
    }

    /**
     * Set the value of Mascota Id
     *
     * @param mixed mascota_id
     *
     * @return self
     */
    public function setMascotaId($mascota_id)
    {
        $this->mascota_id = $mascota_id;

        return $this;
    }

    /**
     * Get the value of Medico Id
     *
     * @return mixed
     */
    public function getMedicoId()
    {
        return $this->medico_id;
    }

    /**
     * Set the value of Medico Id
     *
     * @param mixed medico_id
     *
     * @return self
     */
    public function setMedicoId($medico_id)
    {
        $this->medico_id = $medico_id;

        return $this;
    }

    /**
     * Get the value of Calificacion
     *
     * @return mixed
     */
    public function getCalificacion()
    {
        return $this->calificacion;
    }

    /**
     * Set the value of Calificacion
     *
     * @param mixed calificacion
     *
     * @return self
     */
    public function setCalificacion($calificacion)
    {
        $this->calificacion = $calificacion;

        return $this;
    }

    /**
     * Get the value of Costo
     *
     * @return mixed
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * Set the value of Costo
     *
     * @param mixed costo
     *
     * @return self
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
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

}
?>
