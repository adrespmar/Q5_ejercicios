<?php
include 'cabecera.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Búsqueda</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $puntuacion = $_POST["puntuacion"];

    // Verificar si la puntuación es un número
    if (!empty($puntuacion) && is_numeric($puntuacion)) {
        // Crear la consulta
        $consulta = "SELECT * FROM libros WHERE puntuacion = $puntuacion";

        // Realizar la consulta
        $resultado = mysqli_query($conn, $consulta);

        // Verificar si hay resultados
        if ($resultado) {
            echo "<h2>Resultados de Búsqueda</h2>";
            echo "<table>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Autor</th>
                        <th>ISBN</th>
                        <th>Puntuación</th>
                        <th>Género</th>
                    </tr>";

            // Mostrar los libros uno por cada fila de la tabla
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>
                        <td>{$fila['id']}</td>
                        <td>{$fila['nombre']}</td>
                        <td>{$fila['autor']}</td>
                        <td>{$fila['isbn']}</td>
                        <td>{$fila['puntuacion']}</td>
                        <td>{$fila['genero']}</td>
                    </tr>";
            }

            echo "</table>";
        } else {
            echo "<p>Error en la consulta: " . mysqli_error($conn) . "</p>";
        }
    } else {
        echo "<p>La puntuación debe ser un número.</p>";
    }
}

// Cerrar la conexión
mysqli_close($conn);
?>

</body>
</html>

