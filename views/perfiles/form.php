<!DOCTYPE html>
<html>
<head>
    <title>Perfil de Usuario</title>
</head>
<body>
    <h2>Perfil de <?= htmlspecialchars($usuario['nombre']) ?></h2>

    <form method="post" action="">
        <textarea name="bio" placeholder="Biografía"><?= $perfil['bio'] ?? '' ?></textarea>
        <button type="submit">Guardar Perfil</button>
    </form>

    <p><a href="../taller-final/controllers/UsuarioController.php">← Volver</a></p>
</body>
</html>
