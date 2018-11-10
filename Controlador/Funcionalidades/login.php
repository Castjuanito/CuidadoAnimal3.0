<?php
include_once "../Modelo/Objetos/Usuario.php";
/**
 *
 */
class login
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
            setcookie('Owner', $usuarioObj, time()+600);
            header('Location: registroCentroVeterinario.php');
          }elseif ($rol == 'duenoMascota') {
            $res = $usuarioObj->CrearUsuario();
            if ($res)
              echo $this->successStyle. "Usuario registrado exitosamente.</span>";
            else {
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
  }

  function crearVeterinaria()
  {
    $idOwner = Usuario::getByUsername($_COOKIE['Owner']->getUsername());
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $localidad = $_POST['localidad'];
    $barrio = $_POST['barrio'];
    $horaI = $_POST['horaI'].":".$_POST['minI'];
    $horaF = $_POST['horaF'].":".$_POST['minF'];
    $tipo = $_POST['tipo'];

    if (!empty($nombre) && isset($_COOKIE['Owner']) && $tipo != 0)
    {
      $res = $_COOKIE['Owner']->CrearUsuario();
      if ($res)
      {
        $CentroVet = new CentroVeterinario($idOwner,$nombre,$direccion,$ciudad,$localidad,$barrio,$horaI,$horaF,$tipo);
        $res2 = $CentroVet->crearCentroVeterinario();
        if ($res2)
        {
          unset($_COOKIE['Owner']);
          setcookie('Owner', null, -1);
          echo $this->successStyle."Usuario creado exitosamente </span>";
        }
        else {
          echo $this->errStyle."Error en la creación de la veterinaria.</span>";
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
            header('Location: homeAdministrador.php');
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
}

?>
