<?php
include_once '../Modelo/Objetos/CentroVeterinario.php';
include_once '../Controlador/Funcionalidades/registro.php';
include_once '../Modelo/Objetos/Usuario.php';
include_once '../Modelo/Objetos/Empleado.php';
  /**
   *
   */
  class c_adminVeterinaria
  {
    var $errStyle = "<span style='border-radius: 5px; color:rgb(153, 24, 24);border-style:inset;background-color: rgba(219, 55, 38, 0.56);' >";
    var $successStyle = "<span style='border-radius: 5px; color:rgb(7, 64, 5);border-style:inset;background-color: rgba(13, 193, 36, 0.57);' >";


    public function registrarEmpleado()
    {

      $_POST['username'] = $_POST['correo'];
      $area = $_POST['area'];
      $registro = new registro();
      if ($registro->registrarUsuario())
      {
        $id_admin = Usuario::getByUsername($_SESSION['username'])->getId();
        $id_empleado = Usuario::getByUsername($_POST['username'])->getId();
        echo $id_admin."---".$id_empleado."<br>";
        $empleado = new Empleado($id_admin,$id_empleado,$area);
        if($empleado->crearEmpleado())
        {
          echo "<br>".$this->successStyle."Empleado registrado.</span>";
        }else{
          echo $this->errStyle."Error asociando el empleado.</span>";
          Usuario::deleteById($id_empleado);
        }
      }
    }

    public function encontrarEmpleados()
    {
      $id_admin = Usuario::getByUsername($_SESSION['username'])->getId() ;
      $consulta = Empleado::findEmpleados($id_admin);
      $id_empleados = [];
      $empleados = [];
      if (!($consulta->num_rows < 1))
      {
        while ($fila = mysqli_fetch_array($consulta)) {
          $id_empleados[] = $fila['id_empleado'];
        }
      }
      for ($i=0; $i < count($id_empleados); $i++) {
        $empleados[] = Usuario::getById($id_empleados[$i]);
      }
      return $empleados;
    }


  }

 ?>
