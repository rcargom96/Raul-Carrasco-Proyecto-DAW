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
    <link rel="stylesheet" href="css/estilonosotros.css">

    
    
    <title>SizzleBite Burgers</title>
</head>
<body>

 <!--Empieza el encabezado-->
 <header>
    <a href="#" class="logo"><img src="imagenes/logo.png" alt=""></a>
    <nav class="navbar">
        <a href="index.php" >Inicio</a>
        <a href="menu.php">Menu</a>
        <a href="sobrenosotros.php" class="activo">Sobre Nosotros</a>
        <a href="reserva.php">Reservas</a>
    </nav>

    <div class="iconos">
        <i class="fas fa-bars" id="menu"></i>
        <a href="sesion.php"><i class="fas fa-user" id="form-open"></i></a>
    </div>
</header>




<section class="about">
        <div class="container">
            <h2>Sobre Nosotros</h2>
            <p>SizzleBite Burgers es mucho más que una cadena de restaurantes de hamburguesas. Somos una familia apasionada por la comida que busca proporcionar experiencias gastronómicas inolvidables a nuestros clientes. Desde nuestros inicios, nos hemos comprometido a ofrecer hamburguesas de alta calidad, preparadas con ingredientes frescos y sabrosos.</p>
            
            <h3>Nuestra Historia</h3>
            <p>Nuestra historia comenzó en el año 20XX cuando dos amigos, Juan y María, compartieron su amor por las hamburguesas y decidieron abrir un pequeño local en el corazón de la ciudad. Con el tiempo, ese pequeño local se convirtió en SizzleBite Burgers, una marca reconocida por sus deliciosas hamburguesas, pizzas, pasta y su ambiente acogedor.</p>
            <p>A lo largo de los años, hemos crecido y expandido nuestras operaciones, pero siempre hemos mantenido nuestro compromiso con la calidad y la satisfacción del cliente.</p>
            
            <h3>Nuestra Misión y Visión</h3>
            <p>Nuestra misión es simple: queremos ser el destino preferido de los amantes de las hamburguesas, ofreciendo una combinación perfecta de sabor, calidad y servicio. Nos esforzamos por superar las expectativas de nuestros clientes en cada visita y convertirnos en un referente en la industria de la restauración.</p>
            <p>En cuanto a nuestra visión, aspiramos a seguir creciendo y expandiendo nuestra presencia, manteniendo siempre nuestros estándares de excelencia y contribuyendo positivamente a las comunidades en las que operamos.</p>
            
            <h3>Nuestro Compromiso con la Calidad</h3>
            <p>En SizzleBite Burgers, creemos que la calidad es la clave del éxito. Por eso, seleccionamos cuidadosamente cada ingrediente que utilizamos en nuestras hamburguesas, desde la carne hasta el pan y los condimentos. Trabajamos con proveedores de confianza que comparten nuestra pasión por la excelencia y nos aseguramos de que cada producto cumpla con nuestros estándares de calidad.</p>
            
            <h3>Nuestro Equipo</h3>
            <p>Nuestro equipo es el corazón de SizzleBite Burgers. Desde nuestros cocineros hasta nuestro personal de atención al cliente, cada miembro de nuestro equipo desempeña un papel fundamental en el éxito de nuestra empresa. Nos enorgullecemos de fomentar un ambiente de trabajo inclusivo y colaborativo, donde cada persona se sienta valorada y motivada a dar lo mejor de sí misma.</p>
           
            <h3>Nuestra Contribución a la Comunidad</h3>
            <p>Creemos en la importancia de devolver a la comunidad que nos ha apoyado a lo largo de los años. Por eso, nos involucramos activamente en iniciativas y eventos locales que benefician a quienes nos rodean. Colaboramos con organizaciones benéficas, patrocinamos eventos deportivos y culturales, y apoyamos proyectos que promueven el bienestar y la inclusión.</p>
            
            <h3>Contacto</h3>
            <p>¡Estamos aquí para servirte! Si tienes alguna pregunta, sugerencia o comentario, no dudes en contactarnos. Puedes visitar uno de nuestros restaurantes, llamarnos por teléfono o enviarnos un correo electrónico. ¡Esperamos tener noticias tuyas pronto!</p>
            
            <p>Gracias por ser parte de nuestra historia y por elegirnos para satisfacer tus antojos de hamburguesas.</p>
        </div>
    </section>

    <!--Empieza el pie de página-->
    <section class="footer">


        <div class="container">
            <div>
                <h3>SOBRE NOSOTROS</h3>
                <p>
                    <a href="#">Términos y Condiciones</a><br>
                    <a href="#">Política de Privacidad</a><br>
                    <a href="#">Política de Cookies</a>
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
    <script src="js/menunav.js"></script>
</body>
</html>