<?php
require_once __DIR__ . '/../models/Curso.php';
require_once __DIR__ . '/../config/database.php';

$curso = new Curso($pdo);
$accion = $_GET['accion'] ?? 'listar';

switch ($accion) {
    case 'crear':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $curso->crear($_POST['nombre'], $_POST['descripcion']);
            header('Location: /taller-final/controllers/cursoController.php');
            exit;
        } else {
            include __DIR__ . '/../views/cursos/crear.php';
        }
        break;

    case 'editar':
        $id = $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $curso->actualizar($id, $_POST['nombre'], $_POST['descripcion']);
            header('Location: /taller-final/controllers/cursoController.php');
            exit;
        } else {
            $datos = $curso->obtenerPorId($id);
            include __DIR__ . '/../views/cursos/editar.php';
        }
        break;

    case 'eliminar':
        $id = $_GET['id'];
        $curso->eliminar($id);
        header('Location: /taller-final/controllers/cursoController.php');
        exit;
        break;

    default:
        $cursos = $curso->obtenerTodos();
        include __DIR__ . '/../views/cursos/list.php';
        break;
}
