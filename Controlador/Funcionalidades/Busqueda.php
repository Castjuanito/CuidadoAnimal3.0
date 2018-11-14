<?php
/**
 * Created by PhpStorm.
 * User: laura
 * Date: 11/11/18
 * Time: 09:15 PM
 */
include_once '../Modelo/Objetos/Servicio.php';
include_once '../Modelo/Objetos/Busqueda_m.php';

 function getServicios(){
    $ser = new Servicio("","");
    return $ser->findAll();

}

function getCiudades(){

    $ser = new Busqueda();
    return $ser->findCiudades();

}

function getCentroVet($servicio_nombre, $palabra_clave_nombre, $barrio_nombre, $localidad_nombre, $ciudad_nombre){

    $ser = new Busqueda();
    return $ser->findCentroVet($servicio_nombre, $palabra_clave_nombre, $barrio_nombre, $localidad_nombre, $ciudad_nombre);

}







?>

