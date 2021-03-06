<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="../styles/administradorVeterinaria.css">
	<title>Home</title>
</head>
<body>
	<!-- Inicio Navbar -->
	<!--Barra de navegacion-->
	<nav class="navbar nav-masthead navbar-dark sticky-top navbar-expand-lg text-center barra" id="mainNav">

    	<a class="navbar-brand mx-auto js-scroll-trigger" href="homeVeterinario.php.php">
        	<img id="logo" src="../assets/img/logoIngSoft2.PNG" height="40" class="d-inline-block align-top" alt="Cuidado animal">
    	</a>

    	<button class="navbar-toggler collapsed navbar-toggler-right text-center" type="button" data-toggle="collapse" data-target="#navbarTogglerCA" aria-controls="navbarTogglerCA" aria-halflings-expandes="false" aria-label="Toggle navigation">
        	<span class="nav-icon navbar-toggler-icon"></span>
        </button>

    	<div class="collapse navbar-collapse" id="navbarTogglerCA">
        <div class="navbar-nav mx-auto text-center">
            	<a class="nav-item nav-link text-light" href="homeVeterinario.php"><img src="../assets/img/home.svg" class="d-inline-block align-top mx-1" width="25" height="25"> Inicio </a>
            	<a class="nav-item nav-link text-light" href="casosVeterinario.php"><img src="../assets/img/mascota.svg" class="d-inline-block align-top mx-1" width="25" height="25">Casos</a>
            	<a class="nav-item nav-link text-light" href="busquedaVeterinario.php"><img src="../assets/img/cliente.svg" class="d-inline-block align-top mx-1" width="25" height="25">Buscar</a>
              <a class="nav-item nav-link text-light" href="veterinariasVeterinario.php"><img src="../assets/img/veterinario.svg" class="d-inline-block align-top mx-1" width="25" height="25">Veterinarias</a>
        	</div>
        	<div class="d-flex flex-row justify-content-center">
        		<a class="mr-2 text-light" href="login.php"><img src="../assets/img/Salir.svg" class="d-inline-block align-top mx-1" width="25" height="25">Salir</a>
       		</div>
    	</div>
	</nav>
   <div class="container">
      <div class="titulo text-center">
      <p>Notificaciones</p>
    </div>
    <div class="row">
      <div class="list-group p-4 col-md-4" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
                <p class="enunciado">Solicitud de tralado</p>
                <p class="contenido">El veterinario xxx ha hecho una solicitud de tralado para la mascota yyy</p>
              </a>
              <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">
                <p class="enunciado">Solicitud de tralado</p>
                <p class="contenido">El veterinario xxx ha hecho una solicitud de tralado para la mascota yyy</p>
              </a>
              <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">
              <p class="enunciado">Solicitud de tralado</p>
                <p class="contenido">El veterinario xxx ha hecho una solicitud de tralado para la mascota yyy</p>
              </a>
              <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">
                <p class="enunciado">Solicitud de tralado</p>
                <p class="contenido">El veterinario xxx ha hecho una solicitud de tralado para la mascota yyy</p>
              </a>
      </div>
      <div class="col-md-8 p-4">
      <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <h6>Remitente:Veterinario</h6>
                <h6>Asunto:Traslado</h6>
                <h6>Contenido</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus cumque itaque voluptatibus eveniet cum, accusamus nihil voluptate ratione consectetur, animi optio hic odio, saepe unde voluptates blanditiis sunt dolores. Fugit?</p>
              </div>
              <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
              <h6>Remitente:Veterinario</h6>
                <h6>Asunto:Solicitud de vacuna</h6>
                <h6>Contenido</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur quasi voluptate voluptatum non atque harum nobis nostrum quidem quo cumque veniam, eum earum assumenda voluptatibus a perferendis culpa illum, modi.</p>
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
