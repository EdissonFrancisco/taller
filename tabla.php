<?php
    include 'conexion.php';
    $db = conectarDB();
    $sentencia =  "SELECT  id, nombre, apellido, cedula	FROM usuarios";
    $query = mysqli_query($db, $sentencia);
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css/normalize.css">
    <link rel="stylesheet" href="styles.css/style.css">

    <title>Tabla Dinamica</title>
</head>

<body>
    <section class="container">

        <h2>Tabla con busqueda dinamica</h2>

        <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtrer" />

        <table class="order-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cedula</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($datos = mysqli_fetch_assoc($query)) {
                        $id = $datos['id'];
                        $nombre = $datos["nombre"];
                        $apellido = $datos['apellido'];
                        $cedula = $datos['cedula'];
                        echo '
                        <tr>
                            <td>' . $id . '</td>
                            <td>' . $nombre . '</td>
                            <td>' . $apellido . '</td>
                            <td>' . $cedula . '</td>
                        </tr>';
                    }
                ?>
            </tbody>
        </table>
        <!-- follow me template -->
        <div class="made-with-love">
            <p>GitHub</p>
            <img src="img/github.png" alt="imagen del logo github">
            <p>by</p>
            <a target="_blank" href="https://codepen.io/nikhil8krishnan">Edisson Acero</a>
        </div>

    </section>

    <script src="javaScript.js"></script>
</body>

</html>