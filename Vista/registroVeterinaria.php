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
            <a class="nav-item text-barra" href="busqueda.html"><img src="../assets/img/buscar-negro.svg" class="d-inline-block align-top mx-1" width="25" height="25">Busqueda</a>
            <a class="nav-item text-barra" href="login.html"><img src="../assets/img/login-negro.svg" class="d-inline-block align-top mx-1" width="25" height="25">Login</a>
            <a class="nav-item text-barra" href="registro.html"><img src="../assets/img/registro-negro.svg" class="d-inline-block align-top mx-1" width="25" height="25">Registrarse</a>
            <a class="nav-item text-barra" href="contacto.html"><img src="../assets/img/contacto-negro.svg" class="d-inline-block align-top mx-1" width="25" height="25">Contactanos</a>
        </div>
      </div>
  </nav>
    <div class="text-center fondo1 offset-md-2 col-md-8 col-xs-12">
        <form name="registroVeterianrio" method="post">
          <div class="row d-flex justify-content-center mb-0">
           <label class="tituloForm mb-0 mt-3">Registro de Veterinaria</label>
          </div>
          <!--Fila 1 Datos Principales-->
          <div class="row form-group d-flex justify-content-center">
            <!--Campo Nombre-->
            <div class="col-md-5 col-sm-12 p-0 campo">
              <label class="letraForm">Nombre</label>
              <input type="text" class="form-control" name="nombres" placeholder="Nombre">
            </div>
            <!--Fin Campo Nombre-->
            <!--Campo Logotipo-->
            <div class="col-md-5 col-sm-12 p-0 campo">
              <label class="letraForm">Logotipo</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="archivoImagen" onChange="mostrarArchivo()">
                <label class="custom-file-label" id="tituloArch">Selecionar Archivo</label>
              </div>
            </div>
            <!--Fin Campo Logotipo-->
          </div>
          <div class="row form-group d-flex justify-content-center">
            <!--Campo Telefono-->
            <div class="col-md-5 col-sm-12 p-0 campo">
              <label class="letraForm">Telefono</label>
              <input type="text" class="form-control" name="telefono" placeholder="telefono">
            </div>
            <!--Fin Campo Telefono-->
          </div>
          <!--Fin Fila 1 Datos Principales-->
          <!--Fila 2 datos de ubicación-->
          <div class="row d-flex justify-content-center mb-0">
           <label class="tituloForm mb-0 mt-0">Ubicación</label>
          </div>
          <div class="row form-group d-flex justify-content-center">
            <!--Campo Ciudad-->
            <div class="col-md-5 col-sm-12 p-0 campo">
              <label class="letraForm">Ciudad</label>
              <input type="text" class="form-control" name="Ciudad" placeholder="Ciudad">
            </div>
            <!--Fin Campo Ciudad-->
            <!--Campo Campo Localidad-->
            <div class="col-md-5 col-sm-12 p-0 campo">
              <label class="letraForm">Localidad</label>
              <input type="text" class="form-control" name="Localidad" placeholder="Localidad">
            </div>
            <!--Fin Campo Localidad-->
          </div>
          <div class="row form-group d-flex justify-content-center">
            <!--Campo Bario-->
            <div class="col-md-5 col-sm-12 p-0 campo">
              <label class="letraForm">Barrio</label>
              <input type="text" class="form-control" name="Barrio" placeholder="Barrio">
            </div>
            <!--Fin Campo Barrio-->
            <!--Campo Direccion-->
            <div class="col-md-5 col-sm-12 p-0 campo">
              <label class="letraForm">Dirección</label>
              <div class="row">
                <!--Calle o carrera-->
                <select class="form-control col-2 ml-3 px-2">
                  <option>Cll</option>
                    <option>Crr</option>
                </select>
                <!--Fin call o carrera-->
                <!--Numero de calle o carrera-->
                <input type="text" class="form-control col-2 ml-3 px-2" name="num1" placeholder="00">
                <!--Fin Numero de calle o carrera-->
                <label class="letraForm col-1 mx-0 px-2">No</label>
                <!--Numero 1 dirección-->
                <input type="text" class="form-control col-2 ml-2 px-2" name="num2" placeholder="00">
                <!--Fin Numero 1 dirección-->
                <label class="letraForm col-1 px-2">-</label>
                <!--Numero 2 dirección-->
                <input type="text" class="form-control col-2 mx-0 px-2" name="num3" placeholder="00">
                <!--Fin Numero 2 dirección-->
              </div>
            </div>
            <!--Fin Campo Direccion-->
          </div>
          <!--Fin Fila 2 datos de ubicación-->
          <div class="row form-group d-flex justify-content-center">
          <!--Fila horario de atención-->
            <div class="col-md-5 col-sm-12 p-0 campo">
              <label class="tituloForm mb-2 mt-0">Horario de atención</label>
              <div class="row">
              <!--Campo hora y minuto de inicio labor veterinaria-->
                  <select class="form-control col-2 ml-3 px-2" id="hora1"></select>
                <label class="letraForm mx-2">:</label>
                  <select class="form-control col-2 ml-0 px-2" id="minu1"></select>
              <!--Fin nCampo hora inicio labor veterinaria-->
                <label class="letraForm col-1 d-flex justify-content-center mx-2">a</label>
              <!--Campo hora final de labor veterinaria-->
                  <select class="form-control col-2 ml-0 px-2" id="hora2"></select>
                <label class="letraForm mx-2">:</label>
                  <select class="form-control col-2 ml-0 px-2" id="minu2"></select>
              <!--Fin Campo hora final de labor veterinaria-->
              </div>
              <div class="row">
                <label class="letraForm col-2 ml-3">Hora</label>
                <label class="letraForm col-1 ml-1">Minutos</label>
                <label class=" col-2 ">.</label>
                <label class="letraForm col-2 ml-4 pl-3">Hora</label>
                <label class="letraForm col-3 ml-2">Minutos</label>
              </div>
            </div>
          <!--Fin Fila horario de atención-->
          </div>
          <div class="row form-group d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mb-3">Finalizar Registro</button>
          </div>
        </form>
      </div>
    <script src="../assets/bootstrap/js/jquery.js"></script>
    <script src="../js/regisVeterinaria.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>