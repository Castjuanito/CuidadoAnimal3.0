<?php
  /**
   *
   */
  class Admin
  {
    var $user_name;
    var $password;
    var $nombre;
    var $apellido;
    var $emailadd;
    var $connection;


    function __construct($user_name,$password,$nombre,$apellido,$emailadd){
      $this->$user_name;
      $this->$password;
      $this->$nombre;
      $this->$apellido;
      $this->$emailadd;
      $this->connection = new conexion() ;

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
      $sql = "UPDATE usuario user_name = '$this->user_name',  password = '$this->password', nombre = '$this->nombre', apellido = '$this->apellido', emailadd = '$this->emailadd'  WHERE USUARIO.ID = $this->$id";
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
  }
 ?>
