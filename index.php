<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Restaurante</title>
    <link rel="stylesheet" href="css/mic.css">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>
<main>

<?php
if (isset($_GET['ok']) && $_GET['ok'] == 1) {
  
?>
    <div style="background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; padding: 15px; text-align: center; margin-bottom: 20px; font-weight: bold;">
     ¡Registro Completado! Ahora puedes iniciar sesión.
    </div>
<?php
}
?>

<header>
    <div class="cabecera">
        <img src="img/logo.png" class="logo" alt="logo">
    </div>

    <div class="menu">
        <ul>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="#seccion-productos">Productos</a></li>
            <li><a href="#redes-sociales">Servicio</a></li>
            <li><a href="productos/carrito.php">Carrito</a></li>
            <li><a href="#informacion">Contacto</a></li>
        </ul>
    </div>

    <div class="iconos">
        
        <div class="user-menu">
            <ul class="submenu-login">
                <?php if (!isset($_SESSION['Usuario'])): ?>
                    <li><a href="Auth/login.php">Iniciar sesión</a></li>
                    <li><a href="Registrar/Register.php">Registrarse</a></li>
                <?php else: ?>
                    <li>
                        <span style="color: white">
                            Hola, <?php echo htmlspecialchars($_SESSION['Usuario']); ?>
                        </span>
                        <br>
                        <br>
                        <a href="Auth/logout.php">Cerrar sesión</a>
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

<section>
    <article class="banner">
        <div class="portada">
            <img src="img/hamburguesa-fondo1.jpg" alt="">
            <div class="texto-portada">
                <h1> SUPER DEAL BURGER </h1>
                <a href="productos/producto1.php"> ORDER NOW </a>
            </div>
        </div>
    </article>
</section>

<section>
    <article>
        <div class="parte-2">
            <div class="producto">
                <img src="img/hamburguesa-producto.jpg" alt="">
            </div>
            <span>
                <div id="anuncio"> NATURAL </div>
                <h1> 100% NATURAL FRESH INGREDIENTS </h1>
                <p>Cada hamburguesa está preparada con carne seleccionada, vegetales del día y panes artesanales para garantizar el mejor sabor en cada bocado.</p>
                <br>
                <ul>
                    <li>Productos elaborados sin conservantes ni aditivos artificiales.</li>
                    <br>
                    <li>Ingredientes frescos provenientes de proveedores locales.</li>
                    <br>
                    <li>Sabores auténticos pensados para quienes disfrutan una buena comida.</li>
                </ul>
                <br>
                <a href="#redes-sociales"> ABOUT US </a>
            </span>
        </div>
    </article>
</section>

<br><br><br>

<section>
    <article class="promociones">
        <div class="promocion">
            <a href="productos/producto1.php"><img src="img/promociones-1.jpg" alt=""></a>
        </div>
        <div class="promocion">
            <a href="productos/producto6.php"><img src="img/promociones-2.jpg" alt=""></a>
        </div>
        <div class="promocion">
            <a href="productos/producto7.php"><img src="img/promociones-3.jpg" alt=""></a>
        </div>
    </article>
</section>

<br><br><br><br><br>

<ul>
    <div id="anuncio-2"> MENU </div>
    <h1 class="a">WHAT´S NEW</h1>
</ul>

<br>
<br> 
<p class="a">Nuevos sabores creados para sorprenderte. ¡Disfruta lo más reciente de nuestro menú!</p>

<br><br><br>

<section>
<article id="seccion-productos">

    <div class="productos">
        <a href="productos/producto1.php"><img src="img/producto1.png" alt=""></a>
        <div class="nombre-precio">
            <h1> MEGA STACKER </h1>
            <h2> $3.99 </h2>
        </div>
        <div class="descripcion">
            <p>Una hamburguesa poderosa con doble carne jugosa, capas de queso derretido y crujiente tocino. Un clásico para los que aman los sabores intensos.</p>
        </div>
    </div>

    <div class="productos">
        <a href="productos/producto2.php"><img src="img/producto2.png" alt=""></a>
        <div class="nombre-precio">
            <h1> PIZZA PEPERONI </h1>
            <h2> $5.99 </h2>
        </div>
        <div class="descripcion">
            <p>Pizza artesanal con abundante pepperoni y queso mozzarella fundido sobre una base dorada y crujiente. Ideal para compartir… o no.</p>
        </div>
    </div>

    <div class="productos">
        <a href="productos/producto3.php"><img src="img/producto3.png" alt=""></a>
        <div class="nombre-precio">
            <h1> PERRO EN COMBO </h1>
            <h2> $7.99 </h2>
        </div>
        <div class="descripcion">
            <p>Perro caliente estilo gourmet acompañado de papas y bebida. Perfecto para una comida rápida, completa y deliciosa.</p>
        </div>
    </div>

    <div class="productos">
        <a href="productos/producto4.php"><img src="img/producto4.png" alt=""></a>
        <div class="nombre-precio">
            <h1> PAPAS </h1>
            <h2> $4.59 </h2>
        </div>
        <div class="descripcion">
            <p>Papas doradas por fuera y suaves por dentro, acompañadas de una salsa especial. El acompañamiento perfecto para cualquier pedido.</p>
        </div>
    </div>

    <div class="productos">
        <a href="productos/producto5.php"><img src="img/producto5.png" alt=""></a>
        <div class="nombre-precio">
            <h1> AROS DE CEBOLLA </h1>
            <h2> $8.88 </h2>
        </div>
        <div class="descripcion">
            <p>Crujientes aros de cebolla empanizados y fritos al punto perfecto. Una explosión de sabor en cada bocado.</p>
        </div>
    </div>

    <div class="productos">
        <a href="productos/producto6.php"><img src="img/producto6.png" alt=""></a>
        <div class="nombre-precio">
            <h1> HAMBURGUESA EN COMBO </h1>
            <h2> $5.00 </h2>
        </div>
        <div class="descripcion">
            <p>Una hamburguesa clásica con papas y bebida. La combinación ideal para quienes buscan calidad y buen precio.</p>
        </div>
    </div>

    <div class="productos">
        <a href="productos/producto7.php"><img src="img/producto9.png" alt=""></a>
        <div class="nombre-precio">
            <h1> HAMBURGUESA VEGANA </h1>
            <h2> $8.00 </h2>
        </div>
        <div class="descripcion">
            <p>Hamburguesa 100% vegetal, llena de sabor, fresca y ligera. La mejor opción para disfrutar sin remordimientos.</p>
        </div>
    </div>

</article>
</section>


<ul>
    <div id="redes-sociales"> FOLLOW US </div>
    <h1 class="a"> @INSTAGRAM </h1>
</ul>

<br>
<p class="a">Descubre nuestras nuevas creaciones, promociones exclusivas y lo que pasa detrás de cada hamburguesa. ¡Únete a la comunidad Burger Classic!</p>

<section>
    <article class="seccion-redes">
        <div class="foto"><img src="img/foto1.jpg" alt=""></div>
        <div class="foto"><img src="img/foto2.jpg" alt=""></div>
        <div class="foto"><img src="img/foto3.jpeg" alt=""></div>
        <div class="foto"><img src="img/foto4.jpg" alt=""></div>
        <div class="foto"><img src="img/foto5.jpg" alt=""></div>
        <div class="foto"><img src="img/foto6.jpg" alt=""></div>
    </article>
</section>
<br>
<br>
<br>
<section>
    <article>
        <div class="contacto">
            <div class="mensaje">
                <h1>JOIN OUR LETTER</h1>
                <h2>Date cuenta de todas nuestras noticias y promociones mas rapido que los demas.</h2>
            </div>
            <ul>
                <li class="letter"><input type="text" placeholder="YOUR EMAIL ADDRESS"></li>
            </ul>
            <div id="suscribe"><a href="#"> SUSCRIBE </a></div>
        </div>
    </article>
</section>

<section>
    <article class="ubicacion">
        <img src="img/ubicacion.png" alt="">
    </article>
</section>

<article>
<div id="informacion">

    <div class="info">
        <ul>
            <li><h1>OUR LOCATIONS</h1></li>
            <li><img src="img/1x/outline_gps_fixed_black_24dp.png" height="15"><span> PO Box 16122 Collins Street</span></li>
            <li><img src="img/1x/outline_gps_fixed_black_24dp.png" height="15"><span> 295 Street, Melbourne, Aus</span></li>
        </ul>
    </div>

    <div class="info">
        <ul>
            <li><h1>CONTACT DETAILS</h1></li>
            <li><img src="img/1x/outline_call_black_24dp.png" height="15"><span> +66 396 847 2637</span></li>
            <li><img src="img/1x/outline_email_black_24dp.png" height="15"><span> Hello@Burger.com</span></li>
        </ul>
    </div>

    <div class="info">
        <ul>
            <li><h1>OPENING HOURS</h1></li>
            <li><img src="img/1x/outline_schedule_black_24dp.png" height="15"><span> Mon - Fri ...... 9am - 12pm</span></li>
            <li><img src="img/1x/outline_schedule_black_24dp.png" height="15"><span> Saturday ...... 9am - 12pm</span></li>
            <li><img src="img/1x/outline_schedule_black_24dp.png" height="15"><span> Sunday ............ Closed</span></li>
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
            <a href="#"><img src="img/social-media-icon_facebook.png"></a>
            <a href="#"><img src="img/social-media-icon_instagram.png"></a>
            <a href="#"><img src="img/social-media-icon_tiktok.png"></a>
            <a href="#"><img src="img/social-media-icon_youtube.png"></a>
        </div>

        <div class="dudas">
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
        </div>

    </div>
</footer>

</main>
</body>
</html>