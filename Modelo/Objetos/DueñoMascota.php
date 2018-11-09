
<?php
/**
 *
 */
 include_once "../Modelo/Objetos/conexion.php";

class DuenoMascota
{
  private $user_name;
  private $password;
  private $nombre;
  private $apellido;
  private $emailadd;
  private $connection;

  function __construct($user_name, $password, $nombre, $apellido,$emailadd)
  {
    $this->user_name;
    $this->password;
    $this->nombre;
    $this->apellido;
    $this->emailadd;
    $this->onnection = new conexion() ;
  }

  public function create_DuenoMascota()
  {
    $sql= "INSERT INTO usuario (user_name,password,nombre,apellido,emailadd,rol) VALUES ('$this->user_name','$this->password','$this->apellido','dueñoMascota')";
    return $this->connection->ejecutarconsulta($sql);
  }
  public function delete_DuenoMascota($id)
  {
    $sql = "DELETE * FROM usuario WHERE USUARIO.ID = " .$id;
    $this->connection->ejecutarconsulta($sql);
  }
  public function update_DuenoMascota()
  {
    $sql = "UPDATE usuario user_name = '$this->user_name',  password = '$this->password', nombre = '$this->nombre', apellido = '$this->apellido', emailadd = '$this->emailadd'  WHERE USUARIO.ID = $this->$id";
    return  $this->connection->ejecutarconsulta($sql);
  }
  public function findAll()
  {
    $sql = "SELECT * FROM usuario WHERE USUARIO.ROL =". 'dueñoMascota';
    $this->connection->ejecutarconsulta($sql);
  }

  public function fingById($id)
  {
  $sql = "SELECT * FROM usuario WHERE USUARIO.ID = " .$id;
  $this->connection->ejecutarconsulta($sql);
  }

}


?>
