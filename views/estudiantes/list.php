<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estudiantes</title>
</head>
<body>
    <h1>Lista de Estudiantes</h1>
    <a href="/taller-final/controllers/estudianteController.php?accion=crear">Crear Nuevo Estudiante</a>
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estudiantes as $e): ?>
                <tr>
                    <td><?= $e['id'] ?></td>
                    <td><?= $e['nombre'] ?></td>
                    <td><?= $e['email'] ?></td>
                    <td>
                        <a href="/taller-final/controllers/estudianteController.php?accion=editar&id=<?= $e['id'] ?>">Editar</a> |
                        <a href="/taller-final/controllers/estudianteController.php?accion=eliminar&id=<?= $e['id'] ?>" onclick="return confirm('¿Eliminar estudiante?')">Eliminar</a> |
                        <a href="/taller-final/controllers/inscripcionController.php?estudiante_id=<?= $e['id'] ?>">Ver Cursos</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
