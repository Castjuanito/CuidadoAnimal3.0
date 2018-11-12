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
              <a class="nav-item nav-link text-light" href="cuentaCliente.php"><img src="../assets/img/veterinario.svg" class="d-inline-block align-top mx-1" width="25" height="25">Veterinarias</a>
        	</div>
        	<div class="d-flex flex-row justify-content-center">
        		<a class="mr-2 text-light" href="login.php"><img src="../assets/img/Salir.svg" class="d-inline-block align-top mx-1" width="25" height="25">Salir</a>
       		</div>
    	</div>
	</nav>
  <div class="container">
      <div class="titulo text-center my-4">
      <p>Mascotas</p>
    </div>
		<?php
		include_once '../Controlador/Funcionalidades/c_duenoMascota.php';
		$dueno = new c_duenoMascota();
		$mascotas = $dueno->encontrarMascotas();
		 ?>
    <div class="row text-center justify-content-center">
    <div class="text-center col-md-4"><p class="subtitulo">Filtrar resultados:</p></div>
    <div class="row col-md-4 p-2">
          <div class="col-8"><select class="form-control" id="filtroCasos">
              <option></option>
          </select></div>
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
				<?php
				include_once '../Controlador/Funcionalidades/c_duenoMascota.php';
				$dueno = new c_duenoMascota();
				$mascotas = $dueno->encontrarMascotas();
				$i=0;
				if (!empty($mascotas)){
				echo "<a class='list-group-item list-group-item-action active' id='".$mascotas[$i]->getId()."' data-toggle='list' href='#".$mascotas[$i]->getId()."i' role='tab'>";
				echo "<p class='enunciado'>".$mascotas[$i]->getDuenoMasId()."</p>";
				echo "<p class='contenido'>".$mascotas[$i]->getNombre()."</p>";
				echo "</a>";
				$i=$i+1;
				for ($i; $i <count($mascotas) ; $i++)
				{
					echo "<a class='list-group-item list-group-item-action' id='".$mascotas[$i]->getId()."i' data-toggle='list' href='#".$mascotas[$i]->getId()."' role='tab'>";
					echo "<p class='enunciado'>".$mascotas[$i]->getDuenoMasId()."</p>";
					echo "<p class='contenido'>".$mascotas[$i]->getNombre()."</p>";
					echo "</a>";
				}
			}
				?>
				</div>
      <div class="justify-content-center">
            <button type="button" class="btn btn-success col-md-12 boton my-2" onClick="location.href='registrarMascota.php'">Nueva mascota</button>
          </div>
      </div>
      <div class="col-md-8 p-4 borde my-4">
				<div class="tab-content" id="nav-tabContent">
						<?php
						include_once '../Controlador/Funcionalidades/c_duenoMascota.php';
						$dueno = new c_duenoMascota();
						$mascotas = $dueno->encontrarMascotas();
						$i=0;

						if (!empty($mascotas)){
							echo "<div class='tab-pane fade show active' id='".$mascotas[$i]->getId()."i' role='tabpanel' aria-labelledby='".$mascotas[$i]->getId()."'>";
							echo "<h class='enunciado'>ID Mascota: </h><h class='contenido'>".$mascotas[$i]->getId()."</h><br>";
							echo "<h class='enunciado'>Nombre: </h><h class='contenido'>".$mascotas[$i]->getNombre()."</h><br>";
							echo "<h class='enunciado'>Numero de placa: </h><h class='contenido'>".$mascotas[$i]->getDuenoMasId()."</h><br>";
							echo "<img src='' width='250' height='250' ><br>";
							echo "<h class='enunciado'>Especie: </h><h class='contenido'>".$mascotas[$i]->getEspecie()."</h><br>";
							echo "<h class='enunciado'>Raza: </h><h class='contenido'>".$mascotas[$i]->getRaza()."</h><br>";
							echo "<h class='enunciado'>Fecha Nacimiento: </h><h class='contenido'>".$mascotas[$i]->getFechaNacimiento()."</h><br>";
							echo "<h class='enunciado'>Color: </h><h class='contenido'>".$mascotas[$i]->getColor()."</h><br>";
							echo "</div>";
						$i=$i+1;
						for ($i = $i; $i <count($mascotas) ; $i++)
							{
								echo "<div class='tab-pane fade' id='".$mascotas[$i]->getId()."i' role='tabpanel' aria-labelledby='".$mascotas[$i]->getId()."'>";
								echo "<h class='enunciado'>ID Mascota: </h><h class='contenido'>".$mascotas[$i]->getId()."</h><br>";
								echo "<h class='enunciado'>Nombre: </h><h class='contenido'>".$mascotas[$i]->getNombre()."</h><br>";
								echo "<h class='enunciado'>Numero de placa: </h><h class='contenido'>".$mascotas[$i]->getDuenoMasId()."</h><br>";
								echo "<img src='' width='250' height='250' ><br>";
								echo "<h class='enunciado'>Especie: </h><h class='contenido'>".$mascotas[$i]->getEspecie()."</h><br>";
								echo "<h class='enunciado'>Raza: </h><h class='contenido'>".$mascotas[$i]->getRaza()."</h><br>";
								echo "<h class='enunciado'>Fecha Nacimiento: </h><h class='contenido'>".$mascotas[$i]->getFechaNacimiento()."</h><br>";
								echo "<h class='enunciado'>Color: </h><h class='contenido'>".$mascotas[$i]->getColor()."</h><br>";
								echo "</div>";
							}
						}
						?>
						<type="button" class="btn btn-danger col-md-4 boton" onClick="location.href='registroCliente.php'">Borrar Mascota</button>
								</div>
      </div>
      </div>
    <script src="../assets/bootstrap/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
