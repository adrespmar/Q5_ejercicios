<?php
$servidor = "localhost";
$userBD = "root";
$passwdBD = "qwe_123";
$nomBD = "biblioteca";

// Crear conexión a la base de datos
$conn = mysqli_connect($servidor, $userBD, $passwdBD, $nomBD);

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>

