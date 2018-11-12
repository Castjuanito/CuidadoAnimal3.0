<?php
include_once '../Modelo/Objetos/Mascota.php';
include_once '../Modelo/Objetos/Usuario.php';
/**
 *
 */
class c_duenoMascota
{
  var $errStyle = "<span style='border-radius: 5px; color:rgb(153, 24, 24);border-style:inset;background-color: rgba(219, 55, 38, 0.56);' >";
  var $successStyle = "<span style='border-radius: 5px; color:rgb(7, 64, 5);border-style:inset;background-color: rgba(13, 193, 36, 0.57);' >";

  public function agregarMascota()
  {
    $id_dueno = Usuario::getByUsername($_SESSION['username'])->getId();
    $nombre = $_POST['nombre'];
    $fecha_nacimiento = $_POST['ano']."-".$_POST['mes']."-".$_POST['dia'];
    $especie = $_POST['especie'];
    $raza = $_POST['raza'];
    $genero = $_POST['genero'];
    $color = $_POST['color'];
    if (!empty($nombre) && !empty($especie))
    {
      if (Mascota::create_Mascota($id_dueno,$nombre,$fecha_nacimiento,$especie,$raza,$genero,$color))
      {
        echo $this->$successStyle."Mascota agregada.</span>";
      }
    }else {
      echo $this->$errStyle."Ingrese los datos obligatorios</span>";
    }
  }

}

 ?>
