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
  <title>Clientes</title>
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
        <div class="text-center fondo1 offset-md-2 col-md-8 col-xs-12">
    <form id="regisVete" method="post" action="" name="regisVete">
      <div class="row d-flex justify-content-center mb-0">
       <label class="tituloForm mb-0 mt-3">Registro de Veterianrio</label>
      </div>
      <?php
        include_once '../Controlador/Funcionalidades/c_adminVeterinaria.php';
        if (isset($_POST['registrar']))
        {
          $_POST['rol'] = 'medicoVet';
          $registro = new c_adminVeterinaria();
          $registro->registrarEmpleado();
        }
       ?>
      <div class="row form-group d-flex justify-content-center">
        <div class="col-md-5 col-xs-12 p-0 campo">
          <label class="letraForm">Nombres</label>
          <input type="text" class="form-control" name="nombre" placeholder="Nombres">
        </div>
        <div class="col-md-5 col-xs-12 p-0 campo">
          <label class="letraForm">Apellidos</label>
          <input type="text" class="form-control" name="apellido" placeholder="Apellidos">
        </div>
      </div>
      <div class="row form-group d-flex justify-content-center">
        <div class="col-md-5 col-xs-12 p-0 campo">
          <label class="letraForm">Foto de perfil</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="archivoImagen" onChange="mostrarArchivo()">
            <label class="custom-file-label" id="tituloArch">Selecionar Archivo</label>
          </div>
        </div>
        <div class="col-md-5 col-xs-12 p-0 campo">
          <label class="letraForm">Correo</label>
          <input type="text" class="form-control" name="correo" placeholder="Telefono">
        </div>
      </div>
      <!--Fila 2 datos de ubicación-->
          <div class="row form-group d-flex justify-content-center">
            <!--Campo Ciudad-->
            <div class="col-md-5 col-xs-12 p-0 campo">
              <label class="letraForm">Telefono</label>
              <input type="text" class="form-control" name="telefono" placeholder="Telefono">
            </div>
            <!--Fin Campo Ciudad-->
            <!--Campo Campo Localidad-->
            <div class="col-md-5 col-xs-12 p-0 campo">
              <label class="letraForm">Area</label>
              <input type="text" class="form-control" name="area" placeholder="Area">
            </div>
            <!--Fin Campo Localidad-->
          </div>
          <div class="row form-group d-flex justify-content-center">
        <div class="col-md-5 col-xs-12 p-0 campo">
          <label class="letraForm">Contraseña</label>
          <input type="password" class="form-control" name="password" placeholder="">
        </div>
        <div class="col-md-5 col-xs-12 p-0 campo">
          <label class="letraForm">Confirmar contraseña</label>
          <input type="password" class="form-control" name="password2" placeholder="">
        </div>
      </div>
          <!--Fin Fila 2 datos de ubicación-->
      <div class="row form-group d-flex justify-content-center">
        <button type="submit" class="btn btn-primary mb-3" name="registrar">Finalizar Registro</button>
      </div>
    </form>
  </div>
    <script src="../assets/bootstrap/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/RegisCliente.js"></script>
  </body>
</html>
