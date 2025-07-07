<?php
require_once __DIR__ . '/../models/Leccion.php';
require_once __DIR__ . '/../config/database.php';

$leccion = new Leccion($pdo);
$curso_id = $_GET['curso_id'] ?? null;
$accion = $_GET['accion'] ?? 'listar';

switch ($accion) {
    case 'crear':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $leccion->crear($curso_id, $_POST['titulo'], $_POST['contenido']);
            header("Location: /taller-final/controllers/leccionController.php?curso_id=$curso_id");
            exit;
        } else {
            include __DIR__ . '/../views/lecciones/crear.php';
        }
        break;

    case 'eliminar':
        $id = $_GET['id'];
        $leccion->eliminar($id);
        header("Location: /taller-final/controllers/leccionController.php?curso_id=$curso_id");
        exit;
        break;

    case 'editar':
    $id = $_GET['id'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $leccion->actualizar($id, $_POST['titulo'], $_POST['contenido']);
        header("Location: /taller-final/controllers/leccionController.php?curso_id=$curso_id");
        exit;
        } else {
            $datos = $leccion->obtenerPorId($id);
            include __DIR__ . '/../views/lecciones/editar.php';
        }
        break;


    default:
        $lecciones = $leccion->obtenerPorCurso($curso_id);
        include __DIR__ . '/../views/lecciones/list.php';
        break;
}
