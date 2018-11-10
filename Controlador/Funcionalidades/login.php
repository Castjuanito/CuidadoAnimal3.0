<?php
include_once "../Modelo/Objetos/Usuario.php";
/**
 *
 */
class login
{
  var $errStyle = "<span style='border-radius: 5px; color:red;border-style:inset;background-color: rgba(219, 55, 38, 0.56);' >";
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
          $res = $usuarioObj->CrearUsuario();
          if ($res)
            echo $this->successStyle. "Usuario registrado exitosamente.</span>";
          else {
            echo $this->errStyle."Error en la creación.</span>";
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
          echo "Ingreso exitoso";
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
