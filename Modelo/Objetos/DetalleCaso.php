<?php
include_once "../Modelo/Objetos/conexion.php";


class DetalleCaso{
  private $idCaso;
  private $info;
  private $id;
  private $conBD;

  function __construct ($idCaso, $info)
  {
    $conBD = new conexion();
    $this->$idCaso = $idCaso;
    $this->$info = $info;
  }

  function Caso ()
  {

  }

  public static function crearCaso()
  {
    $sql = "INSERT INTO detalle_caso (id_caso, info) VALUES ($this->$idCaso, '$this->$info')";
    $res = $conBD->ejecutarconsulta($sql);
    $this->$id = mysqli_insert_id($conBD);
    return $res;
  }

  public static function actualizarCaso ()
  {
    $sql = "UPDATE detalle_caso SET id_caso = ". $this->$idCaso .",  info = " .$this->$info. ")";
    return $conBD->ejecutarconsulta($sql);
  }

  public static function borrarCaso()
  {
    $sql = "DELETE FROM detalle_caso WHERE detalle_caso.id = ". $this->$id;
    return $conBD->ejecutarconsulta($sql);
  }

  public static function getById($id)
  {
    $sql = "SELECT * FROM detalle_caso WHERE detalle_caso.id = " . $id ;
    $consulta = $conBD->ejecutarconsulta($sql);
    $casoObj = new Caso();
    $fila = mysqli_fetch_array($consulta);
    $casoObj->setId($fila["id"]);
    $casoObj->setInfo($fila["info"]);
    $casoObj->setIdCaso($fila["id_caso"]);
    return $casoObj;

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
