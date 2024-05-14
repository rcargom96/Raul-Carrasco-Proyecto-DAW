<?php
session_start(); 


if (!isset($_SESSION['email'])) {
 
    header("Location: index.php");
    exit(); 
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require 'conexionbd.php';


    $fecha = $_POST['fecha_reserva'];
    $hora = $_POST['numero_personas'];
    $numero_personas = $_POST['numero_personas'];
    $nombre = $_POST['nombre_cliente_reserva'];

    // Obtener el ID del usuario que ha hecho login 
    $email = $_SESSION['email'];
    $sql = "SELECT id FROM usuarios WHERE email='$email'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $usuario_id = $row['id'];

 
    $sql = "INSERT INTO reservas (usuario_id, fecha_reserva, hora_reserva, numero_personas, nombre_cliente_reserva) VALUES ('$usuario_id', '$fecha', '$hora', '$numero_personas', '$nombre')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {

        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    header("Location: reserva.html");
}
?>
