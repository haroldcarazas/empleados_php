<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/config/DB.php");

class Area
{
    public static function all()
    {
        $res = DB::query("select * from areas");
        $data = $res->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
}
