<?php
session_start(); // Necesario para acceder a $_SESSION

// Si no hay sesión iniciada, redirige automáticamente a login.php
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}

// Escapa el nombre de usuario por seguridad
$usuarioSeguro = htmlspecialchars($_SESSION['usuario'], ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel</title>
</head>
<body>
    <h1>Hola, <?php echo $usuarioSeguro; ?></h1>
    <p><a href="logout.php">Cerrar sesión</a></p>
</body>
</html>