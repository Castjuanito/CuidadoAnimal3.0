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

    public function findCentroVet($servicio_id, $palabra_clave_id, $barrio_id, $localidad_id, $ciudad_id)
    {
        $conn = new conexion();
        $sql = "select * from centro_veterinario where id in(select centro_veterinario_id from servicio where id like '".$servicio_id."')
 and id in (select servicio.centro_veterinario_id from servicio, palabra_clave ,palabra_servicio where
 servicio.id = palabra_servicio.Servicio_id and palabra_clave.id = palabra_servicio.palabra_clave_id
 and palabra_clave.id like '".$palabra_clave_id."') and barrio  in (select nombre from barrio where id like '".$barrio_id."')
 and localidad in (select nombre from localidad where id like '".$localidad_id."') and ciudad in (select nombre
 from ciudad where id like '".$ciudad_id."') ";

        echo $sql;
        return $conn->ejecutarconsulta($sql);
    }
}
?>
