<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="../styles/registro.css">
  <title>Registro</title>
</head>
<body>
  <!-- Inicio Navbar -->
  <!--Barra de navegacion-->
      <nav class="navbar navbar-expand-xl navbar-dark bg-dark sticky-top">
    <div class="container-fluid d-flex justify-content-between">
      <a class="navbar-brand mx-auto" href="login.php">
          <img id="logo" src="../assets/img/logoIngSoft.PNG" height="30" class="d-inline-block align-top" alt="Cuidado animal">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#MyNavbar" aria-controls="MyNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="MyNavbar">
        <div class="navbar-nav mr-auto ml-auto text-center">
          <a class="nav-item nav-link" href="login.php">
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
          <a class="nav-item nav-link active" href="registro.php">
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
      <p class="text-center subtitulo">Elige el tipo de usuario con el que quieres registrarte</p>
      <button type="button" class="btn btn-primary col-md-12 my-5" onClick="location.href='resgitroAdministrador.php'">Administrador de veterinaria</button>
      <button type="button" class="btn btn-primary col-md-12 boton" onClick="location.href='registroCliente.php'">Dueño de mascota</button>
      </div>
    </div>
    <script src="../assets/bootstrap/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
