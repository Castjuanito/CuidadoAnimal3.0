<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="../styles/resultadoBusqueda.css">
  <title>Resultado de la busqueda</title>
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
  <div class="container">
    <div class="offset-md-2 col-md-8 col-sm-12 fondo1">
            <table class="table table-striped table-bordered">
            <thead>
              <tr class="tabla">
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Tipo</th>
                <th scope="col">Horario</th>
                <th scope="col">Direccion</th>
              </tr>
            </thead>
            <tbody>
              <!--ejemplo-->
              <tr>
                <th scope="row">1</th>
                <td>VetPlus</td>
                <td>Clinica</td>
                <td style="color: green;">Abierto Ahora</td>
                <td>Cll 45 # 7-45</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>VetMas</td>
                <td>Centro de belleza</td>
                <td style="color: green;">Abierto Ahora</td>
                <td>Cll 45 # 7-45</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>VatZero</td>
                <td>Veterinaria de barrio</td>
                <td>Lunes a sabado 07:00 18:00</td>
                <td>Cll 22 # 14-55</td>
              </tr>
              <!--fin ejemplo-->
            </tbody>
          </table>
        </div>
        <div style="margin-bottom: 15px"><p>.</p></div>
    </div>
    </div>
    <script src="../assets/bootstrap/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>