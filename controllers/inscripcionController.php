<?php
require_once __DIR__ . '/../models/Inscripcion.php';
require_once __DIR__ . '/../config/database.php';

$inscripcion = new Inscripcion($pdo);
$estudiante_id = $_GET['estudiante_id'] ?? null;
$accion = $_GET['accion'] ?? 'listar';

switch ($accion) {
    case 'inscribir':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $inscripcion->inscribir($estudiante_id, $_POST['curso_id']);
            header("Location: /taller-final/controllers/inscripcionController.php?estudiante_id=$estudiante_id");
            exit;
        } else {
            $cursos = $inscripcion->obtenerTodosLosCursos();
            include __DIR__ . '/../views/inscripciones/crear.php';
        }
        break;

    case 'eliminar':
        $curso_id = $_GET['curso_id'];
        $inscripcion->eliminar($estudiante_id, $curso_id);
        header("Location: /taller-final/controllers/inscripcionController.php?estudiante_id=$estudiante_id");
        exit;
        break;

    default:
        $cursosInscritos = $inscripcion->obtenerCursosEstudiante($estudiante_id);
        include __DIR__ . '/../views/inscripciones/list.php';
        break;
}
