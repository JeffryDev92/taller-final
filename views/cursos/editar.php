<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Curso</title>
    <link rel="stylesheet" href="/taller-final/assets/css/style.css">
</head>
<body>
    <?php include __DIR__ . '/../layouts/navbar.php'; ?>
    <h1>Editar Curso</h1>
    <form method="POST" action="/taller-final/controllers/cursoController.php?accion=editar&id=<?= $datos['id'] ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= $datos['nombre'] ?>" required><br>

        <label>Descripción:</label>
        <textarea name="descripcion"><?= $datos['descripcion'] ?></textarea><br>

        <button type="submit">Guardar Cambios</button>
        <a href="/taller-final/controllers/cursoController.php">Cancelar</a>
    </form>
</body>
</html>
