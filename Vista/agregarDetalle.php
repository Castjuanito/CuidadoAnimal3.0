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
              <a class="nav-item nav-link text-light" href="veterinariasVisitadas.php"><img src="../assets/img/veterinario.svg" class="d-inline-block align-top mx-1" width="25" height="25">Veterinarias</a>
        	</div>
        	<div class="d-flex flex-row justify-content-center">
        		<a class="mr-2 text-light" href="login.php"><img src="../assets/img/Salir.svg" class="d-inline-block align-top mx-1" width="25" height="25">Salir</a>
       		</div>
    	</div>
	</nav>
   <div class="container my-4">
      <div class="titulo text-center my-4">
      <p>Casos</p>
    </div>
    <div class="col-md-8 offset-md-2 justify-content-center text-center">
      <textarea name="detalle" rows="8" cols="80"></textarea>
        <type="button" class="btn btn-warning col-md-4 boton" onClick="location.href='casosVeterinario.php'">Confirmar</button>
    </div>
  </div>

    <script src="../assets/bootstrap/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
