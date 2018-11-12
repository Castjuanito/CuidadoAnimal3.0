<?php
/**
 * Created by PhpStorm.
 * User: laura
 * Date: 11/11/18
 * Time: 09:17 PM
 */

class Busqueda
{
    function __construct ()
    {
    }

    public function findCiudades()
    {
        $conn = new conexion();
        $sql = "SELECT * FROM ciudad ";
        return $conn->ejecutarconsulta($sql);
    }

    public function findLocalidadByCiudad($id)
    {
        $conn = new conexion();
        $sql = "SELECT * FROM localidad WHERE ciudad_id = " . $id;
        return $conn->ejecutarconsulta($sql);
    }

    public function findBarrioByLocalidad($id)
    {
        $conn = new conexion();
        $sql = "SELECT * FROM barrio WHERE localidad_id = " . $id;
        return $conn->ejecutarconsulta($sql);
    }
}
?>