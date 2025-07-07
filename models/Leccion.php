<?php
class Leccion {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function obtenerPorCurso($curso_id) {
        $stmt = $this->pdo->prepare("SELECT * FROM lecciones WHERE curso_id = ?");
        $stmt->execute([$curso_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function crear($curso_id, $titulo, $contenido) {
        $stmt = $this->pdo->prepare("INSERT INTO lecciones (curso_id, titulo, contenido) VALUES (?, ?, ?)");
        return $stmt->execute([$curso_id, $titulo, $contenido]);
    }

    public function eliminar($id) {
        $stmt = $this->pdo->prepare("DELETE FROM lecciones WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function obtenerPorId($id) {
    $stmt = $this->pdo->prepare("SELECT * FROM lecciones WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizar($id, $titulo, $contenido) {
        $stmt = $this->pdo->prepare("UPDATE lecciones SET titulo = ?, contenido = ? WHERE id = ?");
        return $stmt->execute([$titulo, $contenido, $id]);
    }

}
