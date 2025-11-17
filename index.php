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
            <li><a href="#">Inicio</a></li>
            <li><a href="#seccion-productos">Productos</a></li>
            <li><a href="#redes-sociales">Servicio</a></li>
            <li><a href="#">Carrito</a></li>
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
        <ul>
            <li><a href="#"><img class="ico-menu" src="img/outline_search_black_24dp.png" alt=""></a></li>
            <li><a href="#"><img class="ico-menu" src="img/outline_shopping_cart_black_24dp.png" alt=""></a></li>
        </ul>

    </div>
</header>

<section>
    <article class="banner">
        <div class="portada">
            <img src="img/hamburguesa-fondo1.jpg" alt="">
            <div class="texto-portada">
                <h1> SUPER DEAL BURGER </h1>
                <a href="#"> ORDER NOW </a>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <br>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                </ul>
                <br>
                <a href="#"> ABOUT US </a>
            </span>
        </div>
    </article>
</section>

<br><br><br>

<section>
    <article class="promociones">
        <div class="promocion">
            <a href="#"><img src="img/promociones-1.jpg" alt=""></a>
        </div>
        <div class="promocion">
            <a href="#"><img src="img/promociones-2.jpg" alt=""></a>
        </div>
        <div class="promocion">
            <a href="#"><img src="img/promociones-3.jpg" alt=""></a>
        </div>
    </article>
</section>

<br><br><br><br><br>

<ul>
    <div id="anuncio-2"> MENU </div>
    <h1 class="a">WHAT´S NEW</h1>
</ul>

<p class="a">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

<br><br><br><br><br><br>

<section>
<article id="seccion-productos">

    <div class="productos">
        <a href="html/producto1.html"><img src="img/producto1.png" alt=""></a>
        <div class="nombre-precio">
            <h1> MEGA STACKER </h1>
            <h2> $3.99 </h2>
        </div>
        <div class="descripcion">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>

    <div class="productos">
        <a href="html/producto2.html"><img src="img/producto2.png" alt=""></a>
        <div class="nombre-precio">
            <h1> PIZZA PEPERONI </h1>
            <h2> $5.99 </h2>
        </div>
        <div class="descripcion">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>

    <div class="productos">
        <a href="html/producto3.html"><img src="img/producto3.png" alt=""></a>
        <div class="nombre-precio">
            <h1> PERRO EN COMBO </h1>
            <h2> $7.99 </h2>
        </div>
        <div class="descripcion">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>

    <div class="productos">
        <a href="html/producto4.html"><img src="img/producto4.png" alt=""></a>
        <div class="nombre-precio">
            <h1> PAPAS </h1>
            <h2> $4.59 </h2>
        </div>
        <div class="descripcion">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>

    <div class="productos">
        <a href="html/producto5.html"><img src="img/producto5.png" alt=""></a>
        <div class="nombre-precio">
            <h1> AROS DE CEBOLLA </h1>
            <h2> $8.88 </h2>
        </div>
        <div class="descripcion">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>

    <div class="productos">
        <a href="html/producto6.html"><img src="img/producto6.png" alt=""></a>
        <div class="nombre-precio">
            <h1> HAMBURGUESA EN COMBO </h1>
            <h2> $5.00 </h2>
        </div>
        <div class="descripcion">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>

</article>
</section>


<ul>
    <div id="redes-sociales"> FOLLOW US </div>
    <h1 class="a"> @INSTAGRAM </h1>
</ul>

<p class="a">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

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

<section>
    <article>
        <div class="contacto">
            <div class="mensaje">
                <h1>JOIN OUR LETTER</h1>
                <h2>Lorem ipsum dolor sit amet.</h2>
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
            <a href="#">//NUESTROS NOMBRES</a>
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