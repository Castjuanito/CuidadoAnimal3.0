<?php
include_once "../Controlador/Funcionalidades/Busqueda.php";
    $ser = getServicios();
    $cit = getCiudades();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="../styles/busqueda.css">
	<title>Busqueda</title>
    <script>
        function showLoc(str) {
            if (str=="") {
                showBar(str);
            }
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else { // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                console.log(this);
                if (this.readyState==4 && this.status==200) {
                    console.log("lol");
                    document.getElementById("txtHint").innerHTML=this.responseText;
                }
                else console.log("lol1");
            }
            xmlhttp.open("GET","MostrarLoc.php?q="+str,true);
            xmlhttp.send();
        }
        function showBar(str) {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else { // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                console.log(this);
                if (this.readyState==4 && this.status==200) {
                    console.log("lol");
                    document.getElementById("txtHint2").innerHTML=this.responseText;
                }
                else console.log("lol1");
            }
            xmlhttp.open("GET","mostrarBar.php?q="+str,true);
            xmlhttp.send();
        }
    </script>
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
		<div class="col-md-4 col-sm-12 fondo1">
			<p class="text-center titulo">Cuidado Animal</p>
			<p class="text-center subtitulo">Busca una veterinaria</p>
      <form action="" name="busqueda">
			<div class="form-group texto">
    			<label for="servicioFormSelect">Servicio</label>
    			<select class="form-control" id="servicioSelect">
      				<option>Elija una opcion</option>

                    <?php
                        while($row = $ser->fetch_assoc()) {
                            echo "<option value='". $row["id"] ."'> " . $row["nombre"]. "</option>";
                        }
                    ?>

    			</select>
 		 	</div>
        	<div class="form-group texto">
    			<label for="servicioFormSelect">Ciudad</label>
    			<select class="form-control" id="ciudadSelect" onchange="showLoc(this.value)">
      				<option value="">Elija una opcion</option>

                    <?php
                    while($row = $cit->fetch_assoc()) {
                        echo "<option value='". $row["id"] ."'> " . $row["nombre"]. "</option>";
                    }
                    ?>

    			</select>
 		 	</div>
			<div id="txtHint" class="form-group texto">
    			<label for="servicioFormSelect">Localidad</label>
    			<select class="form-control" id="localidadSelect"  onchange="showBar(this.value);">
      				<option>Elija una opcion</option>
                </select>
 		 	</div>
 		 	<div id="txtHint2" class="form-group texto">
    			<label for="servicioFormSelect">Barrio</label>
    			<select class="form-control" id="barrioSelect">
      				<option>Elija una opcion</option>




    			</select>
 		 	</div>
 		 	<div class="form-group texto">
    			<label for="palabraFormText">Palabras Clave (opcional)</label>
    			<input class="form-control" id="palabraFormControlInput" placeholder="pata rota, falta de apetito, moqueo">
 		 	</div>
 		 	<button type="submit" class="btn btn-primary btn-buscar">Buscar</button>
      </form>
  		</div>
  	</div>
    <script src="../assets/bootstrap/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
