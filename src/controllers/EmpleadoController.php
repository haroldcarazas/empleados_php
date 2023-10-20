<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/models/Empleado.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/models/Area.php");

class EmpleadoController
{
    /**
     * Mostrar la vista principal
     */
    public function index()
    {
        $empleados = Empleado::all();

        include $_SERVER["DOCUMENT_ROOT"] . "/src/views/read.php";
    }

    /**
     * Mostrar el formulario para crear un nuevo empleado.
     */
    public function create()
    {
        include $_SERVER["DOCUMENT_ROOT"] . "/src/views/create.php";
    }

    // Crear un nuevo registro en la base de datos
    public function store($request)
    {
        $created = Empleado::create($request);

        if ($created) {
            header("Location: /index.php");
        }
    }


    /**
     * Eliminar el registro de un usuario.
     * 
     * @param int $id El id del usuario a editar.
     * 
     */
    public function destroy($id)
    {
        $deleted = Empleado::delete($id);

        if ($deleted) {
            header("Location: /index.php");
        }
    }

    /**
     * Mostrar el formulario para editar un registro de empleado
     * 
     * @param int $id El id del usuario a editar.
     * 
     */
    public function edit($id)
    {
        $empleado = Empleado::find($id);
        $areas = Area::all();

        include $_SERVER["DOCUMENT_ROOT"] . "/src/views/edit.php";
    }

    /**
     * Actualizar los datos de un empleado en la base de datos
     * 
     * @param int $request La data a actualizar del empleado.
     * 
     */
    public function update($request)
    {
        $updated = Empleado::update($request);

        if ($updated) {
            header("Location: /index.php");
        }
    }
}
