<?php
/**
 * Created by PhpStorm.
 * User: laura
 * Date: 11/11/18
 * Time: 09:15 PM
 */
include_once '../Modelo/Objetos/Servicio.php';


 function getServicios(){
    echo "hola";
    $ser = new Servicio("","");
    $ser->findAll();


}
?>