<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/config/DB.php");

class Empleado
{
    public static function all()
    {
        $queryString = "select e.id, e.nombre, e.sueldo, a.id as area_id, a.nombre as area_nombre from empleados e inner join areas a on e.area_id = a.id";

        $res = DB::query($queryString);
        $data = $res->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
}
