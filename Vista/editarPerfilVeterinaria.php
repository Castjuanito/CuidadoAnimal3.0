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
			<form name="registroVeterianrio" method="post">
				<div class="row d-flex justify-content-center mb-0">
				 <label class="tituloForm mb-0 mt-3">Editar Veterinaria</label>
				</div>
				<?php
				include_once "../Controlador/Funcionalidades/registro.php";
				if (isset($_POST['registrar']))
				{
					$login = new registro();
					$login->crearVeterinaria();
				}
				?>
				<!--Fila 1 Datos Principales-->
				<div class="row form-group d-flex justify-content-center">
					<!--Campo Nombre-->
					<div class="col-md-5 col-sm-12 p-0 campo">
						<label class="letraForm">Nombre</label>
						<input type="text" class="form-control" name="nombre" placeholder="Nombre">
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
					<div class="col-md-5 col-sm-12 p-0 campo">
							<label class="letraForm">Tipo</label>
						<select class="form-control" id="tipo" name="tipo">
							<option Value="0">seleccione</option>
								<option Value="consultorio">Consultorio</option>
								<option Value="clinica">Clinica</option>
								<option Value="hospital">Hospital</option>
						</select>
					</div>
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
						<input type="text" class="form-control" name="ciudad" placeholder="Ciudad">
					</div>
					<!--Fin Campo Ciudad-->
					<!--Campo Campo Localidad-->
					<div class="col-md-5 col-sm-12 p-0 campo">
						<label class="letraForm">Localidad</label>
						<input type="text" class="form-control" name="localidad" placeholder="localidad">
					</div>
					<!--Fin Campo Localidad-->
				</div>
				<div class="row form-group d-flex justify-content-center">
					<!--Campo Bario-->
					<div class="col-md-5 col-sm-12 p-0 campo">
						<label class="letraForm">Barrio</label>
						<input type="text" class="form-control" name="barrio" placeholder="barrio">
					</div>
					<!--Fin Campo Barrio-->
					<!--Campo Direccion-->
					<div class="col-md-5 col-sm-12 p-0 campo">
						<label class="letraForm">Direccion</label>
						<input type="text" class="form-control" name="direccion" placeholder="direccion">
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
								<select class="form-control col-2 ml-3 px-2" name="horaI"  id="horaI">
									<option></option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="6">16</option>
									<option value="7">17</option>
									<option value="8">18</option>
									<option value="9">19</option>
									<option value="10">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="00">00</option>
								</select>
							<label class="letraForm mx-2">:</label>
								<select class="form-control col-2 ml-0 px-2" id="minI" name="minI">
									<option></option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="6">16</option>
									<option value="7">17</option>
									<option value="8">18</option>
									<option value="9">19</option>
									<option value="10">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
									<option value="32">32</option>
									<option value="33">33</option>
									<option value="34">34</option>
									<option value="35">35</option>
									<option value="36">36</option>
									<option value="37">37</option>
									<option value="38">38</option>
									<option value="39">39</option>
									<option value="40">40</option>
									<option value="41">41</option>
									<option value="42">42</option>
									<option value="43">43</option>
									<option value="44">44</option>
									<option value="45">45</option>
									<option value="46">46</option>
									<option value="47">47</option>
									<option value="48">48</option>
									<option value="49">49</option>
									<option value="50">50</option>
									<option value="51">51</option>
									<option value="52">52</option>
									<option value="53">53</option>
									<option value="54">54</option>
									<option value="55">55</option>
									<option value="56">56</option>
									<option value="57">57</option>
									<option value="58">58</option>
									<option value="59">59</option>
									<option value="60">60</option>
								</select>
								<select class="form-control col-2 ml-3 px-2" name="horaF"  id="horaF">
									<option></option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="6">16</option>
									<option value="7">17</option>
									<option value="8">18</option>
									<option value="9">19</option>
									<option value="10">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="00">00</option>
								</select>
							<label class="letraForm mx-2">:</label>
								<select class="form-control col-2 ml-0 px-2" id="minF" name="minF">
									<option></option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="6">16</option>
									<option value="7">17</option>
									<option value="8">18</option>
									<option value="9">19</option>
									<option value="10">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
									<option value="32">32</option>
									<option value="33">33</option>
									<option value="34">34</option>
									<option value="35">35</option>
									<option value="36">36</option>
									<option value="37">37</option>
									<option value="38">38</option>
									<option value="39">39</option>
									<option value="40">40</option>
									<option value="41">41</option>
									<option value="42">42</option>
									<option value="43">43</option>
									<option value="44">44</option>
									<option value="45">45</option>
									<option value="46">46</option>
									<option value="47">47</option>
									<option value="48">48</option>
									<option value="49">49</option>
									<option value="50">50</option>
									<option value="51">51</option>
									<option value="52">52</option>
									<option value="53">53</option>
									<option value="54">54</option>
									<option value="55">55</option>
									<option value="56">56</option>
									<option value="57">57</option>
									<option value="58">58</option>
									<option value="59">59</option>
									<option value="60">60</option>
								</select>
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
					<button type="submit" class="btn btn-primary mb-3" name="registrar">Finalizar Registro</button>
				</div>
			</form>
		</div>
    <script src="../assets/bootstrap/js/jquery.js"></script>
    <script src="../js/regisVeterinaria.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
