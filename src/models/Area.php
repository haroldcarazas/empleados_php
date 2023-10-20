<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/config/DB.php");

class Area
{
    /**
     * Obtener todos los datos de las áreas de la empresa.
     *
     * @return array Arreglo con todas las áreas de la empresa.
     */
    public static function all()
    {
        $res = DB::query("select * from areas");
        $data = $res->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
}
