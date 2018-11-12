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
    $this->$calificacion = 5;
    $this->$costo = 0;
  }

  function Caso ()
  {

  }

  public static function crearCaso()
  {
    $connection = new conexion()
    $sql = "INSERT INTO CASO (mascota_id, 	medicoVet_id	, calificacio , costo) VALUES
            ($this->mascota_id, $this->medico_id, $this->calificacion, $this->costo)";
    return $connection->ejecutarconsulta($sql);

  }

  public static function actualizarCaso ()
  {
    $conBD = new conexion();
    $sql = "UPDATE caso SET mascota_id = " . $this->mascota_id . ", 	medicoVet_id	 = "  . $this->medico_id . ",
            costo = " . $this->costo .", calificaion = ".$this->calificaion." WHERE CASO.ID = " . $this->id;
    return $conBD->ejecutarconsulta($sql);
  }

  public static function borrarCaso()
  {
    $conBD = new conexion ();
    $sql = "DELETE FROM CASO WHERE CASO.ID = "  . $this->id;
    return $conBD->ejecutarconsulta($sql);
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

}
?>
