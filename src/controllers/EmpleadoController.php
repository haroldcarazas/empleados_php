<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/models/Empleado.php");

class EmpleadoController
{
    public function index()
    {
        $empleados = Empleado::all();

        include $_SERVER["DOCUMENT_ROOT"] . "/src/views/read.php";
    }

    // Mostrar el formulario para crear un nuevo empleado
    public function create()
    {
        include $_SERVER["DOCUMENT_ROOT"] . "/src/views/create.php";
    }

    // Crear el registro en la base de datos
    public function store($request)
    {
        $created = Empleado::create($request);

        if ($created) {
            header("Location: /index.php");
        }
    }

    public function delete($id)
    {
        $deleted = Empleado::delete($id);

        if ($deleted) {
            header("Location: /index.php");
        }
    }

    public function edit($id)
    {
        echo "Editando los datos: $id";
    }
}