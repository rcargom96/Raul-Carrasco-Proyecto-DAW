<?php
require 'conexionbd.php';

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/estilomenu.css">
    <script src="js/carrito.js" async></script>
    
    
    <title>SizzleBite Burgers</title>
</head>
<body>

 <!--Empieza el encabezado-->
 <header>
    <a href="#" class="logo"><img src="imagenes/logo.png" alt=""></a>
    <nav class="navbar">
        <a href="index.php" >Inicio</a>
        <a href="menu.php" class="activo">Menu</a>
        <a href="#about">Sobre Nosotros</a>
        <a href="reserva.php">Reservas</a>
    </nav>

    <div class="iconos">
        <i class="fas fa-bars" id="menu"></i>
        <a href="sesion.php"><i class="fas fa-user" id="form-open"></i></a>
    </div>
</header>




    <section class="contenedor" >
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            <div class="item">
                <span class="titulo-item">Pizza Hawaiana</span>
                <img src="imagenes/f1.png" alt="" class="img-item">
                <span class="precio-item">15,00 €</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Smash Burguer</span>
                <img src="imagenes/f2.png" alt="" class="img-item">
                <span class="precio-item">25,00 €</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Pizza Napolitana</span>
                <img src="imagenes/f3.png" alt="" class="img-item">
                <span class="precio-item">22,00 €</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Macarrones Ragú</span>
                <img src="imagenes/f4.png" alt="" class="img-item">
                <span class="precio-item">11,00 €</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Patatas Fritas</span>
                <img src="imagenes/f5.png" alt="" class="img-item">
                <span class="precio-item">9,00 €</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Pizza Variada</span>
                <img src="imagenes/f6.png" alt="" class="img-item">
                <span class="precio-item">17,00 €</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Hamburguesa Pollo</span>
                <img src="imagenes/f7.png" alt="" class="img-item">
                <span class="precio-item">12,00 €</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Hamburguesa Vegana</span>
                <img src="imagenes/f8.png" alt="" class="img-item">
                <span class="precio-item">2,00 €</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Fusilli</span>
                <img src="imagenes/f9.png" alt="" class="img-item">
                <span class="precio-item">7,00 €</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
        </div>
        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items">
                <!-- 
                <div class="carrito-item">
                    <img src="img/boxengasse.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Box Engasse</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="1" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$15.000,00</span>
                    </div>
                   <span class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </span>
                </div>
                <div class="carrito-item">
                    <img src="img/skinglam.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Skin Glam</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="3" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$18.000,00</span>
                    </div>
                   <button class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </button>
                </div>
                 -->
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </section>

    <!--BOTON PARA VOLVER ARRIBA-->

    <a href="#"><button class="topbtn"><i class="fa-solid fa-angle-up"></i></button></a>
    <script src="js/menunav.js"></script>
</body>
</html>