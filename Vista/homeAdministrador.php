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
	<title>Home</title>
</head>
<body>
<?php
include_once '../Controlador/Funcionalidades/c_adminVeterinaria.php';
$admin = new c_adminVeterinaria();
$veterinaria = $admin->getDatosVeterinaria();
 ?>
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
			<p><?php echo $veterinaria->getNombre(); ?></p>
		</div>
		<div class="text-center">
			<div class="my-4">
          <img src="../Imagenes/logoVet.png" width="250" height="250" >
          </div>
          <div class="container">
            <div class="text3"><?php echo $veterinaria->getNombre(); ?></div>
            <div class="text3"><?php echo $veterinaria->getTipo(); ?></div>
            <div class="text3"><?php echo $veterinaria->getDireccion(); ?></div>
            <div class="text3"><?php echo $veterinaria->getHoraI()."-".$veterinaria->getHoraF(); ?></div>
            <div id="calificacion" class="container d-flex justify-content-center"></div>
          </div>
          <div class="col-md-4 offset-md-4 my-4">
          	<button type="button" class="btn btn-primary col-md-12 boton" onClick="location.href='nuevoCaso.php'">Nuevo Caso</button>
          </div>
          <div class="col-md-4 offset-md-4 my-4">
          	<button type="button" class="btn btn-primary col-md-12 boton" onClick="location.href='notificacionesAdminVete.php'">Notificaciones</button>
          </div>
          <div class="row justify-content-center">
          <div class="col-md-4 my-4">
          	<button type="button" class="btn btn-primary col-md-12 boton" onClick="location.href='editarPerfilVeterinaria.php'">Editar Veterinaria</button>
          </div>
          <div class="col-md-4 my-4">
          	<button type="button" class="btn btn-primary col-md-12 boton" onClick="location.href='editarPerfilAdmin.php'">Editar Perfil</button>
          </div>
          </div>
        </div>
			</div>
    <script src="../assets/bootstrap/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
