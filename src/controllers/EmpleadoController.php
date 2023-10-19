<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/models/Empleado.php");

class EmpleadoController
{
    public function index()
    {
        $empleados = Empleado::all();

        include $_SERVER["DOCUMENT_ROOT"] . "/src/views/read.php";
    }
}