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
	<link rel="stylesheet" href="../styles/cliente.css">
	<title>Home</title>
</head>
<body>
	<!-- Inicio Navbar -->
	<!--Barra de navegacion-->
	<nav class="navbar nav-masthead navbar-dark sticky-top navbar-expand-lg text-center barra" id="mainNav">

    	<a class="navbar-brand mx-auto js-scroll-trigger" href="homeCliente.php">
        	<img id="logo" src="../assets/img/logoIngSoft2.PNG" height="40" class="d-inline-block align-top" alt="Cuidado animal">
    	</a>

    	<button class="navbar-toggler collapsed navbar-toggler-right text-center" type="button" data-toggle="collapse" data-target="#navbarTogglerCA" aria-controls="navbarTogglerCA" aria-halflings-expandes="false" aria-label="Toggle navigation">
        	<span class="nav-icon navbar-toggler-icon"></span>
        </button>

    	<div class="collapse navbar-collapse" id="navbarTogglerCA">
        <div class="navbar-nav mx-auto text-center">
            	<a class="nav-item nav-link text-light" href="homeCliente.php"><img src="../assets/img/home.svg" class="d-inline-block align-top mx-1" width="25" height="25"> Inicio </a>
            	<a class="nav-item nav-link text-light" href="mascotasCliente.php"><img src="../assets/img/mascota.svg" class="d-inline-block align-top mx-1" width="25" height="25">Mis Mascotas</a>
            	<a class="nav-item nav-link text-light" href="cuentaCliente.php"><img src="../assets/img/cliente.svg" class="d-inline-block align-top mx-1" width="25" height="25">Mi cuenta</a>
              <a class="nav-item nav-link text-light" href="veterinariasVisitadas.php"><img src="../assets/img/veterinario.svg" class="d-inline-block align-top mx-1" width="25" height="25">Veterinarias</a>
        	</div>
        	<div class="d-flex flex-row justify-content-center">
        		<a class="mr-2 text-light" href="login.php"><img src="../assets/img/Salir.svg" class="d-inline-block align-top mx-1" width="25" height="25">Salir</a>
       		</div>
    	</div>
	</nav>
  <div class="text-center fondo1 offset-md-2 col-md-8 col-xs-12">
  <form id="regisVete" form action="" name="regisVete" method="post">
    <div class="row d-flex justify-content-center mb-0">
     <label class="tituloForm mb-0 mt-3">Registro de Mascota</label>
		 <?php
		  include_once '../Controlador/Funcionalidades/c_duenoMascota.php';
		  ?>
    </div>
    <div class="row form-group d-flex justify-content-center">
      <div class="col-md-5 col-xs-12 p-0 campo">
        <label class="letraForm">Nombre</label>
        <input type="text" class="form-control" name="nombreMascota" placeholder="Especie" value="nombre">
      </div>
      <div class="col-md-5 col-xs-12 p-0 campo">
        <label class="letraForm">Fecha nacimiento</label>
				<div class="row justifyContentCenter">
				<div class="">
					<select class="form-control" name="dia">
	        	<option value=""></option>
						<?php
						for($i=1; $i<32; $i++){
							echo "<option value='".$i."'>".$i."</option>";
						} ?>
	        </select><br>
					<label>dia</label>
				</div>
				<div class="">
					<select class="form-control" name="mes">
	        	<option value=""></option>
						<?php
						for($i=1; $i<13; $i++){
							echo "<option value='".$i."'>".$i."</option>";
						} ?>
	        </select><br>
					<label>mes</label>
				</div>
				<div class="">
					<select class="form-control" name="ano">
	        	<option value=""></option>
						<?php
						for($i=1900; $i<2018; $i++){
							echo "<option value='".$i."'>".$i."</option>";
						} ?>
	        </select><br>
					<label>año</label>
				</div>
				</div>
      </div>
    </div>
    <div class="row form-group d-flex justify-content-center">
      <div class="col-md-5 col-xs-12 p-0 campo">
        <label class="letraForm">Especie</label>
        <input type="text" class="form-control" name="especie" placeholder="Especie" value="especie">
      </div>
      <div class="col-md-5 col-xs-12 p-0 campo">
        <label class="letraForm">Raza</label>
        <input type="text" class="form-control" name="raza" placeholder="Raza" value="raza">
      </div>
    </div>
    <div class="row form-group d-flex justify-content-center">
      <div class="col-md-5 col-xs-12 p-0 campo">
        <label class="letraForm">Genero</label>
				<select class="form-control" name="dia">
					<option value=""></option>
					<option value="hembra">Hembra</option>
					<option value="macho">macho</option>
				</select>
      </div>
      <div class="col-md-5 col-xs-12 p-0 campo">
        <label class="letraForm">Color</label>
        <input type="text" class="form-control" name="color" placeholder="Color" value="color">
      </div>
    </div>
    <div class="row form-group d-flex justify-content-center">
      <button type="submit" class="btn btn-primary mb-3" name="registrar">Finalizar Registro</button>
    </div>
  </form>
</div>
    <script src="../assets/bootstrap/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
