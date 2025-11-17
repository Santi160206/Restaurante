<?php
session_start();

if (isset($_SESSION['Usuario'])) {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>

<div class="login-container">
    <h2>Iniciar sesión</h2>

    <?php
    if (isset($_SESSION['login_error'])) {
        echo "<p class='error-msg'>".$_SESSION['login_error']."</p>";
        unset($_SESSION['login_error']); 
    }
    ?>

    <form action="Procesar_login.php" method="POST">
        <input type="text" name="Usuario" placeholder="Usuario" required>
        <input type="password" name="Contraseña" placeholder="Contraseña" required>
        <button type="submit">Ingresar</button>
    </form>

</div>

</body>
</html>
