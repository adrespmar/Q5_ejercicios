<?php
include 'cabecera.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Obtener datos del formulario
   $username = $_POST["username"];
   $password = $_POST["password"];


   // Realizar la autenticación (ajusta esto según tu método de autenticación)
   if ($username === "root" && $password === "qwe_123") {
       // Autenticación exitosa
       echo "Inicio de sesión exitoso. Redirigiendo a phpMyAdmin...";
       // Redirigir a phpMyAdmin después de 2 segundos
       header("refresh:2;url=http://localhost/phpmyadmin");
   } else {
       // Autenticación fallida
       echo "Nombre de usuario o contraseña incorrectos.";
   }
}
?>



