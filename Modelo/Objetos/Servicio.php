<?php
/**
 *
 */
include_once "../Modelo/Objetos/conexion.php";
class Servicio
{
  private $id;
  private $centro_veterinario_id;
  private $nombre;
  private $conn;

  function __construct($id, $centro_veterinario_id,$nombre)
  {
    $this->id = $id;
    $this->centro_veterinario_id = $centro_veterinario_id;
    $this->nombre =$nombre;
    $this->conn = new conexion();

  }

  public static function crearCaso()
  {
    $sql = "INSERT INTO servicio (centro_veterinario_id,nombre) VALUES ('$this->centro_veterinario_id','$this->nombre')";
    $res = $this->connection->ejecutarconsulta($sql);
    if ($res) {
      $this->id = mysqli_insert_id($this->connection);
    }
    return $res;$res = $this->connection->ejecutarconsulta($sql);
    if ($res) {
      $this->id = mysqli_insert_id($this->connection);
    }
    return $res;
  }

  public static function actualizarCaso ()
  {
    $sql = "UPDATE servicio SET centro_veterinario_id = " . $this->centro_veterinario_id . ", nombre = "  . $this->nombre . "WHERE SERVICIO.ID = " . $this->id;
    return $this->conBD->ejecutarconsulta($sql);
  }

  public static function borrarCaso()
  {
    $sql = "DELETE FROM servicio WHERE SERVICIO.ID = "  . $this->id;
    return $conBD->ejecutarconsulta($sql);
  }

    public static function AgregarPalabraClave($palabraClave)
    {
      $sql = "INSERT INTO servicio (centro_veterinario_id,nombre) VALUES ('$this->centro_veterinario_id','$this->nombre')";
      return $this->connection->ejecutarconsulta($sql);
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
     * Get the value of Centro Veterinario Id
     *
     * @return mixed
     */
    public function getCentroVeterinarioId()
    {
        return $this->centro_veterinario_id;
    }

    /**
     * Set the value of Centro Veterinario Id
     *
     * @param mixed centro_veterinario_id
     *
     * @return self
     */
    public function setCentroVeterinarioId($centro_veterinario_id)
    {
        $this->centro_veterinario_id = $centro_veterinario_id;

        return $this;
    }

    /**
     * Get the value of Nombre
     *
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of Nombre
     *
     * @param mixed nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of Conn
     *
     * @return mixed
     */
    public function getConn()
    {
        return $this->conn;
    }

    /**
     * Set the value of Conn
     *
     * @param mixed conn
     *
     * @return self
     */
    public function setConn($conn)
    {
        $this->conn = $conn;

        return $this;
    }

}

?>
