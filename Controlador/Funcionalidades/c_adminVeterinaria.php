<?php
include_once '../Modelo/Objetos/CentroVeterinario.php';
include_once '../Controlador/Funcionalidades/registro.php';
include_once '../Modelo/Objetos/Usuario.php';
include_once '../Modelo/Objetos/Empleado.php';
include_once '../Modelo/Objetos/Caso.php';
include_once '../Modelo/Objetos/Mascota.php';
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

    public function getEspecialidad($id_dueno)
    {
      $especialidad=Empleado::findEspecialidad($id_dueno);
      return $especialidad;
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

    public function getDatosVeterinaria()
    {
      $id_admin = Usuario::getByUsername($_SESSION['username'])->getId() ;
      $veterinaria = CentroVeterinario::findByDueno($id_admin);
      return $veterinaria;
    }

    public function getDatosAdmin()
    {
      $id_admin = Usuario::getByUsername($_SESSION['username'])->getId() ;
      $admin = Usuario::getById($id_admin);
      return $admin;
    }


    public function actualizarVeterinaria()
    {
      $id_admin = Usuario::getByUsername($_SESSION['username'])->getId() ;
      $veterinaria = CentroVeterinario::findByDueno($id_admin);
      $veterinaria->setNombre($_POST['nombre']);
      $veterinaria->setTelefono($_POST['telefono']);
      $veterinaria->setTipo($_POST['tipo']);
      $veterinaria->setCiudad($_POST['ciudad']);
      $veterinaria->setLocalidad($_POST['localidad']);
      $veterinaria->setBarrio($_POST['barrio']);
      $veterinaria->setHoraI($_POST['horaI'].":".$_POST['minI']);
      $veterinaria->setHoraF($_POST['horaF'].":".$_POST['minF']);
      if ($veterinaria->ActualizarCentroVeterinario())
      {
        echo $this->successStyle."Datos actualizados.</span>";
      }else {
        echo $this->errStyle."No se pudo actualizar los datos </span>";
      }
    }

    public function actualizarDatosAdmin()
    {
      $usuario = Usuario::getByUsername($_SESSION['username']);
      $err = false;
      $id_admin = $usuario->getId();
      $password = $usuario->getPassword();
      if (empty($_POST['username']))
      {
        echo $this->errStyle."El campo usuario no puede quedar en blanco.</span>";
        $err = true;
      }
      if ($_POST['username'] != $_SESSION['username']) {
        $user = Usuario::getByUsername($_POST['username']);
        if (!$user)
        {
          echo $this->errStyle."El nombre de usuario ya existe.</span>";
          $err = true;
        }
      }
      if (!empty($_POST['password'])) {

        if ( ($_POST['password'] == $_POST['password2'])) {
          $password = $_POST['password'];
        }
        else{
          echo $this->errStyle."Las contraseñas no coinciden.</span>";
          $err = true;
        }
      }
      if (!$err)
      {
        $admin = Usuario::getById($id_admin);
        $admin->setNombre($_POST['nombre']);
        $admin->setApellido($_POST['apellido']);
        $admin->setEmailadd($_POST['correo']);
        $admin->setUserName($_POST['username']);
        $admin->setPassword($password);
        if ($admin->UpdateUsuario())
        {
          echo $this->successStyle."Datos actualizados.</span>";
        }else {
          echo $this->errStyle."No se pudo actualizar los datos </span>";
        }
      }
    }

    public function crearCaso()
    {
      $usuario = Usuario::getByUsername($_SESSION['username']);
      $id_mascota = $_POST['idMascota'];
      $id_empleado = $_POST['idEmpleado'];
      if (!empty($id_mascota) && !empty($id_empleado))
      {
        if (Mascota::findById($id_mascota))
        {
          $caso = new Caso($id_mascota, $id_empleado);
          if ($caso->crearCaso())
          {
            header('Location: casosAdministrador.php');
          }
          else {
            echo $this->errStyle."Error en la creacion de mascota</span>";
          }
        }else {
          echo $this->errStyle."El id de la mascota no existe</span>";
        }
      }else {
        echo $this->errStyle."Ingrese todos los campos</span>";
      }
    }

    public function getCasosVeterinaria()
    {
      $usuario = Usuario::getByUsername($_SESSION['username']);
      $casos = [][];
      $empleados = c_adminVeterinaria::encontrarEmpleados();
      $n_empleados = count($empleados);
      $count = 0;
      for ($i=0; $i < $n_empleados; $i++) { //Numero empleados veterina
        $casosVet = Caso::getCasos($empleados[$i]->getId());
        $n_casos = $casosVet->num_rows;
        for ($j=0; $j < $n_casos; $j++) { //Numero casos por veterinario
          $id_mascota = $casosVet[$j]->getMascotaId();
          $mascota = Mascota::findById($id_mascota);
          $casos[$count][0] = $mascota;//Mascota
          $casos[$count][1] = $casosVet[$j];//Caso
          $casos[$count][2] = $empleados[$i];//Empleado
        }
      }

      return $casos;
    }


  }

 ?>
