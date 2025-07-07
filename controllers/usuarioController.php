<?php
require_once __DIR__ . '/../models/Usuario.php';
require_once __DIR__ . '/../config/database.php';

$usuario = new Usuario($pdo);

$accion = $_GET['accion'] ?? 'listar';

switch ($accion) {
    case 'crear':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario->crear($_POST['nombre'], $_POST['email'], $_POST['bio'], $_POST['foto']);
            header('Location: /taller-final/controllers/usuarioController.php');
            exit;

        } else {
            include __DIR__ . '/../views/usuarios/crear.php';
        }
        break;

    case 'editar':
        $id = $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario->actualizar($id, $_POST['nombre'], $_POST['email'], $_POST['bio'], $_POST['foto']);
            header('Location: /taller-final/controllers/usuarioController.php');
            exit;

        } else {
            $datos = $usuario->obtenerPorId($id);
            include __DIR__ . '/../views/usuarios/editar.php';
        }
        break;

    case 'eliminar':
        $id = $_GET['id'];
        $usuario->eliminar($id);
        header('Location: /taller-final/controllers/usuarioController.php');
        exit;

        break;

    default:
        $usuarios = $usuario->obtenerTodos();
        include __DIR__ . '/../views/usuarios/list.php';
        break;
}
