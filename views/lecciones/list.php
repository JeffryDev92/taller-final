<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lecciones del Curso</title>
    <link rel="stylesheet" href="/taller-final/assets/css/style.css">

</head>
<body>
    <?php include __DIR__ . '/../layouts/navbar.php'; ?>
    <h1>Lecciones del Curso #<?= htmlspecialchars($curso_id) ?></h1>
    <a href="/taller-final/controllers/leccionController.php?accion=crear&curso_id=<?= $curso_id ?>">Crear Nueva Lección</a>
    <a href="/taller-final/controllers/cursoController.php">← Volver a Cursos</a>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Contenido</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lecciones as $l): ?>
                <tr>
                    <td><?= $l['id'] ?></td>
                    <td><?= $l['titulo'] ?></td>
                    <td><?= $l['contenido'] ?></td>
                    <td>
                        <a href="/taller-final/controllers/leccionController.php?accion=editar&id=<?= $l['id'] ?>&curso_id=<?= $curso_id ?>">Editar</a> |
                        <a href="/taller-final/controllers/leccionController.php?accion=eliminar&id=<?= $l['id'] ?>&curso_id=<?= $curso_id ?>" onclick="return confirm('¿Eliminar esta lección?')">Eliminar</a>
                    </td>


                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
