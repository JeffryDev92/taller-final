<?php
require_once __DIR__ . '/../models/Estudiantes.php';
require_once __DIR__ . '/../config/database.php';

$estudiante = new Estudiante($pdo);
$accion = $_GET['accion'] ?? 'listar';

switch ($accion) {
    case 'crear':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $estudiante->crear($_POST['nombre'], $_POST['email']);
            header('Location: /taller-final/controllers/estudianteController.php');
            exit;
        } else {
            include __DIR__ . '/../views/estudiantes/crear.php';
        }
        break;

    case 'editar':
        $id = $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $estudiante->actualizar($id, $_POST['nombre'], $_POST['email']);
            header('Location: /taller-final/controllers/estudianteController.php');
            exit;
        } else {
            $datos = $estudiante->obtenerPorId($id);
            include __DIR__ . '/../views/estudiantes/editar.php';
        }
        break;

    case 'eliminar':
        $id = $_GET['id'];
        $estudiante->eliminar($id);
        header('Location: /taller-final/controllers/estudianteController.php');
        exit;
        break;

    default:
        $estudiantes = $estudiante->obtenerTodos();
        include __DIR__ . '/../views/estudiantes/list.php';
        break;
}
