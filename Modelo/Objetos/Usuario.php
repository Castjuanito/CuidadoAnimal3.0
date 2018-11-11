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
  private $telefono;

  function __construct($user_name, $password, $nombre, $apellido, $emailadd, $rol, $telefono)
  {
    $this->user_name = $user_name;
    $this->password = $password;
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->emailadd = $emailadd;
    $this->rol = $rol;
    $this->telefono = $telefono;
  }

  function Usuario()
  {

  }

  public function CrearUsuario ()
  {
    $conBD = new conexion();
    $sql = "INSERT INTO usuario (user_name, password, nombre, apellido, emailadd, rol, telefono) VALUES(
            '$this->user_name', '$this->password', '$this->nombre', '$this->apellido', '$this->emailadd',
            '$this->rol', $this->telefono )";
    $res = $conBD->ejecutarconsulta($sql);
    //if ($res)
      //this->id = $conBD->insert_id;
    return $res;
  }

  function UpdateUsuario (){
    $sql = "UPDATE usuario SET user_name = ". $this->user_name . ", password = " . $this->password . ", nombre = "
           . $this->nombre . ", apellido = ". $this->apellido. ", emailadd = ". $this->emailadd . ", rol = ". $this->rol .
           ", telefono = ".$this->telefono. " WHERE usuario.id = ". $this->id;
    return $this->conBD->ejecutarconsulta($sql);
  }

  public static function borrarUsuario ()
  {
    $sql = "DELETE FROM usuario WHERE usuario.id = $this->id ";
    return $this->conBD->ejecutarconsulta($sql);
  }

  public static function deleteByUsername ($username)
  {
    $sql = "DELETE FROM usuario WHERE usuario.user_name =".$username;
    return $this->conBD->ejecutarconsulta($sql);
  }

  public static function deleteById ($id)
  {
    $conBD = new conexion();
    $sql = "DELETE FROM usuario WHERE usuario.id =".$id;
    return $conBD->ejecutarconsulta($sql);
  }

  public static function getById($id)
  {
    $sql = "SELECT * FROM usuario WHERE usuario.id = $id";
    $conBD = new conexion();
    $consulta = $conBD->ejecutarconsulta($sql);
    if ($consulta->num_rows >= 1)
    {
      $fila = mysqli_fetch_array($consulta);
      $usuarioObj = new Usuario($fila["user_name"],$fila["password"],$fila["nombre"], $fila["emailadd"],
                              $fila["apellido"], $fila["rol"], $fila["telefono"]);
      $usuarioObj->setId($fila["id"]);
      return $usuarioObj;
    }
    else {
      return false;
    }
  }
  public static function getByUsername($user_name)
  {
    $sql = "SELECT * FROM usuario WHERE usuario.user_name = '$user_name'";
    $conBD = new conexion();
    $consulta = $conBD->ejecutarconsulta($sql);
    if ($consulta->num_rows >= 1)
    {
      $fila = mysqli_fetch_array($consulta);
      $usuarioObj = new Usuario($fila["user_name"],$fila["password"],$fila["nombre"], $fila["emailadd"],
                              $fila["apellido"], $fila["rol"], $fila["telefono"]);
      $usuarioObj->setId($fila["id"]);
      return $usuarioObj;
    }
    else{
      return false;
    }
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

    public function setId($id)
    {
      $this->id = $id;
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


    /**
     * Get the value of Telefono
     *
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of Telefono
     *
     * @param mixed telefono
     *
     * @return self
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

}

 ?>
