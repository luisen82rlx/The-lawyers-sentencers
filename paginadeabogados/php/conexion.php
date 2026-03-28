<?php

$server = "localhost";
$username = "root";
$password = "";     
$db = "bufete";

$conexion = mysqli_connect($server, $username, $password, $db);

if (!$conexion) {
    die("❌ Error de conexión: " . mysqli_connect_error());
} else {
     echo "conectado exitosamente";

}











?>