<?php

/**
 *
 */

include_once "../Modelo/Objetos/conexion.php";
class Mascota
{
  private $id;
  private $dueno_mas_id;
  private $nombre;
  private $especie;
  private $raza;
  private $fecha_nacimiento;
  private $color;
  private $genero;


  function __construct($dueno_mas_id,$nombre,$especie,$raza,$fecha_nacimiento,$color,$genero)
  {
    $this->dueno_mas_id = $dueno_mas_id;
    $this->nombre = $nombre;
    $this->especie = $especie;
    $this->raza = $raza;
    $this->fecha_nacimiento = $fecha_nacimiento;
    $this->color = $color;
    $this->genero = $genero;
  }
  public function create_Mascota()
  {
    $connection = new conexion();
    $sql= "INSERT INTO mascota (dueno_mas_id,nombre,especie,raza,fecha_nacimiento,color,genero) VALUES ($this->dueno_mas_id,'$this->nombre','$this->especie','$this->raza','$this->fecha_nacimiento','$this->color','$this->genero')";
    return $connection->ejecutarconsulta($sql);
  }
  public function delete_Mascota($id)
  {
    $sql = "DELETE * FROM mascota WHERE MASCOTA.ID = " .$id;
    $this->connection->ejecutarconsulta($sql);
  }
  public function update_Mascota()
  {
    $sql = "UPDATE mascota SET dueno_mas_id = " . $this->dueno_mas_id . ", nombre = "  . $this->nombre . ", especie = " . $this->especie ."raza = ".$this->raza."fecha_nacimiento = ". $this->fecha_nacimiento ."color = ". $this->color ."WHERE MASCOTA.ID = " . $this->id;
    return  $this->connection->ejecutarconsulta($sql);
  }
  public function findAll()
  {
    $sql = "SELECT * FROM mascota";
    $this->connection->ejecutarconsulta($sql);
  }

  public function findById($id)
  {
    $connection = new conexion();
    $sql = "SELECT * FROM mascota WHERE MASCOTA.ID = " .$id;
    $consulta = $connection->ejecutarconsulta($sql);
    if ($consulta->num_rows >= 1)
    {
      $fila = mysqli_fetch_array($consulta);
      $mascota = new Mascota($fila["dueno_mas_id"],$fila["nombre"],$fila["especie"], $fila["raza"],
                              $fila["fecha_nacimiento"], $fila["color"], $fila["genero"]);
      $mascota->setId($fila["id"]);
      return $mascota;
    }
    else {
      return false;
    }
  }

  public function findMascotas($id_dueno)
  {
    $connection = new conexion();
    $sql = "SELECT * FROM mascota WHERE MASCOTA.dueno_mas_id = " .$id_dueno;
    return $connection->ejecutarconsulta($sql);
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
     * Get the value of Dueno Mas Id
     *
     * @return mixed
     */
    public function getDuenoMasId()
    {
        return $this->dueno_mas_id;
    }

    /**
     * Set the value of Dueno Mas Id
     *
     * @param mixed dueno_mas_id
     *
     * @return self
     */
    public function setDuenoMasId($dueno_mas_id)
    {
        $this->dueno_mas_id = $dueno_mas_id;

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
     * Get the value of Especie
     *
     * @return mixed
     */
    public function getEspecie()
    {
        return $this->especie;
    }

    /**
     * Set the value of Especie
     *
     * @param mixed especie
     *
     * @return self
     */
    public function setEspecie($especie)
    {
        $this->especie = $especie;

        return $this;
    }

    /**
     * Get the value of Raza
     *
     * @return mixed
     */
    public function getRaza()
    {
        return $this->raza;
    }

    /**
     * Set the value of Raza
     *
     * @param mixed raza
     *
     * @return self
     */
    public function setRaza($raza)
    {
        $this->raza = $raza;

        return $this;
    }

    /**
     * Get the value of Fecha Nacimiento
     *
     * @return mixed
     */
    public function getFechaNacimiento()
    {
        return $this->fecha_nacimiento;
    }

    /**
     * Set the value of Fecha Nacimiento
     *
     * @param mixed fecha_nacimiento
     *
     * @return self
     */
    public function setFechaNacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;

        return $this;
    }

    /**
     * Get the value of Color
     *
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of Color
     *
     * @param mixed color
     *
     * @return self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
    /**
     * Get the value of Color
     *
     * @return mixed
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of Color
     *
     * @param mixed color
     *
     * @return self
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

}
?>
