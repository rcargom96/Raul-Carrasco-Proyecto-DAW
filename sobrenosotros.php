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
            <p>Nuestra historia comenzó en el año 2018 cuando dos amigos, Juan y María, compartieron su amor por las hamburguesas y decidieron abrir un pequeño local en el corazón de la ciudad. Con el tiempo, ese pequeño local se convirtió en SizzleBite Burgers, una marca reconocida por sus deliciosas hamburguesas, pizzas, pasta y su ambiente acogedor.</p>
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


<!--TERMINOS Y CONDICIONES-->

    <section class="terms">
        <h2>Términos y Condiciones</h2>
        <p>Bienvenido a SizzleBite Burgers. Estos términos y condiciones describen las reglas y regulaciones para el uso del sitio web de SizzleBite Burgers, ubicado en www.SizzleBiteBurgers.com</p>
        <p>Al acceder a este sitio web, asumimos que aceptas estos términos y condiciones. No continúes utilizando SizzleBite Burgers si no estás de acuerdo con todos los términos y condiciones establecidos en esta página.</p>
        
        <h3>Cookies</h3>
        <p>Utilizamos cookies. Al acceder a SizzleBite Burgers, aceptaste utilizar cookies de acuerdo con la Política de Privacidad de SizzleBite Burgers.</p>
        <p>La mayoría de los sitios web interactivos utilizan cookies para permitirnos recuperar los detalles del usuario para cada visita. Las cookies son utilizadas por nuestro sitio web para habilitar la funcionalidad de ciertas áreas y facilitar la navegación de las personas que visitan nuestro sitio web.</p>
        
        <h3>Licencia</h3>
        <p>A menos que se indique lo contrario, SizzleBite Burgers y/o sus licenciantes poseen los derechos de propiedad intelectual de todo el material en SizzleBite Burgers. Todos los derechos de propiedad intelectual están reservados. Puedes acceder desde SizzleBite Burgers para tu uso personal sujeto a las restricciones establecidas en estos términos y condiciones.</p>
        <p>No debes:</p>
        <ul>
            <li>Republicar material de SizzleBite Burgers</li>
            <li>Vender, alquilar o sublicenciar material de SizzleBite Burgers</li>
            <li>Reproducir, duplicar o copiar material de SizzleBite Burgers</li>
            <li>Redistribuir contenido de SizzleBite Burgers</li>
        </ul>
        
        <h3>Comentarios</h3>
        <p>Partes de este sitio web ofrecen una oportunidad para que los usuarios publiquen e intercambien opiniones e información en ciertas áreas. SizzleBite Burgers no filtra, edita, publica ni revisa los comentarios antes de su presencia en el sitio web. Los comentarios no reflejan los puntos de vista ni opiniones de SizzleBite Burgers, sus agentes y/o afiliados. Los comentarios reflejan los puntos de vista y opiniones de la persona que publica sus puntos de vista y opiniones.</p>
        <p>SizzleBite Burgers se reserva el derecho de monitorear todos los comentarios y eliminar aquellos que puedan considerarse inapropiados, ofensivos o que incumplan estos Términos y Condiciones.</p>
        
        <h3>Enlaces a Nuestro Contenido</h3>
        <p>Las siguientes organizaciones pueden enlazar a nuestro sitio web sin aprobación previa por escrito:</p>
        <ul>
            <li>Agencias gubernamentales</li>
            <li>Motores de búsqueda</li>
            <li>Organizaciones de noticias</li>
            <li>Distribuidores de directorios en línea que pueden enlazar a nuestro sitio web de la misma manera que enlazan a los sitios web de otras empresas listadas</li>
            <li>Empresas acreditadas a nivel del sistema, excepto organizaciones sin fines de lucro, centros comerciales de caridad y grupos de recaudación de fondos de caridad que no pueden enlazar a nuestro sitio web.</li>
        </ul>
        
        <p>Estas organizaciones pueden enlazar a nuestra página de inicio, a publicaciones o a otra información del sitio web siempre que el enlace: (a) no sea engañoso de ninguna manera; (b) no implique falsamente patrocinio, respaldo o aprobación de la parte que enlaza y sus productos y/o servicios; y (c) encaje dentro del contexto del sitio de la parte que enlaza.</p>
        
        <h3>Responsabilidad del Contenido</h3>
        <p>No seremos responsables de ningún contenido que aparezca en tu sitio web. Aceptas protegernos y defendernos contra todas las reclamaciones que se presenten en tu sitio web. Ningún enlace(s) debe aparecer en ningún sitio web que pueda interpretarse como difamatorio, obsceno o criminal, o que infrinja, de otra manera viole o defienda la infracción u otra violación de, cualquier derecho de terceros.</p>
        
        <h3>Reserva de Derechos</h3>
        <p>Nos reservamos el derecho de solicitar que elimines todos los enlaces o cualquier enlace en particular a nuestro sitio web. Apruebas eliminar de inmediato todos los enlaces a nuestro sitio web a solicitud. También nos reservamos el derecho de modificar estos términos y condiciones y su política de enlaces en cualquier momento. Al continuar enlazando a nuestro sitio web, aceptas estar sujeto a estos términos y condiciones de enlace y seguirlos.</p>
        
        <h3>Eliminación de Enlaces de Nuestro Sitio Web</h3>
        <p>Si encuentras algún enlace en nuestro sitio web que sea ofensivo por cualquier motivo, eres libre de contactar y avisarnos en cualquier momento. Consideraremos solicitudes para eliminar enlaces, pero no estamos obligados a hacerlo ni a responder directamente.</p>
        
        <p>No aseguramos que la información en este sitio web sea correcta, no garantizamos su integridad o precisión; tampoco prometemos asegurarnos de que el sitio web permanezca disponible o que el material en el sitio web se mantenga actualizado.</p>
        
        <h3>Descargo de Responsabilidad</h3>
        <p>En la medida máxima permitida por la ley aplicable, excluimos todas las representaciones, garantías y condiciones relacionadas con nuestro sitio web y el uso de este sitio web. Nada en este descargo de responsabilidad:</p>
        <ul>
            <li>Limitará o excluirá nuestra o tu responsabilidad por muerte o lesiones personales</li>
            <li>Limitará o excluirá nuestra o tu responsabilidad por fraude o tergiversación fraudulenta</li>
            <li>Limitará cualquiera de nuestras o tus responsabilidades de cualquier manera que no esté permitida por la ley aplicable</li>
            <li>Excluirá cualquiera de nuestras o tus responsabilidades que no puedan estar excluidas bajo la ley aplicable</li>
        </ul>
        
        <p>Las limitaciones y prohibiciones de responsabilidad establecidas en esta Sección y en otras partes de este descargo de responsabilidad: (a) están sujetas al párrafo anterior; y (b) rigen todas las responsabilidades que surjan bajo el descargo de responsabilidad, incluidas las responsabilidades que surjan en el contrato, en agravio y por incumplimiento de obligaciones legales.</p>
        
        <p>Siempre y cuando el sitio web y la información y los servicios en el sitio web se proporcionen de forma gratuita, no seremos responsables de ninguna pérdida o daño de cualquier naturaleza.</p>
    </section>


    <!--CONDICIONES COOKIES-->
    <section class="cookies">
        <h2>Política de Cookies</h2>
        <p>En SizzleBite Burgers, utilizamos cookies para mejorar tu experiencia en nuestro sitio web. Esta política de cookies explica qué son las cookies, cómo las utilizamos y cómo puedes gestionarlas.</p>
        
        <h3>¿Qué son las cookies?</h3>
        <p>Las cookies son pequeños archivos de texto que se almacenan en tu dispositivo cuando visitas un sitio web. Nos ayudan a recordar tus preferencias y mejorar tu experiencia en nuestro sitio.</p>
        
        <h3>¿Cómo utilizamos las cookies?</h3>
        <p>Utilizamos cookies para:</p>
        <ul>
            <li>Recordar tus preferencias y configuraciones.</li>
            <li>Analizar el tráfico del sitio web y mejorar nuestro contenido y servicios.</li>
            <li>Personalizar tu experiencia en nuestro sitio web.</li>
        </ul>
        
        <h3>Tipos de cookies que utilizamos</h3>
        <p>Utilizamos tanto cookies de sesión como cookies persistentes. Las cookies de sesión se eliminan automáticamente cuando cierras tu navegador, mientras que las cookies persistentes permanecen en tu dispositivo hasta que caducan o las eliminas.</p>
        
        <h3>Gestionar tus cookies</h3>
        <p>Puedes controlar y/o eliminar las cookies como desees. Puedes eliminar todas las cookies que ya están en tu ordenador y configurar la mayoría de los navegadores para que impidan su instalación. Sin embargo, si lo haces, es posible que tengas que ajustar manualmente algunas preferencias cada vez que visites un sitio y que algunos servicios y funcionalidades no funcionen.</p>
    </section>


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


    <div id="cookie-banner" class="cookie-banner">
        <p>Utilizamos cookies para mejorar tu experiencia en nuestro sitio web. Al continuar navegando, aceptas nuestra <a href="sobrenosotros.php">Política de Cookies</a>.</p>
        <button id="accept-cookies" class="cookie-button">Aceptar</button>
    </div>

    <!--Termina el pie de página-->

    <!--BOTON PARA VOLVER ARRIBA-->

    <a href="#"><button class="topbtn"><i class="fa-solid fa-angle-up"></i></button></a>
    <script src="js/menunav.js"></script>
    <!--COOKIES-->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const cookieBanner = document.getElementById('cookie-banner');
        const acceptCookiesButton = document.getElementById('accept-cookies');

        if (!localStorage.getItem('cookiesAccepted')) {
            cookieBanner.style.display = 'block';
        }

        acceptCookiesButton.addEventListener('click', function () {
            localStorage.setItem('cookiesAccepted', 'true');
            cookieBanner.style.display = 'none';
        });
        });
    </script>

</body>
</html>