<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Lección</title>
    <link rel="stylesheet" href="/taller-final/assets/css/style.css">
</head>
<body>
    <h1>Crear Lección para el Curso #<?= htmlspecialchars($curso_id) ?></h1>
    <form method="POST" action="/taller-final/controllers/leccionController.php?accion=crear&curso_id=<?= $curso_id ?>">
        <label>Título:</label>
        <input type="text" name="titulo" required><br>

        <label>Contenido:</label>
        <textarea name="contenido"></textarea><br>

        <button type="submit">Guardar</button>
        <a href="/taller-final/controllers/leccionController.php?curso_id=<?= $curso_id ?>">Cancelar</a>
    </form>
</body>
</html>
