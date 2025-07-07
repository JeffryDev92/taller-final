<?php
class Inscripcion {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function obtenerCursosEstudiante($estudiante_id) {
        $stmt = $this->pdo->prepare("
            SELECT c.id, c.nombre, c.descripcion, i.fecha_inscripcion
            FROM inscripciones i
            INNER JOIN cursos c ON i.curso_id = c.id
            WHERE i.estudiante_id = ?
        ");
        $stmt->execute([$estudiante_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerTodosLosCursos() {
        $stmt = $this->pdo->query("SELECT * FROM cursos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function inscribir($estudiante_id, $curso_id) {
        $stmt = $this->pdo->prepare("INSERT INTO inscripciones (estudiante_id, curso_id, fecha_inscripcion) VALUES (?, ?, NOW())");
        return $stmt->execute([$estudiante_id, $curso_id]);
    }

    public function eliminar($estudiante_id, $curso_id) {
        $stmt = $this->pdo->prepare("DELETE FROM inscripciones WHERE estudiante_id = ? AND curso_id = ?");
        return $stmt->execute([$estudiante_id, $curso_id]);
    }
}
