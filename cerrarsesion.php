<?php
session_start();

// Destruir todas las variables de sesión
$_SESSION = array();

// Eliminar la cookie de sesión si está presente
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
}

// Finalmente, destruir la sesión
session_destroy();

// Redireccionar al usuario a la página de inicio
header("Location: index.php");
exit();
?>
