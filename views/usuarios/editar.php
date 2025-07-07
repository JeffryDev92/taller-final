<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="/taller-final/assets/css/style.css">
</head>
<body>
    <h1>Editar Usuario</h1>
    <form action="/taller-final/controllers/usuarioController.php?accion=editar&id=<?= $datos['id'] ?>" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= $datos['nombre'] ?>" required><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?= $datos['email'] ?>" required><br>

        <label>Bio:</label>
        <textarea name="bio"><?= $datos['bio'] ?></textarea><br>

        <label>Foto (URL):</label>
        <input type="text" name="foto" value="<?= $datos['foto'] ?>"><br>

        <button type="submit">Actualizar</button>
        <a href="/taller-final/controllers/usuarioController.php">Cancelar</a>
    </form>
</body>
</html>
