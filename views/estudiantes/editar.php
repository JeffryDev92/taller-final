<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Estudiante</title>
    <link rel="stylesheet" href="/taller-final/assets/css/style.css">
</head>
<body>
    <?php include __DIR__ . '/../layouts/navbar.php'; ?>
    <h1>Editar Estudiante</h1>
    <form method="POST" action="/taller-final/controllers/estudianteController.php?accion=editar&id=<?= $datos['id'] ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= $datos['nombre'] ?>" required><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?= $datos['email'] ?>" required><br>

        <button type="submit">Guardar Cambios</button>
        <a href="/taller-final/controllers/estudianteController.php">Cancelar</a>
    </form>
</body>
</html>
