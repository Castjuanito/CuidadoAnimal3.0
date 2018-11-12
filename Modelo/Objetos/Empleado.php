<?php
include_once "../Modelo/Objetos/conexion.php";
  /**
   *
   */
  class Empleado
  {
    private $id;
    private $id_dueno;
    private $id_empleado;
    private $especialidad;

    function __construct($id_dueno, $id_empleado, $especialidad)
    {
      $this->id_dueno = $id_dueno;
      $this->id_empleado = $id_empleado;
      $this->especialidad = $especialidad;
    }

    function crearEmpleado()
    {
      $conBD = new conexion();
      $sql = "INSERT INTO empleado (id_dueno, id_empleado, especialidad) VALUES ($this->id_dueno,
              $this->id_empleado, '$this->especialidad' ) ";
      return $conBD->ejecutarConsulta($sql);
    }

    function despedirEmpleado($id_empleado)
    {
      $conBD = new conexion();
      $sql = "DELETE FROM empleado WHERE empleado.id_empleado = ". $id_empleado;
      return $conBD->ejecutarConsulta($sql);
    }

    function findEspecialidad($id_empleado)
    {
      $conBD = new conexion();
      $sql = "SELECT * FROM empleado WHERE empleado.id_empleado =".$id_empleado;
      $consulta = $conBD->ejecutarConsulta($sql);
      if (!($consulta->num_rows < 1))
      {
        $fila = mysqli_fetch_array($consulta);
        return $fila['especialidad'];
      }
      else {
        return false;
      }
    }

    function findEmpleados($id_dueno)
    {
      $conBD = new conexion();
      $sql = "SELECT * FROM empleado WHERE empleado.id_dueno = ". $id_dueno;
      return $conBD->ejecutarConsulta($sql);
    }
    /**
     * Get the value of Id Dueno
     *
     * @return mixed
     */
    public function getIdDueno()
    {
        return $this->id_dueno;
    }

    /**
     * Set the value of Id Dueno
     *
     * @param mixed id_dueno
     *
     * @return self
     */
    public function setIdDueno($id_dueno)
    {
        $this->id_dueno = $id_dueno;

        return $this;
    }

    /**
     * Get the value of Id Empleado
     *
     * @return mixed
     */
    public function getIdEmpleado()
    {
        return $this->id_empleado;
    }

    /**
     * Set the value of Id Empleado
     *
     * @param mixed id_empleado
     *
     * @return self
     */
    public function setIdEmpleado($id_empleado)
    {
        $this->id_empleado = $id_empleado;

        return $this;
    }

    /**
     * Get the value of Especialidad
     *
     * @return mixed
     */
    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    /**
     * Set the value of Especialidad
     *
     * @param mixed especialidad
     *
     * @return self
     */
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;

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
