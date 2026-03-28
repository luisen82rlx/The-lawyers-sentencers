<?php
// Incluir tu archivo de conexión
include("conexion.php");

// Verificar que se recibieron los datos
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nombre   = $_POST['nombre'] ?? '';
    $email    = $_POST['email'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $mensaje  = $_POST['mensaje'] ?? '';

    // Evitar problemas con caracteres
    $nombre   = mysqli_real_escape_string($conn, $nombre);
    $email    = mysqli_real_escape_string($conn, $email);
    $telefono = mysqli_real_escape_string($conn, $telefono);
    $mensaje  = mysqli_real_escape_string($conn, $mensaje);

    // Query para guardar datos
    $sql = "INSERT INTO contactos (nombre, email, telefono, mensaje)
            VALUES ('$nombre', '$email', '$telefono', '$mensaje')";

    if (mysqli_query($conn, $sql)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Error al guardar el mensaje: " . mysqli_error($conn);
    }

    mysqli_close($conn);

} else {
    echo "Método no permitido.";
}
?>