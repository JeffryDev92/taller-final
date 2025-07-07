<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inscribir en Curso</title>
    <link rel="stylesheet" href="/taller-final/assets/css/style.css">
</head>
<body>
    <h1>Inscribir Estudiante #<?= htmlspecialchars($estudiante_id) ?> en Curso</h1>
    <form method="POST" action="/taller-final/controllers/inscripcionController.php?accion=inscribir&estudiante_id=<?= $estudiante_id ?>">
        <label>Curso:</label>
        <select name="curso_id" required>
            <?php foreach ($cursos as $curso): ?>
                <option value="<?= $curso['id'] ?>"><?= $curso['nombre'] ?></option>
            <?php endforeach ?>
        </select><br><br>

        <button type="submit">Inscribir</button>
        <a href="/taller-final/controllers/inscripcionController.php?estudiante_id=<?= $estudiante_id ?>">Cancelar</a>
    </form>
</body>
</html>
