<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Curso</title>
    <link rel="stylesheet" href="/taller-final/assets/css/style.css">
</head>
<body>
    <h1>Crear Curso</h1>
    <form method="POST" action="/taller-final/controllers/cursoController.php?accion=crear">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label>Descripción:</label>
        <textarea name="descripcion"></textarea><br>

        <button type="submit">Guardar</button>
        <a href="/taller-final/controllers/cursoController.php">Cancelar</a>
    </form>
</body>
</html>
