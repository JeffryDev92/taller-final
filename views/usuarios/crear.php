<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>
    <link rel="stylesheet" href="/taller-final/assets/css/style.css">
</head>
<body>
    <h1>Crear Usuario</h1>
    <form action="/taller-final/controllers/usuarioController.php?accion=crear" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Bio:</label>
        <textarea name="bio"></textarea><br>

        <label>Foto (URL):</label>
        <input type="text" name="foto"><br>

        <button type="submit">Guardar</button>
        <a href="/taller-final/controllers/usuarioController.php">Cancelar</a>
    </form>
</body>
</html>
