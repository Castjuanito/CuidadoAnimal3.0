<?php
session_start();
<<<<<<< HEAD
=======
include_once '../Controlador/Funcionalidades/c_adminVeterinaria.php';
>>>>>>> 5c468f14bc5d21a5382dd8a1cb9cbafefef851ef
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="../styles/administradorVeterinaria.css">
  <title>Veterinarios</title>
</head>
<body>
  <!-- Inicio Navbar -->
  <!--Barra de navegacion-->
  <?php
  $admin = new c_adminVeterinaria();
  $empleados = $admin->encontrarEmpleados();
   ?>
  <nav class="navbar nav-masthead navbar-dark sticky-top navbar-expand-lg text-center barra" id="mainNav">

      <a class="navbar-brand mx-auto js-scroll-trigger" href="homeAdministrador.php">
          <img id="logo" src="../assets/img/logoIngSoft2.PNG" height="40" class="d-inline-block align-top" alt="Cuidado animal">
      </a>

      <button class="navbar-toggler collapsed navbar-toggler-right text-center" type="button" data-toggle="collapse" data-target="#navbarTogglerCA" aria-controls="navbarTogglerCA" aria-halflings-expandes="false" aria-label="Toggle navigation">
          <span class="nav-icon navbar-toggler-icon"></span>
          </button>

      <div class="collapse navbar-collapse" id="navbarTogglerCA">
          <div class="navbar-nav mx-auto text-center">
              <a class="nav-item nav-link text-light" href="homeAdministrador.php"><img src="../assets/img/home.svg" class="d-inline-block align-top mx-1" width="25" height="25"> Inicio </a>
              <a class="nav-item nav-link text-light" href="casosAdministrador.php"><img src="../assets/img/casos.svg" class="d-inline-block align-top mx-1" width="25" height="25">Casos</a>
              <a class="nav-item nav-link text-light" href="veterinarios.php"><img src="../assets/img/veterinario.svg" class="d-inline-block align-top mx-1" width="25" height="25">Veterinarios</a>
              <a class="nav-item nav-link text-light" href="mascotas-administrador.php"><img src="../assets/img/mascota.svg" class="d-inline-block align-top mx-1" width="25" height="25">Mascotas</a>
              <a class="nav-item nav-link text-light" href="clientes.php"><img src="../assets/img/cliente.svg" class="d-inline-block align-top mx-1" width="25" height="25">Clientes</a>
          </div>
          <div class="d-flex flex-row justify-content-center">
              <a class="mr-2 text-light" href="login.php"><img src="../assets/img/Salir.svg" class="d-inline-block align-top mx-1" width="25" height="25">Salir</a>
          </div>
      </div>
   </nav>
   <div class="container">
      <div class="titulo text-center my-4">
        <p>Nuevo caso</p>
      </div>
      <form class="" action="" method="post" name="nuevoCaso" id="nuevoCaso">
      <div class="justify-content-center">
        <?php
          if (isset($_POST['crear']))
          {
            $admin->crearCaso();
          }
         ?>
        <div class="justify-content-center">
          <p class="subtitulo text-center">Veterinario:</p>
        </div>
        <div class="col-md-8 offset-md-2 p-2">
          <select name="selCombo" class="custom-select">
              <option value="-1">
              </option>
              <?php
              include_once '../Controlador/Funcionalidades/c_adminVeterinaria.php';
              $admin = new c_adminVeterinaria();
              $empleados = $admin->encontrarEmpleados();
              if (!empty($empleados)){
              for ($i=0; $i <count($empleados) ; $i++)
              {
                $especialidad = $admin->getEspecialidad($empleados[$i]->getId());
                echo "<option value='".$empleados[$i]->getId()."'>Nombre: ".$empleados[$i]->getNombre()." - Especialadad: ".$especialidad."</option>";
              }
            }
              ?>
            </select>
        </div>
        <div class="justify-content-center">
          <p class="subtitulo text-center">ID Mascota:</p>
        </div>
        <div class="col-md-8 offset-md-2 p-2">
          <input type="text" class="form-control" name="idMascota" placeholder="ID Mascota">
        </div>
        <div class="col-md-8 offset-md-2 p-2 my-4">
            <button type="submit" name="crear" class="btn btn-success col-md-12 boton">Crear Caso</button>
        </div>
        <div class="row">
          <div class="col-md-6">

          </div>
        </div>
        </div>
              </form>
        </div>
    <script src="../assets/bootstrap/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
