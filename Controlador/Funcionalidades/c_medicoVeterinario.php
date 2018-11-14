<?php
include_once '../Modelo/Objetos/Mascota.php';
include_once '../Modelo/Objetos/Usuario.php';
include_once '../Modelo/Objetos/Caso.php';
/**
 *
 */
class c_medicoVeterinaria
{
  var $errStyle = "<span style='border-radius: 5px; color:rgb(153, 24, 24);border-style:inset;background-color: rgba(219, 55, 38, 0.56);' >";
  var $successStyle = "<span style='border-radius: 5px; color:rgb(7, 64, 5);border-style:inset;background-color: rgba(13, 193, 36, 0.57);' >";

  public function crearDetalleCaso()
  {
    $id_caso = $_POST['idCaso'];
    $info = $_POST['info'];
    if (!empty($info))
    {
      $caso = new Caso($id_caso, $info);
      if ($caso->crearDetalleCaso())
      {
        header('Location: casosVeterinario.php');
      }else {
        echo $this->errStyle."Error en la creacion</span>";
      }
    }else {
      echo $this->errStyle."Por favor ingrese información del caso</span>";
    }
  }

  public function getCasos()
  {
    $id_medico = Usuario::getByUsername($_SESSION['username'])->getId();
    $consulta= Caso::getCasos($id_medico);
    $casos = [];
    $n_casos = count($consulta);
    for($i = 0; $i < $n_casos; $i++ )
    {
      $casos[] = $consulta[$i];
      $detalles = DetalleCaso::getByCaso($consulta[$i]->getId());
      $casos[$i] = [];
      $n_detalles = count($detalles);
      for ($j=0; $j < $n_detalles; $j++) {
        $casos[$i][] = $detalles[$j];
      }
    }
    return $casos;
  }

}

 ?>
