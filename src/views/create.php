<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear registro de empleado</h1>

    <form action="/" method="post">
        <label for="">Nombre:</label>
        <input type="text" name="nombre">
        <br>

        <label for="">Sueldo:</label>
        <input type="text" name="sueldo">
        <br>

        <label for="">Nombre:</label>
        <select name="area_id">
            <option value="1">Informática</option>
            <option value="2">Logística</option>
            <option value="3">Cocina</option>
        </select>
        <br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>