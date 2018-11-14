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
        <form name="registroVeterianrio" method="post">
          <div class="row d-flex justify-content-center mb-0">
           <label class="tituloForm mb-0 mt-3">Registro de Veterinaria</label>
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
              <div class="row d-flex justify-content-center">
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
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
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
                  <label class="letraHora">a</label>
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
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
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
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
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
                <label class="letraForm col-2 ml-4">Hora</label>
                <label class="letraForm col-1 ml-4">Minutos</label>
                <label class=" col-2 ">.</label>
                <label class="letraForm col-2 pl-3">Hora</label>
                <label class="letraForm col-3 ml-3">Minutos</label>
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
    <script src="../assets/bootstrap/js/bootstrap.js"></script>
  </body>
</html>
