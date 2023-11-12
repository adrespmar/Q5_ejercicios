<?php

include 'cabecera.php';

//Crear conexión a la base de datos
$conn = mysqli_connect($servidor, $userBD, $passwdBD, $nomBD);

//Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión establecida";

//Ejecuta consulta de base de datos
$sql = "SELECT * FROM libros";
$resultado = mysqli_query($conn, $sql);

//Verifica consulta si tiene resultados
if (mysqli_num_rows($resultado) > 0) {
    while($fila = mysqli_fetch_assoc($resultado)) {
        echo " ID: " . $fila["id"] . " - Nombre: " . $fila["nombre"] . " - Autor: " . $fila["autor"] . " - ISBN: " . $fila["isbn"] . " - Puntuacion: " . $fila["puntuacion"] . " - Genero: " . $fila["genero"]."<br>";

    }
} else {
    //Si la consulta no tiene resultados
    echo "Sin resultados";
}

mysqli_close($conn);
//prueba!!

//header("Location: http://localhost/phpmyadmin");
//exit;//

//mysqli_select_db($conn, "biblioteca");
?>