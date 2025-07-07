<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cursos del Estudiante</title>
</head>
<body>
    <h1>Cursos Inscritos del Estudiante #<?= htmlspecialchars($estudiante_id) ?></h1>
    <a href="/taller-final/controllers/inscripcionController.php?accion=inscribir&estudiante_id=<?= $estudiante_id ?>">Inscribir en Curso</a>
    <a href="/taller-final/controllers/estudianteController.php">← Volver a Estudiantes</a>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Curso</th>
                <th>Descripción</th>
                <th>Fecha Inscripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cursosInscritos as $curso): ?>
                <tr>
                    <td><?= $curso['id'] ?></td>
                    <td><?= $curso['nombre'] ?></td>
                    <td><?= $curso['descripcion'] ?></td>
                    <td><?= $curso['fecha_inscripcion'] ?></td>
                    <td>
                        <a href="/taller-final/controllers/inscripcionController.php?accion=eliminar&estudiante_id=<?= $estudiante_id ?>&curso_id=<?= $curso['id'] ?>" onclick="return confirm('¿Eliminar inscripción?')">Eliminar</a>
                        <a href="/taller-final/controllers/inscripcionController.php?estudiante_id=<?= $e['id'] ?>">Ver Cursos</a>

                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
