<?php
/**
 *
 */
include_once "../Modelo/Objetos/conexion.php";

class CentroVeterinario
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
  private $telefono;
  private $connection;


  function __construct($dueno_id ,$nombre ,$direccion,$ciudad,$localidad,$barrio,$horaI,$horaF ,$tipo,$telefono)
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
    $this->telefono = $telefono;
  }

  public function CrearCentroVeterinario()
  {
    $connection = new conexion();
    $sql= "INSERT INTO centro_veterinario (dueno_id,nombre,direccion,ciudad,localidad,barrio,horaI,horaF,tipo)
           VALUES ($this->dueno_id,'$this->nombre','$this->direccion','$this->ciudad','$this->localidad',
            '$this->barrio','$this->horaI','$this->horaF','$this->tipo')";
    $res = $connection->ejecutarconsulta($sql);
    return $res;
  }

  public function BorrarCentroVeterinario($id)
  {
    $sql = "DELETE * FROM centro_veterinario WHERE CENTRO_VETERINARIO.ID = " .$id;
    $this->connection->ejecutarconsulta($sql);
  }
  public function ActualizarCentroVeterinario()
  {
    $connection = new conexion();

    $sql = "UPDATE centro_veterinario SET dueno_id = ". $this->dueno_id . " , nombre = '". $this->nombre ."' , direccion = '".
            $this->direccion ."' , ciudad = '". $this->ciudad ."' , localidad = '". $this->localidad ."' , barrio = '".
            $this->barrio ."' , horaI = '". $this->horaI ."' , horaF = '". $this->horaF ."' , tipo = '".$this->tipo .
            "' , telefono =" . $this->telefono. " WHERE CENTRO_VETERINARIO.ID =". $this->id;

    return  $connection->ejecutarconsulta($sql);
  }
  public function findAll()
  {
    $sql = "SELECT * FROM centro_veterinario";
    $this->connection->ejecutarconsulta($sql);
  }

  public function findById($id)
  {
    $connection = new conexion();
    $sql = "SELECT * FROM centro_veterinario WHERE CENTRO_VETERINARIO.ID = " . $id;
    $consulta = $connection->ejecutarconsulta($sql);
    if ($consulta->num_rows >= 1)
    {
      $fila = mysqli_fetch_array($consulta);
      $CentroVet = new CentroVeterinario($fila["dueno_id"],$fila["nombre"],$fila["direccion"], $fila["ciudad"],
                              $fila["localidad"], $fila["barrio"], $fila["horaI"], $fila["horaF"], $fila["tipo"], $telefono['telefono']);
      $CentroVet->setId($fila["id"]);
      return $CentroVet;
    }
    else{
      return false;
    }
  }


  public function findByName($nombre)
  {
    $conBD = new conexion();
    $sql = "SELECT * FROM centro_veterinario WHERE centro_veterinario.nombre = " . $nombre;
    $consulta = $conBD->ejecutarconsulta($sql);
    if ($consulta->num_rows >= 1)
    {
      $fila = mysqli_fetch_array($consulta);
      $CentroVet = new CentroVeterinario($fila["dueno_id"],$fila["nombre"],$fila["direccion"], $fila["ciudad"],
                              $fila["localidad"], $fila["barrio"], $fila["horaI"], $fila["horaF"], $fila["tipo"], $fila['telefono']);
      $CentroVet->setId($fila["id"]);
      return $CentroVet;
    }
    else{
      return false;
    }
  }


  public function findByDueno($id_dueno)
  {
    $conBD = new conexion();
    $sql = "SELECT * FROM centro_veterinario WHERE centro_veterinario.dueno_id = " . $id_dueno;
    $consulta = $conBD->ejecutarconsulta($sql);
    if ($consulta->num_rows >= 1)
    {
      $fila = mysqli_fetch_array($consulta);
      $CentroVet = new CentroVeterinario($fila["dueno_id"],$fila["nombre"],$fila["direccion"], $fila["ciudad"],
                              $fila["localidad"], $fila["barrio"], $fila["horaI"], $fila["horaF"], $fila["tipo"], $fila['telefono']);
      $CentroVet->setId($fila["id"]);
      return $CentroVet;
    }
    else{
      return false;
    }
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


    /**
     * Get the value of Telefono
     *
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of Telefono
     *
     * @param mixed telefono
     *
     * @return self
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

}


 ?>
