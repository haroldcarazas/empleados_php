<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Todos los empleados</h1>

    <a href="/create">Crear nuevo empleado</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Sueldo</th>
                <th>Área</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($empleados as $empleado) {
            ?>
                <tr>
                    <td><?= $empleado["id"] ?></td>
                    <td><?= $empleado["nombre"] ?></td>
                    <td><?= $empleado["sueldo"] ?></td>
                    <td><?= $empleado["area_nombre"] ?></td>
                    <td>
                        <a href="/edit?id=<?= $empleado["id"] ?>">Editar</a>
                        <form action="/delete" method="post">
                            <button type="submit" name="empleado_id" value="<?= $empleado["id"] ?>">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>