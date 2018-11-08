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


    function __construct(){
    $this->connection = new conexion() ;
    }
    public function create_Admin($value='')
    {

    }
    public function delete_Admin($value='')
    {

    }
    public function update_Admin($value='')
    {
      // code...
    }
    public function findAll($value='')
    {
      // code...
    }

    public function fingById($value='')
    {
      // code...
    }

    

  }


 ?>
