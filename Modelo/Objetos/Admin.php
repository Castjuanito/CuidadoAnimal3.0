<?php
  /**
   *
   */
  include_once "../Modelo/Objetos/conexion.php";

  class Admin
  {
    private $id;
    private $user_name;
    private $password;
    private $nombre;
    private $apellido;
    private $emailadd;
    private $connection;


    function __construct($user_name,$password,$nombre,$apellido,$emailadd){
      $this->user_name;
      $this->password;
      $this->nombre;
      $this->apellido;
      $this->emailadd;
      $this->onnection = new conexion() ;

    }
    public function create_Admin()
    {
      $sql= "INSERT INTO usuario (user_name,password,nombre,apellido,emailadd,rol) VALUES ('$this->user_name','$this->password','$this->apellido','admin')";
      return $this->connection->ejecutarconsulta($sql);
    }
    public function delete_Admin($id)
    {
      $sql = "DELETE * FROM usuario WHERE USUARIO.ID = " .$id;
      $this->connection->ejecutarconsulta($sql);
    }
    public function update_Admin()
    {
      $sql = "UPDATE usuario user_name = '$this->user_name',  password = '$this->password', nombre = '$this->nombre', apellido = '$this->apellido', emailadd = '$this->emailadd'  WHERE USUARIO.ID = $this->id";
      return  $this->connection->ejecutarconsulta($sql);
    }
    public function findAll()
    {
      $sql = "SELECT * FROM usuario WHERE USUARIO.ROL =". 'admin';
      $this->connection->ejecutarconsulta($sql);
    }

    public function fingById($id)
    {
    $sql = "SELECT * FROM usuario WHERE USUARIO.ID = " .$id;
    $this->connection->ejecutarconsulta($sql);
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
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Get the value of Connection
     *
     * @return mixed
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * Set the value of Connection
     *
     * @param mixed connection
     *
     * @return self
     */
    public function setConnection($connection)
    {
        $this->connection = $connection;

        return $this;
    }

}
 ?>
