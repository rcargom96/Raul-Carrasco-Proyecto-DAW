<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SizzleBite Burgers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Empieza el encabezado-->
    <header>
        <a href="#" class="logo"><img src="imagenes/logo.png" alt=""></a>
        <nav class="navbar">
            <a href="index.php" >Inicio</a>
            <a href="menu.php">Menu</a>
            <a href="#about">Sobre Nosotros</a>
            <a href="reserva.php" class="activo">Reservas</a>
        </nav>

        <div class="iconos">
            <i class="fas fa-bars" id="menu"></i>
            
            <a href="sesion.php"><i class="fas fa-user" id="form-open"></i></a>
        </div>
    </header>

    
    <!--Termina el encabezado-->


    <!--Empieza la sección de las reservas-->


    <div class="reserva" id="reserva">
        <div class="imagen">

        </div>
        
        <div class="form">
            <h1 class="titulo">Reserva una mesa</h1>
            <center><h3 class="sub-titulo">- Visita nuestro restaurante -</h3></center>
            <!--
            <form>
                <div class="form-contenido">
                    <div>
                        <select>
                            <option>1 persona</option>
                            <option>2 personas</option>
                            <option>3 personas</option>
                            <option>4 personas</option>
                            <option>5 personas</option>
                            <option>6 personas</option>
                        </select>
                        <input type="time">
                    </div>
                    <div>
                        <input type="date">
                        <input type="text"placeholder="Nombre">
                    </div>
                    
                </div>
                <center><a href="#" class="btn">Reserva ahora</a></center>
            </form>-->
            <form action="reservar.php" method="POST">
                <div class="form-contenido">
                    <div>
                        <select name="numero_personas">
                            <option value="1">1 persona</option>
                            <option value="2">2 personas</option>
                            <option value="3">3 personas</option>
                            <option value="4">4 personas</option>
                            <option value="5">5 personas</option>
                            <option value="6">6 personas</option>
                        </select>
                        <input type="time" name="numero_personas">
                    </div>
                    <div>
                        <input type="date" name="fecha_reserva">
                        <input type="text" placeholder="Nombre" name="nombre_cliente_reserva">
                    </div>
                </div>
                <center><button type="submit" class="btn">Reserva ahora</button></center>
            </form>
        </div>
        
        
    </div>
    <!--Termina la sección de las reservas-->


    <!--Empieza el pie de página-->
    <section class="footer">


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

    <!--Script FORMULARIO-->
    <script src="js/formulario.js"></script>
    <!--BOTON PARA VOLVER ARRIBA-->
    <a href="#"><button class="topbtn"><i class="fa-solid fa-angle-up"></i></button></a>
    <!--Este script hace que al pulsar el icono de menu cuando la pantalla 
    es mas pequeña aparezcan los elementos del menu de navegacion-->
    <script src="js/menunav.js"></script>
</body>
</html>