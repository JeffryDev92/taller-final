<?php
echo "<h3>Intentando conexión a MySQL con PDO...</h3>";

$host = '127.0.0.1'; // usa IP directamente
$db   = 'taller_final';
$user = 'dev';
$pass = ''; // sin contraseña
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    echo "<p style='color: green;'>✅ Conexión exitosa a la base de datos '$db'.</p>";
} catch (PDOException $e) {
    echo "<p style='color: red;'>❌ Error en la conexión: " . $e->getMessage() . "</p>";
}
?>
