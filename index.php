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
            <a href="index.html" class="activo">Inicio</a>
            <a href="menu.html">Menu</a>
            <a href="#about">Sobre Nosotros</a>
            <a href="reserva.html">Reservas</a>
        </nav>

        <div class="iconos">
            <i class="fas fa-bars" id="menu"></i>
            <i class="fas fa-shopping-cart" id="carrito"></i>
            <i class="fas fa-user" id="form-open"></i>
        </div>
    </header>

    <!--Formulario Inicio Sesion y Registro-->
        <section class="formularios">
            <div class="form_cont">
                <i class="fa-regular fa-circle-xmark form_cerrar"></i>
                <!--Inicio de Sesion-->
                <div class="form inicio_form">
                    <form action="login.php" method="POST">
                        <h2>Iniciar Sesion</h2>
                        <div class="input_box">
                            <input type="email" name="email" placeholder="Email" required>
                            <i class="fa-solid fa-envelope email"></i>
                        </div>
                        <div class="input_box">
                            <input type="password" name="contrasena" placeholder="Contraseña" required>
                            <i class="fa-solid fa-lock password"></i>
                        </div>
                        <button class="btn-inicio-sesion">Iniciar Sesion</button>

                        <div class="inicio_registro">
                            ¿No tienes una cuenta? <a href="#" id="registro">Registrarse</a>
                        </div>
                    </form>
                </div>

                <!--Registrarse-->
                <div class="form registro_form">
                    <form action="registro.php" method="POST">
                        <h2>Registrarse</h2>
                        <div class="input_box">
                            <input type="email" name="email" placeholder="Email" required>
                            <i class="fa-solid fa-envelope email"></i>
                        </div>
                        <div class="input_box">
                            <input type="password" name="contrasena" placeholder="Contraseña" required>
                            <i class="fa-solid fa-lock password"></i>
                        </div>
                        <div class="input_box">
                            <input type="text" name="nombre_usuario" placeholder="Nombre y apellidos" required>
                            <i class="fa-solid fa-circle-user nombre"></i>
                        </div>
                        <!--
                        <div class="input_box">
                        <input type="text" placeholder="Direccion" required>
                        <i class="fa-solid fa-map-location-dot direccion"></i>
                        </div>
                        -->
                        <div class="input_box">
                            <input type="text" name="telefono" placeholder="Telefono" required>
                            <i class="fa-solid fa-phone telefono"></i>
                        </div>
                        <button class="btn-inicio-sesion">Registrarse</button>

                        <div class="inicio_registro">
                            ¿Ya tienes una cuenta? <a href="#" id="inicio">Iniciar Sesion</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    <!--TERMINA Formulario Inicio Sesion y Registro-->

    <!--Termina el encabezado-->

    <!--Empieza la seccion de los sliders-->

    <div class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper wrapper">
                <div class="swiper-slide slide slide1">
                    <div class="content">
                        <img src="" alt="">
                        <h3>bla bla bla bla</h3>
                        <h1>bla bla bla bla</h1>
                        <p>
                            bla bla bla bla
                        </p>
                        <a href="#" class="btn">Pedir ahora</a>
                    </div>
                </div>
                <div class="swiper-slide slide slide2">
                    <div class="content">
                        <img src="" alt="">
                        <h3>bla bla bla bla</h3>
                        <h1>bla bla bla bla</h1>
                        <p>
                            bla bla bla bla
                        </p>
                        <a href="#" class="btn">Pedir ahora</a>
                    </div>
                </div>
                <div class="swiper-slide slide slide3">
                    <div class="content">
                        <img src="" alt="">
                        <h3>bla bla bla bla</h3>
                        <h1>bla bla bla bla</h1>
                        <p>
                            bla bla bla bla
                        </p>
                        <a href="#" class="btn">Pedir ahora</a>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!--Termina la seccion de los sliders-->
   


    <!--Empieza el pie de página-->
    <section class="footer">
        <img src="imagenes/logo.png" alt="">

        <div class="container">
            <div>
                <h3>SOBRE NOSOTROS</h3>
                <p>bla bla bla bla bla bla bla bla bla bla bla bla</p>
            </div>

            <div>
                <h3>BLA BLA BLA BLA BLA</h3>
                
                <ul>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                </ul>
            </div>

            <div>
                <h3>CONTACTA CON NOSOTROS</h3>
                <span>bla bla bla bla SL</span>
                <span>+ (34) 123456789</span>
                <span>blabla@gmail.com</span>
                <span>www.blabla.com</span>
            </div>
        </div>

        <p>&copy;2024 Reserved by bla bla</p>
    </section>

    <!--Termina el pie de página-->


    <!--BOTON PARA VOLVER ARRIBA-->

    <a href="#"><button class="topbtn"><i class="fa-solid fa-angle-up"></i></button></a>

    <!--Script FORMULARIO-->
    <script src="js/formulario.js"></script>

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