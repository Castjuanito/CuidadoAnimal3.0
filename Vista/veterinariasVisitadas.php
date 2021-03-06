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
        		<a class="mr-2 text-light" href="login.php"><img src="../assets/img/Salir.svg" class="d-inline-block align-top mx-1" width="25" height="25">Salir</a>
       		</div>
    	</div>
	</nav>
  <div class="container">
      <div class="titulo text-center my-4">
      <p>Clientes</p>
    </div>
    <div class="row text-center justify-content-center">
      <div class="text-center col-md-4"><p class="subtitulo">Filtrar resultados:</p></div>
        <div class="row col-md-4 p-2">
          <div class="col-8">
            <select class="form-control" id="filtroCasos">
            <option></option>
            </select>
          </div>
          <div class="col-4"> <button class="btn btn-primary">Filtrar</button></div>
        </div>
        <div class="row col-md-4 p-2">
          <div class="col-8"><input class="form-control" type="text" id="cedula"></div>
          <div class="col-4"> <button class="btn btn-primary">Buscar</button></div>
        </div>
      </div>
    <div class="row">
        <div class="p-4 col-md-4">
          <div class="list-group" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
                <p class="enunciado">Id</p>
                <p class="contenido">Fecha</p>
                <p class="contenido">Nombre mascota</p>
              </a>
              <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="home">
                <p class="enunciado">Id</p>
                <p class="contenido">Fecha</p>
                <p class="contenido">Nombre mascota asignado al nombre veterianario</p>
              </a>
              <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="home">
                <p class="enunciado">Id</p>
                <p class="contenido">Fecha</p>
                <p class="contenido">Nombre mascota asignado al nombre veterianario</p>
              </a>
              <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="home">
                <p class="enunciado">Id</p>
                <p class="contenido">Fecha</p>
                <p class="contenido">Nombre mascota asignado al nombre veterianario</p>
              </a>
      </div>
      </div>
      <div class="col-md-8 p-4 borde my-4">
      <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <h6>Id: 0000</h6>
                <h6>Veterianrio: yyy</h6>
                <h6>Mascota: xxx</h6>
                <h6>Duaño: zzz</h6>
                <img src="../Imagenes/logoVet.png" width="250" height="250" >
                <h6>Detalle:</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus cumque itaque voluptatibus eveniet cum, accusamus nihil voluptate ratione consectetur, animi optio hic odio, saepe unde voluptates blanditiis sunt dolores. Fugit?</p>
                <button type="button" class="btn btn-primary col-md-4 boton" onClick="location.href='registroCliente.php'">Eliminar Veterinario</button>
              </div>
              <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                <h6>Id: 0000</h6>
                <h6>Veterianrio: yyy</h6>
                <h6>Detalle:</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus cumque itaque voluptatibus eveniet cum, accusamus nihil voluptate ratione consectetur, animi optio hic odio, saepe unde voluptates blanditiis sunt dolores. Fugit?</p>
              </div>
              <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
              <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
            </div>
      </div>

      </div>
    <script src="../assets/bootstrap/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
