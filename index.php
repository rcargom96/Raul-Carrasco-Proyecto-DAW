<?php
require 'conexionbd.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SizzleBite Burgers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
     <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>
<body>
    <!--Empieza el encabezado-->
    <header>
        <a href="#" class="logo"><img src="imagenes/logo.png" alt=""></a>
        <nav class="navbar">
            <a href="index.php" class="activo">Inicio</a>
            <a href="menu.php">Menu</a>
            <a href="sobrenosotros.php">Sobre Nosotros</a>
            <a href="reserva.php">Reservas</a>
        </nav>

        <div class="iconos">
            <i class="fas fa-bars" id="menu"></i>
            <a href="sesion.php"><i class="fas fa-user" id="form-open"></i></a>
        </div>
    </header>

   

    <!--Termina el encabezado-->

    <!--Empieza la seccion de los sliders-->

    <div class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper wrapper">
                <div class="swiper-slide slide slide1">
                    <div class="content">
                        <img src="" alt="">
                        <h3>SizzleBite Burgers</h3>
                        
                        <p>
                            Realiza tu pedido ya!!
                        </p>
                        <a href="menu.php" class="btn">Pedir ahora</a>
                    </div>
                </div>
                <div class="swiper-slide slide slide2">
                    <div class="content">
                        <img src="" alt="">
                        <h3>Sabores únicos</h3>
                        <p>¡Experimenta el mejor sabor!</p>
                        
                        <a href="menu.php" class="btn">Pedir ahora</a>
                    </div>
                </div>
                <div class="swiper-slide slide slide3">
                    <div class="content">
                        <img src="" alt="">
                        <h3>Visitanos</h3>
                        <p>Ven a nuestro restaurante</p>
                        <p>
                            Reserva tu mesa!!
                        </p>
                        <a href="reserva.php" class="btn">Reservar ahora</a>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!--Termina la seccion de los sliders-->
   


    <!--Empieza el pie de página-->
    <section class="footer">


        <div class="container">
            <div>
                <h3>SOBRE NOSOTROS</h3>
                <p>
                    <p>Términos y Condiciones</p>
                    <p>Política de Privacidad</p>
                    <p>Política de Cookies</p>
                </p>
            </div>

            <div>
                <h3>NUESTRAS REDES SOCIALES</h3>
                
                <ul>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                </ul>
            </div>

            <div>
                <h3>CONTACTA CON NOSOTROS</h3>
                <span>SizzleBite Burgers SL</span>
                <span>+ (34) 123456789</span>
                <span>SizzleBiteBurgers@gmail.com</span>
                <span>www.SizzleBiteBurgers.com</span>
            </div>
        </div>

        <p>&copy;2024 Reserved by SizzleBite Burgers SL</p>
</section>

    <!--Termina el pie de página-->


    <!--BOTON PARA VOLVER ARRIBA-->

    <a href="#"><button class="topbtn"><i class="fa-solid fa-angle-up"></i></button></a>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".home-slider", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 7500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        loop:true,
        });
    </script>


    <!--Este script hace que al pulsar el icono de menu cuando la pantalla 
    es mas pequeña aparezcan los elementos del menu de navegacion-->
    <script src="js/menunav.js"></script>
    
</body>
</html>