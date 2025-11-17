<?php
session_start();
if (isset($_SESSION['Usuario'])) {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>

<div class="login-container">
    <h2>Crear cuenta</h2>

    <form action="Procesar_registro.php" method="POST">
        <input type="text" name="Nombre" placeholder="Nombre" required>
        <input type="text" name="Usuario" placeholder="Usuario" required>
        <input type="text" name="Rol" placeholder="Rol" required>
        <input type="text" name="Correo" placeholder="Correo" required>
        <input type="password" name="Contraseña" placeholder="Contraseña" required>
        <input type="password" name="Contraseña2" placeholder="Confirmar contraseña" required>
        <button type="submit">Registrarse</button>
    </form>

    <?php
    if (isset($_GET['ok'])) {
        
        echo "<p class='success-msg'>¡Cuenta creada correctamente!</p>";
        echo "<p>Serás redirigido.</p>";
        echo "<script>";
        echo "setTimeout(function(){";
        echo "    window.location.href = '../index.php';"; 
        echo "}, 3000);"; 
        echo "</script>";
    }
    
    ?>

</div>

</body>
</html>