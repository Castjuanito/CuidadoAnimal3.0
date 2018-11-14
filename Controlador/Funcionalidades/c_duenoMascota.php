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
    $nombre = $_POST['nombreMascota'];
    $fecha_nacimiento = $_POST['ano']."-".$_POST['mes']."-".$_POST['dia'];
    $especie = $_POST['especie'];
    $raza = $_POST['raza'];
    $genero = $_POST['genero'];
    $color = $_POST['color'];
    if (!empty($nombre) && !empty($especie))
    {
      $mascota = new Mascota($id_dueno,$nombre,$especie,$raza,$fecha_nacimiento,$color,$genero);
      if ($mascota->create_Mascota())
      {
        echo $this->successStyle."Mascota agregada.</span>";
      }
    }else {
      echo $this->errStyle."Ingrese los datos obligatorios</span>";
    }
  }

  public function encontrarMascotas()
  {
    $id_dueno = Usuario::getByUsername($_SESSION['username'])->getId();
    $consulta = Mascota::findMascotas($id_dueno);
    $id_mascotas = [];
    $mascotas = [];
    if (!($consulta->num_rows < 1))
    {
      while ($fila = mysqli_fetch_array($consulta)) {
        $id_mascotas[] = $fila['id'];
      }
    }
    for ($i=0; $i < count($id_mascotas); $i++) {
      $mascotas[] = Mascota::findById($id_mascotas[$i]);
    }
    return $mascotas;
  }

  public function veterinariasVisitadas()
  {
    $mascotas = c_duenoMascota::encontrarMascotas();
    $n_mascotas = count($mascotas);
    $veterinarias = [];
    for ($i=0; $i < $n_mascotas ; $i++) {
      $caso = Caso::getByIdMascota($mascotas->getId());
      if (!$caso) {
        $id_medico = $caso->getMedicoId();
        $empleado = Empleado::findByIdEmpleado($id_medico);
        $veterinarias[] = CentroVeterinario::findByDueno($empleado->getIdDueno());
      }
    }
    return $veterinarias;
  }

  public function getDatos()
  {
    return Usuario::getByUsername($_SESSION['username']);
  }
}

 ?>
