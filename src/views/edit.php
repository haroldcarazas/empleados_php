<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Editar datos del empleado</h1>

    <form action="/update" method="post">
        <input type="text" hidden name="id" value="<?= $empleado["id"] ?>">
        
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= $empleado["nombre"] ?>">
        <br>

        <label>Sueldo:</label>
        <input type="number" name="sueldo" value="<?= $empleado["sueldo"] ?>">
        <br>

        <label>Área asignada:</label>
        <select name="area_id">
            <?php
            foreach ($areas as $area) {
                $areaId = $area["id"];
                $areaNombre = $area["nombre"];

                if ($areaId === $empleado["area_id"]) {
                    echo "<option value='$areaId' selected>$areaNombre</option>";
                } else {
                    echo "<option value='$areaId'>$areaNombre</option>";
                }
            }
            ?>
        </select>
        <br>

        <button type="submit">Actualizar</button>
    </form>
</body>

</html>