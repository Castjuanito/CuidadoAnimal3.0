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
  <title>Mascotas</title>
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
      <p>Mascotas</p>
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
          <div class="list-group p-4 col-md-4">
          <div class="list-group" id="list-tab" role="tablist">
                  <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab">
                    <p class="enunciado">Veterinarios</p>
                  </a>
                  <?php
                  include_once '../Controlador/Funcionalidades/c_adminVeterinaria.php';
            $admin = new c_adminVeterinaria();
            $mascota = $admin->getMascotas();
            if (!empty($mascota))
            {
                  for ($i=0; $i <count($mascota) ; $i++)
                  {
                    echo "<a class='list-group-item list-group-item-action'".$i." data-toggle='list' href='#list-".$i."' role='tab'>";
                    echo "<h class='enunciado'>ID: </h><h class='enunciado'>".$mascota[$i]->getId()."</h><br>";
                    echo "<h class='enunciado'>Nombre: </h><h class='contenido'>".$mascota[$i]->getNombre()."</h><br>";                    echo "</a>";
                    echo "</a>";
                  }
                }
                  ?>
          </div>
          <div class="justify-content-center my-1">
            <button type="button" class="btn btn-success col-md-12 boton" onClick="location.href='registroVeterinario.php'">Nuevo veterianario</button>
      </div>
      </div>
          <div class="col-md-8 p-4 borde my-4">
          <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <h6>Elija un caso</h6>
                  </div>
              <?php
              include_once '../Controlador/Funcionalidades/c_adminVeterinaria.php';
              $admin = new c_adminVeterinaria();
              $mascota = $admin->getMascotas();
              if (!empty($mascota)){
              for ($i=0; $i <count($mascota) ; $i++)
                {
                  echo "<div class='tab-pane fade' id='list-".$i."' role='tabpanel' aria-labelledby='$i'>";
                  echo "<h class='enunciado'>ID: </h><h class='enunciado'>".$mascota[$i]->getId()."</h><br>";
                  echo "<h class='enunciado'>Nombre: </h><h class='contenido'>".$mascota[$i]->getNombre()."</h><br>";
                  echo "<h class='enunciado'>Raza: </h><h class='contenido'>".$mascota[$i]->getRaza()."</h><br>";
                  echo "<h class='enunciado'>Especie: </h><h class='contenido'>".$mascota[$i]->getEspecie()."</h><br>";
                  echo "<h class='enunciado'>Fecha Nacimiento: </h><h class='contenido'>".$mascota[$i]->getFechaNacimiento()."</h><br>";
                  echo "<h class='enunciado'>Color: </h><h class='contenido'>".$mascota[$i]->getColor()."</h><br>";
                  echo "<h class='enunciado'>Fecha: </h><h class='contenido'>".$mascota[$i]->getFechaNacimiento()."</h><br>";
                  echo "<h class='enunciado'>Fecha: </h><h class='contenido'>".$mascota[$i]->getGenero()."</h><br>";
                  echo "</div>";
                    }
                  }
                    ?>
                </div>
             </div>
    			</div>
    <script src="../assets/bootstrap/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
