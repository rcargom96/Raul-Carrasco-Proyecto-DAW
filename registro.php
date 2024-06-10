<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require 'conexionbd.php';

    $nombre_usuario = $_POST['nombre_usuario'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $telefono = $_POST['telefono'];



    $sql = "INSERT INTO usuarios (nombre_usuario, email, contrasena, telefono) VALUES ('$nombre_usuario', '$email', '$contrasena', '$telefono')";

    if ($conn->query($sql) === TRUE) {

        header("Location: index.php");
    } else {
 
        echo "Error: " . $sql . "<br>" ;
    }
} else {

    header("Location: index.php");
}
?>
