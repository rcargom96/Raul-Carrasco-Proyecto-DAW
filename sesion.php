<?php
require 'conexionbd.php';    
?>

<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['email'])) {
    $mensaje_bienvenida = "¡Bienvenido, {$_SESSION['email']}!";


} else {
    $mensaje_bienvenida = "";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/estilosesion.css">
    <title>SizzleBite Burgers</title>
    <style>

        .bienvenida-container {
            text-align: center;
            margin-top: 20px;
            font-size: 1.5rem;
            color: #cdaa7c;
        }

        .cerrar-sesion-btn {
            background-color: #cdaa7c;
            color: black;
            border-radius: 20px;
            border: none;
            padding: 10px 20px;
            font-size: 1.5rem;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s ease;
            display: block;
            align-items: center;
        }

        .cerrar-sesion-btn:hover {
            background-color: black;
            color: #cdaa7c;
        }
    </style>
</head>
<body>
    <!--Empieza el encabezado-->
    <header>
        <a href="#" class="logo"><img src="imagenes/logo.png" alt=""></a>
        <nav class="navbar">
            <a href="index.php" >Inicio</a>
            <a href="menu.php">Menu</a>
            <a href="sobrenosotros.php">Sobre Nosotros</a>
            <a href="reserva.php">Reservas</a>
        </nav>

        <div class="iconos">
            <i class="fas fa-bars" id="menu"></i>
            <a href="sesion.php"><i class="fas fa-user" id="form-open"></i></a>
        </div>
    </header>


     <!-- Script para mostrar un alert si hay un error -->
     <?php
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo "<script>alert('Credenciales incorrectas. Por favor, inténtalo de nuevo.');</script>";
    }
    ?>





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
                        <input type="text" placeholder="Teléfono" name="telefono">
                    </label>
                    </div>
                    
                   
                    <input type="submit" value="Registrarse">

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
   <!-- Contenedor para el mensaje de bienvenida y el botón de cierre de sesión -->
   <div class="bienvenida-container">
        <?php echo $mensaje_bienvenida; ?>
        <?php if (isset($_SESSION['email'])): ?>
            <form action="cerrarsesion.php" method="POST" class="cerrar-sesion-form">
                <button type="submit" class="cerrar-sesion-btn">Cerrar Sesión</button>
            </form>
        <?php endif; ?>
    </div>
    <!--Este script hace que al pulsar el icono de menu cuando la pantalla 
    es mas pequeña aparezcan los elementos del menu de navegacion-->
    <script src="js/menunav.js"></script>
    <script src="js/sesion.js"></script>
    <script src="js/register.js"></script>
    <script src="js/login.js"></script>
    <script src="js/validaciones.js"></script>
    
</body>
</html>