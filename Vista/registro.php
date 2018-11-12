<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="../styles/registro.css">
  <title>Registro</title>
</head>
<body>
  <!-- Inicio Navbar -->
  <!--Barra de navegacion-->
  <nav class="navbar nav-masthead navbar-dark sticky-top navbar-expand-lg text-center barra" id="mainNav">
      <a class="navbar-brand mx-auto" href="">
          <img id="logo" src="../assets/img/logoIngSoft.PNG" height="50" class="d-inline-block align-top" alt="Cuidado animal">
      </a>
      <button class="navbar-toggler collapsed navbar-toggler-right text-center" type="button" data-toggle="collapse" data-target="#navbarTogglerCA" aria-controls="navbarTogglerCA" aria-halflings-expandes="false" aria-label="Toggle navigation">
          <span class="nav-icon navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarTogglerCA">
          <div class="navbar-nav mx-auto text-center">
            <a class="nav-item text-barra" href="busqueda.php"><img src="../assets/img/buscar-negro.svg" class="d-inline-block align-top mx-1" width="25" height="25">Busqueda</a>
            <a class="nav-item text-barra" href="login.php"><img src="../assets/img/login-negro.svg" class="d-inline-block align-top mx-1" width="25" height="25">Login</a>
            <a class="nav-item text-barra" href="registro.php"><img src="../assets/img/registro-negro.svg" class="d-inline-block align-top mx-1" width="25" height="25">Registrarse</a>
            <a class="nav-item text-barra" href="contacto.php"><img src="../assets/img/contacto-negro.svg" class="d-inline-block align-top mx-1" width="25" height="25">Contactanos</a>
        </div>
      </div>
  </nav>
  <div class="container">
    <div class="col-md-4 col-sm-12 fondo1">
      <p class="text-center titulo">Cuidado Animal</p>
      <p class="text-center subtitulo">Elige el tipo de usuario con el que quieres registrarte</p>
      <button type="button" class="btn btn-primary col-md-12 my-5" onClick="location.href='resgitroAdministrador.php'">Administrador de veterinaria</button>
      <button type="button" class="btn btn-primary col-md-12 boton" onClick="location.href='registroCliente.php'">Dueño de mascota</button>
      </div>
    </div>
    <script src="../assets/bootstrap/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
