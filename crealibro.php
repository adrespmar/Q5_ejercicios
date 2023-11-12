<!-- crealibro.php -->
<?php
include 'cabecera.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $autor = $_POST["autor"];
    $isbn = $_POST["isbn"];
    $puntuacion = $_POST["puntuacion"];
    $genero = $_POST["genero"];

    $conn = mysqli_connect($servidor, $userBD, $passwdBD, $nomBD);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Consulta para verificar si ya existe un libro con el mismo ISBN
    $consulta_existencia = "SELECT * FROM libros WHERE isbn='$isbn'";
    $resultado_existencia = mysqli_query($conn, $consulta_existencia);

    if (mysqli_num_rows($resultado_existencia) > 0) {
        echo "Ya existe un libro con el mismo ISBN. No se puede añadir.";
    } else {
        // Consulta para insertar el nuevo libro
        $consulta_insertar = "INSERT INTO libros (id, nombre, autor, isbn, puntuacion, genero) VALUES ('$id', '$nombre', '$autor', '$isbn', '$puntuacion', '$genero')";

        if (mysqli_query($conn, $consulta_insertar)) {
            echo "Libro añadido correctamente.";
        } else {
            echo "Error al añadir el libro: " . mysqli_error($conn);
        }
    }

    // Cerrar la conexión
    mysqli_close($conn);
}
?>