<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto - Restaurante</title>
    <link rel="stylesheet" href="../css/productos.css">
    <link rel="icon" type="image/png" href="../img/logo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>

    <header>
    <div class="cabecera">
        <img src="../img/logo.png" class="logo" alt="logo">
    </div>

    <div class="menu">
        <ul>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="../index.php#seccion-productos">Productos</a></li>
            <li><a href="../index.php#redes-sociales">Servicio</a></li>
            <li><a href="carrito.php">Carrito</a></li>
            <li><a href="../index.php#informacion">Contacto</a></li>
        </ul>
    </div>

    <div class="iconos">
        
        <div class="user-menu">
            <ul class="submenu-login">
                <?php if (!isset($_SESSION['Usuario'])): ?>
                    <li><a href="../Auth/login.php">Iniciar sesión</a></li>
                    <li><a href="../Registrar/Register.php">Registrarse</a></li>
                <?php else: ?>
                    <li>
                        <span style="color: white">
                            Hola, <?php echo htmlspecialchars($_SESSION['Usuario']); ?>
                        </span>
                        <br>
                        <br>
                        <a href="../Auth/logout.php">Cerrar sesión</a>
                        <br>
                        <br>
                    </li>
                <?php endif; ?>
                <br>
                <br>

            </ul>
        </div>

    </div>
</header>
    <section class="contenedor-producto">
        
        <div class="img-producto">
            <img src="../img/producto5.png" alt="Producto">
        </div>

        <div class="info-producto">

            <a href="../index.php#seccion-productos" class="back">← Volver</a>

            <h1 class="titulo-producto">AROS DE CEBOLLA</h1>
            <p class="precio-producto">$8.88</p>

            <p class="descripcion">
                Crujientes aros de cebolla empanizados y fritos al punto perfecto. Una explosión de sabor en cada bocado.
            </p>

            <h3 class="tamaño">Tamaño</h3>

            <form action="agregar_carrito.php" method="POST">

    <input type="hidden" name="id" value="5">
    <input type="hidden" name="nombre" value="AROS DE CEBOLLA">
    <input type="hidden" name="precio" value="8.88">

    <div class="tamaños">
        <label><input type="radio" name="size" value="Pequeño" required> Pequeño</label>
        <label><input type="radio" name="size" value="Mediano" required> Mediano</label>
        <label><input type="radio" name="size" value="Grande" required> Grande</label>
    </div>

    <button class="carrito" type="submit">Agregar al carrito</button>
</form>


        </div>

    </section>

    <article>
    <div class="informacion">

        <div class="info">
            <ul>
                <li><h1>OUR LOCATIONS</h1></li>
                <li><img src="../img/1x/outline_gps_fixed_black_24dp.png" height="15" width="15"><span>PO Box 16122 Collins Street</span></li>
                <li><img src="../img/1x/outline_gps_fixed_black_24dp.png" height="15" width="15"><span>295 Street, Melbourne, Aus</span></li>
            </ul>
        </div>

        <div class="info">
            <ul>
                <li><h1>CONTACT DETAILS</h1></li>
                <li><img src="../img/1x/outline_call_black_24dp.png" height="15" width="15"><span>+66 396 847 2637</span></li>
                <li><img src="../img/1x/outline_email_black_24dp.png" height="15" width="15"><span>Hello@Burger.com</span></li>
            </ul>
        </div>

        <div class="info">
            <ul>
                <li><h1>OPENING HOURS</h1></li>
                <li><img src="../img/1x/outline_schedule_black_24dp.png" height="15" width="15"><span>> Mon - Fri ...... 9am - 12pm</span></li>
                <li><img src="../img/1x/outline_schedule_black_24dp.png" height="15" width="15"><span>> Saturday ...... 9am - 12pm</span></li>
                <li><img src="../img/1x/outline_schedule_black_24dp.png" height="15" width="15"><span>> Sunday ............ Closed</span></li>
            </ul>
        </div>

    </div>
</article>

<footer>
    <div class="footer">

        <div class="dudas">
            <a href="#">SAMUEL, SANTIAGO Y JUSTIN</a>
        </div>

        <div class="redes-sociales">
            <a href="#"><img src="../img/social-media-icon_facebook.png"></a>
            <a href="#"><img src="../img/social-media-icon_instagram.png"></a>
            <a href="#"><img src="../img/social-media-icon_tiktok.png"></a>
            <a href="#"><img src="../img/social-media-icon_youtube.png"></a>
        </div>

        <div class="dudas">
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
        </div>

    </div>
</footer>

</body>
</html>
