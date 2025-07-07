<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cursos</title>
    <link rel="stylesheet" href="/taller-final/assets/css/style.css">
</head>
<body>
    <h1>Lista de Cursos</h1>
    <a href="/taller-final/controllers/cursoController.php?accion=crear">Crear Nuevo Curso</a>
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cursos as $c): ?>
                <tr>
                    <td><?= $c['id'] ?></td>
                    <td><?= $c['nombre'] ?></td>
                    <td><?= $c['descripcion'] ?></td>
                    <td>
                        <a href="/taller-final/controllers/cursoController.php?accion=editar&id=<?= $c['id'] ?>">Editar</a> |
                        <a href="/taller-final/controllers/cursoController.php?accion=eliminar&id=<?= $c['id'] ?>" onclick="return confirm('¿Eliminar este curso?')">Eliminar</a>
                        <a href="/taller-final/controllers/leccionController.php?curso_id=<?= $c['id'] ?>">Ver Lecciones</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
