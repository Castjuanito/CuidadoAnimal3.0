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
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $rol  = $_POST['rol'];
    $telefono = $_POST['telefono'];
    if (!empty($username) && !empty($password) && !empty($rol))
    {
      $usuarioObj = new Usuario();
      $consulta = $usuarioObj->getByUsername($username);
      if ($consulta->num_rows < 1)
      {
        $usuarioObj->setUserName($username);
        $usuarioObj->setPassword($password);
        $usuarioObj->setNombre($nombre);
        $usuarioObj->setApellido($apellido);
        $usuarioObj->setEmailadd($email);
        $usuarioObj->setRol($rol);
        $usuarioObj->setTelefono($telefono);
        $usuarioObj->CrearUsuario();
        echo "Usuario registrado exitosamente.";
      }
      else{
        echo "El nombre de usuario ya existe, por favor intente con otro.";
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
      $usuarioObj = new Usuario();
      $consulta = $usuarioObj->getByUsername($username);
      if ($consulta->num_rows > 0)
      {
        $fila = mysqli_fetch_array($consulta);
        if ($fila["user_name"] == $username )
        {
          if ($fila["password"] == $password )
          {
            echo "ingreso exitoso";
          }
          else {
            echo "Contraseña incorrecta";
          }
        }
        else{
          echo "ususario incorrecto";
        }
      }
    }
  }
}

?>
