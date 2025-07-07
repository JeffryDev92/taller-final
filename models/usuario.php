<?php
require_once __DIR__ . '/../config/database.php';

class Usuario
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function obtenerTodos()
    {
        $stmt = $this->pdo->query("
            SELECT u.*, p.bio, p.foto 
            FROM usuarios u 
            LEFT JOIN perfiles p ON u.id = p.usuario_id
        ");
        return $stmt->fetchAll();
    }

    public function crear($nombre, $email, $bio, $foto)
    {
        $this->pdo->beginTransaction();

        $stmt = $this->pdo->prepare("INSERT INTO usuarios (nombre, email) VALUES (?, ?)");
        $stmt->execute([$nombre, $email]);
        $usuario_id = $this->pdo->lastInsertId();

        $stmt = $this->pdo->prepare("INSERT INTO perfiles (usuario_id, bio, foto) VALUES (?, ?, ?)");
        $stmt->execute([$usuario_id, $bio, $foto]);

        $this->pdo->commit();
    }

    public function obtenerPorId($id)
    {
        $stmt = $this->pdo->prepare("
            SELECT u.*, p.bio, p.foto 
            FROM usuarios u 
            LEFT JOIN perfiles p ON u.id = p.usuario_id
            WHERE u.id = ?
        ");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function actualizar($id, $nombre, $email, $bio, $foto)
    {
        $stmt = $this->pdo->prepare("UPDATE usuarios SET nombre = ?, email = ? WHERE id = ?");
        $stmt->execute([$nombre, $email, $id]);

        $stmt = $this->pdo->prepare("UPDATE perfiles SET bio = ?, foto = ? WHERE usuario_id = ?");
        $stmt->execute([$bio, $foto, $id]);
    }

    public function eliminar($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM perfiles WHERE usuario_id = ?");
        $stmt->execute([$id]);

        $stmt = $this->pdo->prepare("DELETE FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
    }
}
