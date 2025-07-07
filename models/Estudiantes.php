<?php
class Estudiante {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function obtenerTodos() {
        $stmt = $this->pdo->query("SELECT * FROM estudiantes");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM estudiantes WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function crear($nombre, $email) {
        $stmt = $this->pdo->prepare("INSERT INTO estudiantes (nombre, email) VALUES (?, ?)");
        return $stmt->execute([$nombre, $email]);
    }

    public function actualizar($id, $nombre, $email) {
        $stmt = $this->pdo->prepare("UPDATE estudiantes SET nombre = ?, email = ? WHERE id = ?");
        return $stmt->execute([$nombre, $email, $id]);
    }

    public function eliminar($id) {
        $stmt = $this->pdo->prepare("DELETE FROM estudiantes WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
