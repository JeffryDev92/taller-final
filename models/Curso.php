<?php
class Curso {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function obtenerTodos() {
        $stmt = $this->pdo->query("SELECT * FROM cursos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM cursos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function crear($nombre, $descripcion) {
        $stmt = $this->pdo->prepare("INSERT INTO cursos (nombre, descripcion) VALUES (?, ?)");
        return $stmt->execute([$nombre, $descripcion]);
    }

    public function actualizar($id, $nombre, $descripcion) {
        $stmt = $this->pdo->prepare("UPDATE cursos SET nombre = ?, descripcion = ? WHERE id = ?");
        return $stmt->execute([$nombre, $descripcion, $id]);
    }

    public function eliminar($id) {
        $stmt = $this->pdo->prepare("DELETE FROM cursos WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
