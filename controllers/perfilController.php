<?php
require_once __DIR__ . '/../models/Usuario.php';
require_once __DIR__ . '/../models/Perfil.php';

$usuarioModel = new Usuario($pdo);
$perfilModel = new Perfil($pdo);

$usuario_id = $_GET['id'] ?? null;

if (!$usuario_id) {
    header("Location: UsuarioController.php");
    exit;
}

$usuario = $usuarioModel->obtenerPorId($usuario_id);
$perfil = $perfilModel->obtenerPorUsuarioId($usuario_id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($perfil) {
        $perfilModel->actualizar($usuario_id, $_POST['bio']);
    } else {
        $perfilModel->crear($usuario_id, $_POST['bio']);
    }
    header("Location: UsuarioController.php");
    exit;
}

include __DIR__ . '/../views/perfiles/form.php';
