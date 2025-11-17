<?php
session_start();
?>

<div class="user-menu">

    <ul class="submenu-login">
        <?php if (isset($_SESSION['Usuario'])): ?>
            <li><a href="Auth/logout.php">Cerrar sesión</a></li>
        <?php else: ?>
            <li><a href="Auth/login.php">Iniciar sesión</a></li>
        <?php endif; ?>
    </ul>
</div>
