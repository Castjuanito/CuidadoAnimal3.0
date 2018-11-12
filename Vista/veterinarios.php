<?php
  session_start();
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
      <p>Veterinarios</p>
    </div>
    <div class="row text-center justify-content-center">
    <div class="text-center col-md-4"><p class="subtitulo">Filtrar resultados:</p></div>
    <div class="row col-md-4 p-2">
          <div class="col-8"><select class="form-control" id="filtroCasos">
              <option></option>
          </select></div>
          <div class="col-4"> <button class="btn btn-primary">Filtrar</button></div>
        </div>
    <div class="row col-md-4 p-2">
          <div class="col-8"><input class="form-control" type="text" id="cedula"></div>
          <div class="col-4"> <button class="btn btn-primary">Buscar</button></div>
        </div>
        </div>
        <div class="row">
          <div class="p-4 col-md-4">
            <div class="list-group" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab">
                <p class="enunciado">Casos</p>
              </a>
            <?php
            include_once '../Controlador/Funcionalidades/c_adminVeterinaria.php';
            $admin = new c_adminVeterinaria();
            $empleados = $admin->encontrarEmpleados();
            if (!empty($empleados))
            {
            for ($i=0; $i <count($empleados) ; $i++)
            {
              echo "<a class='list-group-item list-group-item-action' id='".$empleados[$i]->getId()."' data-toggle='list' href='#".$empleados[$i]->getUserName()."' role='tab'>";
              echo "<p class='enunciado'>".$empleados[$i]->getId()."</p>";
              echo "<p class='contenido'>".$empleados[$i]->getNombre()."</p>";
              echo "</a>";
            }
          }
            ?>
            </div>
        </div>

          <div class="col-md-8 p-4 borde my-4">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
              <p>Selecciona un caso</p>
            </div>
              <?php
              include_once '../Controlador/Funcionalidades/c_adminVeterinaria.php';
              $admin = new c_adminVeterinaria();
              $empleados = $admin->encontrarEmpleados();
              if (!empty($empleados)){
              for ($i=0; $i <count($empleados) ; $i++)
                {
                  $especialidad = $admin->getEspecialidad($empleados[$i]->getId());
                  echo "<div class='tab-pane fade' id='".$empleados[$i]->getUserName()."' role='tabpanel' aria-labelledby='".$empleados[$i]->getId()."'>";
                  echo "<h class='enunciado'>ID: </h><h class='contenido'>".$empleados[$i]->getId()."</h><br>";
                  echo "<h class='enunciado'>Nombre: </h><h class='contenido'>".$empleados[$i]->getNombre()."</h><br>";
                  echo "<h class='enunciado'>Apellido: </h><h class='contenido'>".$empleados[$i]->getApellido()."</h><br>";
                  echo "<img src='' width='250' height='250' ><br>";
                  echo "<h class='enunciado'>Especialidad: </h><h class='contenido'>".$especialidad."</h><br>";
                  echo "<h class='enunciado'>Correo: </h><h class='contenido'>".$empleados[$i]->getEmailadd()."</h><br>";
                  echo "<h class='enunciado'>Telefono: </h><h class='contenido'>".$empleados[$i]->getTelefono()."</h><br>";
                  echo "</div>";
                }
              }
              ?>
              <type="button" class="btn btn-warning col-md-4 boton" onClick="location.href='agregarDetalle.php'">Agregar historia</button>
                  </div>
              </div>
          </div>
    <script src="../assets/bootstrap/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
