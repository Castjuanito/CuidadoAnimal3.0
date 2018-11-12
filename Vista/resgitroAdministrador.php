<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="../styles/registroAdministrador.css">
  <title>Registro Administrador</title>
</head>
<body>
  <!-- Inicio Navbar -->
  <!--Barra de navegacion-->
  <nav class="navbar nav-masthead navbar-dark navbar-expand-lg text-center barra" id="mainNav">
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
            <div class="text-center fondo1 offset-md-2 col-md-8 col-xs-12">
    <form id="regisVete" action="" method="post" name="regisVete">
      <div class="row d-flex justify-content-center mb-0">
       <label class="tituloForm mb-0 mt-3">Registro de Administrador</label>
      </div>
      <?php
      include_once "../Controlador/Funcionalidades/registro.php";
      if (isset($_POST['registrar']))
      {
        $_POST['rol'] = 'duenoClinica';
      	$login = new registro();
      	$login->registrarUsuario();
      }
      ?>
      <div class="row form-group d-flex justify-content-center">
        <div class="col-md-5 col-xs-12 p-0 campo">
          <label class="letraForm">Nombre</label>
          <input type="text" class="form-control" name="nombre" placeholder="Nombres">
        </div>
        <div class="col-md-5 col-xs-12 p-0 campo">
          <label class="letraForm">Apellido</label>
          <input type="text" class="form-control" name="apellido" placeholder="nUsuario">
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
          <label class="letraForm">Correo Electronico</label>
          <input type="text" class="form-control" name="correo" placeholder="correo">
        </div>
      </div>
      <div class="row form-group d-flex justify-content-center">
        <div class="col-md-5 col-xs-12 p-0 campo">
          <label class="letraForm">Nombre de usuario</label>
          <input type="text" class="form-control" name="username" placeholder="nombre de usuario">
        </div>
        <div class="col-md-5 col-xs-12 p-0 campo">
          <label class="letraForm">Telefono</label>
          <input type="text" class="form-control" name="telefono" placeholder="telefono">
        </div>
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
      <div class="row form-group d-flex justify-content-center">
        <button type="submit" class="btn btn-primary mb-3" name="registrar">Siguiente</button>
      </div>
    </form>
  </div>
    <script src="../assets/bootstrap/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/RegisAdmin.js"></script>
  </body>
</html>
