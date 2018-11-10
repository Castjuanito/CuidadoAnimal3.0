<?php
include_once "../Modelo/Objetos/Usuario.php";
/**
 *
 */
class login
{
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
    echo "rol: ". $rol. "<br>";
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
            echo "Usuario registrado exitosamente.";
          else {
            echo "Error en la creación.";
          }
        }
        else{
          echo "El nombre de usuario ya existe, por favor intente con otro.";
        }
      }
      else {
        echo "las contraseñas no coinciden";
      }
    }
    else {
      echo "Por favor, ingrese los campos obligatorios";
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
          echo "ingreso exitoso<br>";
        }
        else {
          echo "Contraseña incorrecta";
        }
      }
      else{
        echo "El usuario no existe";
      }
    }
    else {
      echo "ingrese los campos obligatorios";
    }
  }
}

?>
