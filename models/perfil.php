<?php
require_once __DIR__ . '/../config/database.php';

class Perfil {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function obtenerPorUsuarioId($usuario_id) {
        $stmt = $this->pdo->prepare("SELECT * FROM perfiles WHERE usuario_id = ?");
        $stmt->execute([$usuario_id]);
        return $stmt->fetch();
    }

    public function crear($usuario_id, $bio) {
        $stmt = $this->pdo->prepare("INSERT INTO perfiles (usuario_id, bio) VALUES (?, ?)");
        return $stmt->execute([$usuario_id, $bio]);
    }

    public function actualizar($usuario_id, $bio) {
        $stmt = $this->pdo->prepare("UPDATE perfiles SET bio = ? WHERE usuario_id = ?");
        return $stmt->execute([$bio, $usuario_id]);
    }
}
