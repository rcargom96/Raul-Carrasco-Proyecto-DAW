<?php
session_start(); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require 'conexionbd.php';

 
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    $sql = "SELECT * FROM usuarios WHERE email='$email' AND contrasena='$contrasena'";
    $result = $conn->query($sql);

 
    if ($result->num_rows == 1) {

        $_SESSION['email'] = $email;
        header("Location: index.php");
    } else {
 
        $_SESSION['error'] = "Credenciales incorrectas. Por favor, inténtalo de nuevo.";
        header("Location: index.php");
    }
} else {

    header("Location: index.php");
}
?>
