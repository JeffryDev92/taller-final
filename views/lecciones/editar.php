<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Lección</title>
    <link rel="stylesheet" href="/taller-final/assets/css/style.css">
</head>
<body>
    <?php include __DIR__ . '/../layouts/navbar.php'; ?>
    <h1>Editar Lección</h1>
    <form method="POST" action="/taller-final/controllers/leccionController.php?accion=editar&id=<?= $datos['id'] ?>&curso_id=<?= $curso_id ?>">
        <label>Título:</label>
        <input type="text" name="titulo" value="<?= htmlspecialchars($datos['titulo']) ?>" required><br>

        <label>Contenido:</label>
        <textarea name="contenido"><?= htmlspecialchars($datos['contenido']) ?></textarea><br>

        <button type="submit">Guardar Cambios</button>
        <a href="/taller-final/controllers/leccionController.php?curso_id=<?= $curso_id ?>">Cancelar</a>
    </form>
</body>
</html>
