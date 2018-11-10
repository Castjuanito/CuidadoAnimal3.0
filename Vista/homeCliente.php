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
        		<a class="mr-2 text-light" href=""><img src="../assets/img/Salir.svg" class="d-inline-block align-top mx-1" width="25" height="25">Salir</a>
       		</div>
    	</div>
	</nav>
  <div class="container">
    <div class="col-md-4 col-sm-12 offset-md-4 my-4">
      <p class="text-center titulo">Cuidado Animal</p>
      <p class="text-center subtitulo">Busca una veterinaria</p>
      <form action="" name="busqueda">
      <div class="form-group texto">
          <label for="servicioFormSelect">Servicio</label>
          <select class="form-control" id="servicioSelect">
              <option></option>
          </select>
      </div>
          <div class="form-group texto">
          <label for="servicioFormSelect">Ciudad</label>
          <select class="form-control" id="ciudadSelect">
              <option></option>
          </select>
      </div>
      <div class="form-group texto">
          <label for="servicioFormSelect">Barrio</label>
          <select class="form-control" id="barrioSelect">
              <option></option>
          </select>
      </div>
      <div class="form-group texto">
          <label for="palabraFormText">Palabras Clave (opcional)</label>
          <input class="form-control" id="palabraFormControlInput" placeholder="pata rota, falta de apetito, moqueo">
      </div>
      <div class="col-12 my-4"><button type="button" class="btn btn-primary col-md-12 boton">Buscar</button></div>
      </form>
      <div class="col-12 my-4"><button type="button" class="btn btn-primary col-md-12 boton" onClick="location.href='notificacionesCliente.php'">Notificaciones</button></div>
      </div>
  </div>
    <script src="../assets/bootstrap/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>