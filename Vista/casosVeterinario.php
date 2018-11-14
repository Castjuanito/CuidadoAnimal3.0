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
	<title>Casos</title>
</head>
<body>
	<!-- Inicio Navbar -->
	<!--Barra de navegacion-->
	<nav class="navbar nav-masthead navbar-dark sticky-top navbar-expand-lg text-center barra" id="mainNav">

    	<a class="navbar-brand mx-auto js-scroll-trigger" href="homeVeterinario.php.php">
        	<img id="logo" src="../assets/img/logoIngSoft2.PNG" height="40" class="d-inline-block align-top" alt="Cuidado animal">
    	</a>

    	<button class="navbar-toggler collapsed navbar-toggler-right text-center" type="button" data-toggle="collapse" data-target="#navbarTogglerCA" aria-controls="navbarTogglerCA" aria-halflings-expandes="false" aria-label="Toggle navigation">
        	<span class="nav-icon navbar-toggler-icon"></span>
        </button>

    	<div class="collapse navbar-collapse" id="navbarTogglerCA">
        <div class="navbar-nav mx-auto text-center">
            	<a class="nav-item nav-link text-light" href="homeVeterinario.php"><img src="../assets/img/home.svg" class="d-inline-block align-top mx-1" width="25" height="25"> Inicio </a>
            	<a class="nav-item nav-link text-light" href="casosVeterinario.php"><img src="../assets/img/mascota.svg" class="d-inline-block align-top mx-1" width="25" height="25">Casos</a>
            	<a class="nav-item nav-link text-light" href="busquedaVeterinario.php"><img src="../assets/img/cliente.svg" class="d-inline-block align-top mx-1" width="25" height="25">Buscar</a>
              <a class="nav-item nav-link text-light" href="veterinariasVeterinario.php"><img src="../assets/img/veterinario.svg" class="d-inline-block align-top mx-1" width="25" height="25">Veterinarias</a>
        	</div>
        	<div class="d-flex flex-row justify-content-center">
        		<a class="mr-2 text-light" href="login.php"><img src="../assets/img/Salir.svg" class="d-inline-block align-top mx-1" width="25" height="25">Salir</a>
       		</div>
    	</div>
	</nav>
   <div class="container">
      <div class="titulo text-center">
      <p>Casos</p>
    </div>
    <div class="row">
      <div class="list-group p-4 col-md-4">
      <div class="list-group" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab">
                <p class="enunciado">Veterinarios</p>
              </a>
              <?php
              include_once '../Controlador/Funcionalidades/c_medicoVeterinario.php';
              $admin = new c_medicoVeterinaria();
              $casos = $admin->getCasos();
              if (!empty($casos)){
              for ($i=0; $i <count($casos) ; $i++)
              {
                echo "<a class='list-group-item list-group-item-action'".$i." data-toggle='list' href='#list-".$i."' role='tab'>";
                echo "<h class='enunciado'>ID caso: </h><h class='enunciado'>".$casos[$i][1]->getId()."</h><br>";
                echo "<h class='enunciado'>Nombre mascota: </h><h class='contenido'>".$casos[$i][0]->getNombre()."</h><br>";
                echo "</a>";
              }
            }
              ?>
      </div>
      <div class="justify-content-center my-1">
        <button type="button" class="btn btn-success col-md-12 boton" onClick="location.href='nuevoCaso.php'">Nuevo Caso</button>
  </div>
  </div>
      <div class="col-md-8 p-4 borde my-4">
      <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <h6>Elija un caso</h6>
              </div>
          <?php
          if (!empty($casos)){
          for ($i=0; $i <count($casos) ; $i++)
            {
                    echo "<div class='tab-pane fade' id='list-".$i."' role='tabpanel' aria-labelledby='$i'>";
                    echo "<h class='enunciado'>ID Caso: </h><h class='contenido'>".$casos[$i][1]->getId()."</h><br>";
                    echo "<h class='enunciado'>ID Veterinario: </h><h class='contenido'>".$casos[$i][2]->getId()."</h><br>";
                    echo "<h class='enunciado'>Nombre Veterinario: </h><h class='contenido'>".$casos[$i][2]->getNombre()."</h><br>";
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
