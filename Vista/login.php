<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="../styles/login.css">
	<title>Login</title>
</head>
<body>
	<!-- Inicio Navbar -->
	<!--Barra de navegacion-->
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark sticky-top">
    <div class="container-fluid d-flex justify-content-between">
      <a class="navbar-brand mx-auto" href="#">
          <img id="logo" src="../assets/img/logoIngSoft.PNG" height="30" class="d-inline-block align-top" alt="Cuidado animal">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#MyNavbar" aria-controls="MyNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="MyNavbar">
        <div class="navbar-nav mr-auto ml-auto text-center">
          <a class="nav-item nav-link active" href="#">
            <div class="d-flex align-items-center justify-content-center">
                <img src="../assets/img/login-negro.svg" class="d-inline-block align-top mx-1" width="25" height="25">
                Login
            </div>
          </a>
          <a class="nav-item nav-link" href="busqueda.php">
            <div class="d-flex align-items-center justify-content-center">
                <img src="../assets/img/buscar-negro.svg" class="d-inline-block align-top mx-1" width="25" height="25">
                Buscar
            </div>
          </a>
          <a class="nav-item nav-link" href="registro.php">
            <div class="d-flex align-items-center justify-content-center">
                <img src="../assets/img/registro-negro.svg" class="d-inline-block align-top mx-1" width="25" height="25">
                Registrarse
            </div>
          </a>
          <a class="nav-item nav-link" href="contacto.php">
            <div class="d-flex align-items-center justify-content-center">
                <img src="../assets/img/contacto-negro.svg" class="d-inline-block align-top mx-1" width="25" height="25">
                Contactanos
            </div>
          </a>
        </div>
      </div>
    </div>
    </nav>
	<div class="container">
		<div class="col-md-4 col-sm-12 fondo1">
			<p class="text-center titulo">Cuidado Animal</p>
			<p class="text-center subtitulo">Ingresa con tu nombre de usuario y contraseña</p>
			<?php
			include_once "../Controlador/Funcionalidades/registro.php";
			if (isset($_POST['ingresar']))
			{
				$login = new registro();
				$login->validarIngreso();
			}
			?>
 		 	<div class="form-group texto">
        <form action="" name="login" method="post">
    			<label for="palabraFormText">Usuario</label>
    			<input class="form-control" id="palabraFormControlInput" placeholder="Nombre de usuario" name="username">
 		 	</div>
 		 	<div class="form-group texto">
    			<label for="palabraFormText">Contraseña</label>
    			<input class="form-control" id="palabraFormControlInput" placeholder="Contraseña" name="password">
 		 	</div>
            <div class="d-flex justify-content-end">
 		 		<button type="submit" class="btn btn-primary" name="ingresar">Ingresar</button>
            </div>
  		</div>
      </form>
  	</div>
    <script src="../assets/bootstrap/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
