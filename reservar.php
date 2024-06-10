<?php
session_start(); 


if (!isset($_SESSION['email'])) {
 
    header("Location: index.php");
    exit(); 
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require 'conexionbd.php';


    $fecha = $_POST['fecha_reserva'];
    $hora = $_POST['hora_reserva'];
    $numero_personas = $_POST['numero_personas'];
    $nombre = $_POST['nombre_cliente_reserva'];

    

 
    $sql = "INSERT INTO reservas (fecha_reserva, hora_reserva, numero_personas, nombre_cliente_reserva) VALUES ('$fecha', '$hora', '$numero_personas', '$nombre')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {

        echo "Error: " . $sql . "<br>" ;
    }
} else {
    header("Location: reserva.html");
}
?>