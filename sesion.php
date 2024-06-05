<?php
require 'conexionbd.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/estilosesion.css">
    <title>SizzleBite Burgers</title>
</head>
<body>
    <!--Empieza el encabezado-->
    <header>
        <a href="#" class="logo"><img src="imagenes/logo.png" alt=""></a>
        <nav class="navbar">
            <a href="index.php" >Inicio</a>
            <a href="menu.php">Menu</a>
            <a href="#about">Sobre Nosotros</a>
            <a href="reserva.php">Reservas</a>
        </nav>

        <div class="iconos">
            <i class="fas fa-bars" id="menu"></i>
            <a href="sesion.php"><i class="fas fa-user" id="form-open"></i></a>
        </div>
    </header>










    <div class="container-form register">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenido</h2>
                <p>Si ya tienes una cuenta Inicia Sesión con tus datos</p>
                <input type="button" value="Iniciar Sesión" id="sign-in">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>CREAR UNA CUENTA</h2>
                
                <form class="form form-register" action="registro.php" method="POST" novalidate>
                   
                    <div>
                        <label >
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" placeholder="Correo Electronico" name="email" >
                        </label>
                    </div>
                   <div>
                        <label>
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" placeholder="Contraseña" name="contrasena">
                        </label>
                   </div>
                   <div>
                    <label>
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Nombre Usuario" name="nombre_usuario" >
                    </label>
                    </div>
                    <div>
                    <label>
                        <i class="fa-solid fa-phone"></i>
                        <input type="password" placeholder="Teléfono" name="telefono">
                    </label>
                    </div>
                   
                    <input type="submit" value="Registrarse">
                    <div class="alerta-error">Todos los campos son obligatorios</div>
                    <div class="alerta-exito">Te registraste correctamente</div>
                </form>
            </div>
        </div>
    </div>


    <div class="container-form login hide">
        <div class="information">
            <div class="info-childs">
                <h2>¡¡Bienvenido nuevamente!!</h2>
                <p>Si no tienes una cuenta Registrate!!!</p>
                <input type="button" value="Registrarse" id="sign-up">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>INICIAR SESIÓN</h2>
                
                <form class="form form-login" action="login.php" method="POST" novalidate>
                    <div>
                        <label >
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" placeholder="Correo Electronico" name="email">
                        </label>
                    </div>
                    <div>
                        <label>
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" placeholder="Contraseña" name="contrasena">
                        </label>
                    </div>
                    <input type="submit" value="Iniciar Sesión">
                    <div class="alerta-error">Todos los campos son obligatorios</div>
                    <div class="alerta-exito">Te registraste correctamente</div>
                </form>
            </div>
        </div>
    </div>
    <!--Este script hace que al pulsar el icono de menu cuando la pantalla 
    es mas pequeña aparezcan los elementos del menu de navegacion-->
    <script src="js/menunav.js"></script>
    <script src="js/sesion.js"></script>
    <script src="js/register.js"></script>
    <script src="js/login.js"></script>
</body>
</html>