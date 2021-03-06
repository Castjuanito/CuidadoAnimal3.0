<?php
include_once "../Modelo/Objetos/Usuario.php";
include_once "../Modelo/Objetos/CentroVeterinario.php";
/**
 *
 */
class registro
{
  var $errStyle = "<span style='border-radius: 5px; color:rgb(153, 24, 24);border-style:inset;background-color: rgba(219, 55, 38, 0.56);' >";
  var $successStyle = "<span style='border-radius: 5px; color:rgb(7, 64, 5);border-style:inset;background-color: rgba(13, 193, 36, 0.57);' >";
  public function __construct()
  {
  }

  function registrarUsuario()
  {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['correo'];
    $rol  = $_POST['rol'];
    $telefono = $_POST['telefono'];
    $retval = false;
    if (!empty($username) && !empty($password) && !empty($rol) && !empty($password2) )
    {
      if ($password == $password2)
      {
        $usuarioObj = new Usuario($username, $password, $nombre, $apellido, $email, $rol, $telefono);
        $consulta = Usuario::getByUsername($username);
        if ($consulta == false)
        {
          if ($rol == 'duenoClinica')
          {
            setcookie('owner', serialize($usuarioObj), time()+3600);
            header('Location: registroCentroVeterinario.php');
          }elseif ($rol == 'duenoMascota' || $rol == 'medicoVet') {
            $res = $usuarioObj->CrearUsuario();
            if ($res){
              echo $this->successStyle. "Usuario registrado exitosamente.</span>";
              $retval = true;
            }else {
              echo $this->errStyle."Error en la creación.</span>";
            }
          }
        }
        else{
          echo $this->errStyle."El nombre de usuario ya existe, por favor intente con otro.<span>";
        }
      }
      else {
        echo $this->errStyle."Las contraseñas no coinciden.</span>";
      }
    }
    else {
      echo $this->errStyle."Por favor, ingrese los campos obligatorios.</span>";
    }
    return $retval;
  }

  function crearVeterinaria()
  {
    $propi = unserialize($_COOKIE['owner']);
    $propi->setTelefono((int)$propi->getTelefono());
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $localidad = $_POST['localidad'];
    $barrio = $_POST['barrio'];
    $horaI = $_POST['horaI'].":".$_POST['minI'];
    $horaF = $_POST['horaF'].":".$_POST['minF'];
    $tipo = $_POST['tipo'];
    $telefono = $_POST['telefono'];

    if (!empty($nombre) && isset($_COOKIE['owner']) && $tipo != '0')
    {
      if ($propi->CrearUsuario())
      {
        $propietario = Usuario::getByUsername($propi->getUserName());
        $idOwner = $propietario->getId();
        $CentroVet = new CentroVeterinario($idOwner,$nombre,$direccion,$ciudad,$localidad,$barrio,$horaI,$horaF,$tipo, $telefono);
        $res2 = $CentroVet->CrearCentroVeterinario();
        if ($res2)
        {
          unset($_COOKIE['owner']);
          setcookie('owner', null, -1);
          echo $this->successStyle."Veterinaria creado exitosamente </span>";
        }
        else {
          echo $this->errStyle."Error en la creación de la veterinaria.</span>";
          Usuario::deleteById($idOwner);
        }
      }
      else {
        echo $this->errStyle."Error en la creación de usuario.</span>";
      }
    }else {
      if (empty($nombre))
      {
        echo $this->errStyle."Inserte el nombre de su veterinaria</span>";
      }
      if ($tipo == 0)
      {
        echo $this->errStyle."Escoja el tipo de veterinaria</span>";
      }
      else {
        echo $this->errStyle."No puede estar en esta página sin tener datos de usuario llenados.</span>";
      }
    }
}


  function validarIngreso()
  {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!empty($username) && !empty($password))
    {
      $consulta = Usuario::getByUsername($username);
      if ($consulta != false)
      {
        if ($consulta->getPassword() == $password )
        {
          if ($consulta->getRol() == 'duenoClinica')
          {
            session_start();
            $_SESSION['rol'] = $consulta->getRol();
            $_SESSION['username'] = $consulta->getUserName();
            header('Location: homeAdministrador.php');
          }
          if ($consulta->getRol() == 'duenoMascota')
          {
            session_start();
            $_SESSION['rol'] = $consulta->getRol();
            $_SESSION['username'] = $consulta->getUserName();
            header('Location: homeCliente.php');
          }
          if ($consulta->getRol() == 'medicoVet')
          {
            session_start();
            $_SESSION['rol'] = $consulta->getRol();
            $_SESSION['username'] = $consulta->getUserName();
            header('Location: homeVeterinario.php');
          }
        }
        else {
          echo $this->errStyle."Contraseña incorrecta.</span>";
        }
      }
      else{
        echo $this->errStyle."El usuario no existe.</span>";
      }
    }
    else {
      echo $this->errStyle."Por favor, ingrese los campos obligatorios.</span>";
    }
  }

  public function actualizarDatosUsuario()
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
      if ($user != false)
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

  public function getDatosUsuario()
  {
    $id_admin = Usuario::getByUsername($_SESSION['username'])->getId() ;
    $admin = Usuario::getById($id_admin);
    return $admin;
  }
}


?>
