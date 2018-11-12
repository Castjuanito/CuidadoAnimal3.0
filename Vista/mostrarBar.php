<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../styles/busqueda.css">
</head>
<body>


<?php
/**
 * Created by PhpStorm.
 * User: laura
 * Date: 12/11/18
 * Time: 10:40 AM
 */

include_once "../Controlador/Funcionalidades/Busqueda.php";

$q = intval($_GET['q']);
$loc = new Busqueda();
$ser = $loc->findLocalidadByCiudad($q);


echo "<label for=\"servicioFormSelect\">Barrio</label>";

echo "<select class=\"form-control\"  id=\"localidadSelect\">
      <option>Elija una opcion</option>\";";

while($row = $ser->fetch_assoc()) {
    echo "<option value='". $row["id"] ."'> " . $row["nombre"]. "</option>";
}

echo "</select>";


?>

</body>
</html>