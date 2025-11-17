<?php
session_start();

// Si NO está logueado, no permitir acceso
if (!isset($_SESSION['Usuario'])) {
    header("Location: ../Auth/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Panel</title>
</head>
<body>

<h1>Bienvenido, <?php echo $_SESSION['usuario']; ?></h1>

<a href="../Auth/logout.php">Cerrar sesión</a>

</body>
</html>
