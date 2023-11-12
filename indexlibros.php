<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Libros</title>
    <style>
        /* Agregar estilos CSS si es necesario */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: black;
            text-align: center; /* Centrar el texto */
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            padding: 8px;
            margin-bottom: 10px;
        }

        button {
            padding: 10px;
            background-color: orange;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: blue;
        }
    </style>
</head>
<body>

    <h1>Mostrar Libros por Puntuación</h1>

    <form action="" method="post">
        <label for="puntuacion">Puntuación:</label>
        <input type="text" id="puntuacion" name="puntuacion" required>

        <br>

        <button type="submit">Buscar Libros</button>
    </form>

    <?php
    // Incluir el archivo que contiene el código PHP
    include 'mostrarlibros.php';
    ?>

</body>
</html>

