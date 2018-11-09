<?php
/**
 *
 */
include_once "../Modelo/Objetos/conexion.php";

class centro_veterinario
{
  private $id;
  private $dueno_id;
  private $nombre;
  private $direccion;
  private $ciudad;
  private $localidad;
  private $barrio;
  private $horaI;
  private $horaF;
  private $tipo;
  private $connection;


  function __construct($dueno_id ,$nombre ,$direccion,$ciudad,$localidad,$barrio,$horaI,$horaF ,$tipo)
  {
    $this->dueno_id=$dueno_id;
    $this->nombre=$nombre;
    $this->direccion=$direccion;
    $this->ciudad=$ciudad;
    $this->localidad=$localidad;
    $this->barrio=$barrio;
    $this->horaI=$horaI;
    $this->horaF=$horaF;
    $this->tipo=$tipo;
    $this->connection = new conexion();

  }
  public function create_Admin()
  {
    $sql= "INSERT INTO centro_veterinario (dueño_id,nombre,direccion,ciudad,localidad,barrio,horaI,horaF,tipo) VALUES ($this->$dueno_id,'$this->nombre','$this->direccion','$this->ciudad','$this->$ocalidad','$this->barrio','$this->horaI','$this->horaF','$this->tipo')";
    $res = $this->connection->ejecutarconsulta($sql);
    if ($res) {
      $this->id = mysqli_insert_id($this->connection);
    }
    return $res;
  }
  public function delete_Admin($id)
  {
    $sql = "DELETE * FROM centro_veterinario WHERE CENTRO_VETERINARIO.ID = " .$id;
    $this->connection->ejecutarconsulta($sql);
  }
  public function update_Admin()
  {
    $sql = "UPDATE centro_veterinario SET dueño_id =". $this->$dueno_id . ",nombre = ". $this->nombre .",direccion = ". $this->direccion .",ciudad = ". $this->ciudad .",localidad = ". $this->$ocalidad .",barrio = ". $this->barrio .",horaI = ". $this->horaI .",horaF = ". $this->horaF .",tipo = ".$this->tipo ." WHERE USUARIO.ID =". $this->id;
    return  $this->connection->ejecutarconsulta($sql);
  }
  public function findAll()
  {
    $sql = "SELECT * FROM centro_veterinario";
    $this->connection->ejecutarconsulta($sql);
  }

  public function fingById($id)
  {
  $sql = "SELECT * FROM centro_veterinario WHERE CENTRO_VETERINARIO.ID = " . $id;
  $this->connection->ejecutarconsulta($sql);
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
     * Get the value of Due
     *
     * @return mixed
     */
    public function getDueno_id()
    {
        return $this->$dueno_id;
    }

    /**
     * Set the value of Due
     *
     * @param mixed due
     *
     * @return self
     */
    public function setDue($dueno_id)
    {
        $this->$dueno_id = $dueno_id;

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
     * Get the value of Direccion
     *
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of Direccion
     *
     * @param mixed direccion
     *
     * @return self
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of Ciudad
     *
     * @return mixed
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set the value of Ciudad
     *
     * @param mixed ciudad
     *
     * @return self
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get the value of Localidad
     *
     * @return mixed
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set the value of Localidad
     *
     * @param mixed localidad
     *
     * @return self
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get the value of Barrio
     *
     * @return mixed
     */
    public function getBarrio()
    {
        return $this->barrio;
    }

    /**
     * Set the value of Barrio
     *
     * @param mixed barrio
     *
     * @return self
     */
    public function setBarrio($barrio)
    {
        $this->barrio = $barrio;

        return $this;
    }

    /**
     * Get the value of Hora
     *
     * @return mixed
     */
    public function getHoraI()
    {
        return $this->horaI;
    }

    /**
     * Set the value of Hora
     *
     * @param mixed horaI
     *
     * @return self
     */
    public function setHoraI($horaI)
    {
        $this->horaI = $horaI;

        return $this;
    }

    /**
     * Get the value of Hora
     *
     * @return mixed
     */
    public function getHoraF()
    {
        return $this->horaF;
    }

    /**
     * Set the value of Hora
     *
     * @param mixed horaF
     *
     * @return self
     */
    public function setHoraF($horaF)
    {
        $this->horaF = $horaF;

        return $this;
    }

    /**
     * Get the value of Tipo
     *
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of Tipo
     *
     * @param mixed tipo
     *
     * @return self
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of Connection
     *
     * @return mixed
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * Set the value of Connection
     *
     * @param mixed connection
     *
     * @return self
     */
    public function setConnection($connection)
    {
        $this->connection = $connection;

        return $this;
    }

}


 ?>
