<?php
include_once "../Modelo/Objetos/conexion.php";

/**
 *
 */
class Usuario
{
  private $id;
  private $user_name;
  private $password;
  private $nombre;
  private $apellido;
  private $emailadd;
  private $rol;
  private $conBD;

  function __construct($user_name, $password, $nombre, $apellido, $emailadd, $rol)
  {
    $this->$user_name = $user_name;
    $this->$password = $password;
    $this->$nombre = $nombre;
    $this->$apellido = $apellido;
    $this->$emailadd = $emailadd;
    $this->$rol = $rol;
    $this->$conBD = new conexion();
  }

  function Usuario()
  {

  }

  public static function CrearUsuario ()
  {
    $sql = "INSERT INTO usuario (user_name, password, nombre, apellido, emailadd, rol) VALUES(
            '$this->$user_name', '$this->$password', '$this->$nombre', '$this->$apellido', $this->$emailadd, $this->$rol)";
    $res = $this->$conBD->ejecutarconsulta($sql);
    if ($res)
      $this->$id = mysqli_insert_id($conBD);
    return $res;
  }

  function UpdateUsuario (){
    $sql = "UPDATE usuario SET user_name = ". $this->$user_name . ", password = " . $this->$password . ", nombre = "
           . $this->$nombre . ", apellido = ". $this->$apellido. ", emailadd = ". $this->emai . ", rol = ". $this->rol .
           "WHERE usuario.id = ". $this->id;
    return $this->$conBD->ejecutarconsulta($sql);
  }

  public static function borrarUsuario ()
  {
    $sql = "DELETE FROM usuario WHERE usuario.id = $this->$id ";
    return $this->$conBD->ejecutarconsulta($sql);
  }

  public static function getById($id)
  {
    $sql = "SELECT * FROM usuario WHERE usuario.id = $id";
    $consulta = $this->$conBD->ejecutarconsulta($sql);
    $fila = mysqli_fetch_array($consulta);
    $usuarioObj = new Usuario();
    $usuarioObj->setId($fila["id"]);
    $usuarioObj->setPassword($fila["password"]);
    $usuarioObj->setUserName($fila["user_name"]);
    $usuarioObj->setApellido($fila["apellido"]);
    $usuarioObj->setNombre($fila["nombre"]);
    $usuarioObj->setEmailadd($fila["emailadd"]);
    $usuarioObj->setRol($fila["rol"]);
    return $usuarioObj;
  }
  public static function getByUsername($user_name)
  {
    $sql = "SELECT * FROM usuario WHERE usuario.user_name = $user_name";
    $consulta = $this->$conBD->ejecutarconsulta($sql);
    $fila = mysqli_fetch_array($consulta);
    $usuarioObj = new Usuario();
    $usuarioObj->setId($fila["id"]);
    $usuarioObj->setPassword($fila["password"]);
    $usuarioObj->setUserName($fila["user_name"]);
    $usuarioObj->setApellido($fila["apellido"]);
    $usuarioObj->setNombre($fila["nombre"]);
    $usuarioObj->setEmailadd($fila["emailadd"]);
    $usuarioObj->setRol($fila["rol"]);
    return $usuarioObj;
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
     * Get the value of User Name
     *
     * @return mixed
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * Set the value of User Name
     *
     * @param mixed user_name
     *
     * @return self
     */
    public function setUserName($user_name)
    {
        $this->user_name = $user_name;

        return $this;
    }

    /**
     * Get the value of Password
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of Password
     *
     * @param mixed password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

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
     * Get the value of Apellido
     *
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of Apellido
     *
     * @param mixed apellido
     *
     * @return self
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of Emailadd
     *
     * @return mixed
     */
    public function getEmailadd()
    {
        return $this->emailadd;
    }

    /**
     * Set the value of Emailadd
     *
     * @param mixed emailadd
     *
     * @return self
     */
    public function setEmailadd($emailadd)
    {
        $this->emailadd = $emailadd;

        return $this;
    }

    /**
     * Get the value of Rol
     *
     * @return mixed
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set the value of Rol
     *
     * @param mixed rol
     *
     * @return self
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

}

 ?>
