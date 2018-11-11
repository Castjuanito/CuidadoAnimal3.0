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
        <p>Nuevo caso</p>
      </div>
      <div class="justify-content-center">
        <div class="justify-content-center">
          <p class="subtitulo text-center">Veterinario:</p>
        </div>
        <div class="col-md-8 offset-md-2 p-2">
          <select name="selCombo" class="custom-select">
              <option value="link pagina 1">
              </option>
              <option value="link pagina 1">
                <p>ID</p>
                <p>Especialidad</p>
              </option>
            </select>
        </div>
        <div class="row">
          <div class="col-md-6">

          </div>
        </div>
        </div>
        </div>
    <script src="../assets/bootstrap/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
