<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="../styles/registroAdministrador.css">
  <title>Registro Administrador</title>
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
      <div class="d-felx align-items-center d-none d-xl-block">
        <a class="btn btn-success my-2 my-sm-0" type="submit" href="registro.php">Volver
          <img src="../assets/img/flecha-atras.svg" class="d-inline-block align-top mx-1" width="25" height="25">
        </a>
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
          <input type="text" class="form-control" name="apellido" placeholder="Apellido">
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
          <input type="email" class="form-control" name="correo" placeholder="correo">
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
    <script src="../assets/bootstrap/js/bootstrap.js"></script>
    <script src="../js/RegisAdmin.js"></script>
  </body>
</html>
