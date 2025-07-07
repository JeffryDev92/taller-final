<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crear Estudiante</title>
</head>
<body>
    <h1>Crear Estudiante</h1>
    <form method="POST" action="/taller-final/controllers/estudianteController.php?accion=crear">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>

        <button type="submit">Guardar</button>
        <a href="/taller-final/controllers/estudianteController.php">Cancelar</a>
    </form>
</body>
</html>
