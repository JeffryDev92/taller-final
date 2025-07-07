<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
    <link rel="stylesheet" href="/taller-final/assets/css/style.css">
</head>
<body>
    <?php include __DIR__ . '/../layouts/navbar.php'; ?>

    <h1>Lista de Usuarios</h1>
    <a href="/taller-final/controllers/usuarioController.php?accion=crear">Crear Nuevo Usuario</a>
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Bio</th>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $u): ?>
                <tr>
                    <td><?= $u['id'] ?></td>
                    <td><?= $u['nombre'] ?></td>
                    <td><?= $u['email'] ?></td>
                    <td><?= $u['bio'] ?></td>
                    <td><img src="<?= $u['foto'] ?>" width="50"></td>
                    <td>
                        <a href="/taller-final/controllers/usuarioController.php?accion=editar&id=<?= $u['id'] ?>">Editar</a> |
                        <a href="/taller-final/controllers/usuarioController.php?accion=eliminar&id=<?= $u['id'] ?>" onclick="return confirm('¿Eliminar este usuario?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
