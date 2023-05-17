<?php
    include 'conexion.php';
    $sentencia =  "SELECT  id, nombre, apellido, cedula FROM usuarios";
    $query = mysqli_query($conexion, $sentencia);
    
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
            <tr>
				<td>Anna Müller   1</td>
				<td>anna.mueller@gmail.com</td>
				<td>0123456789</td>
				<td>99 Eur</td>
			</tr>
                <?php
                    while ($datos = mysql_fetch_array($query)) {
                        
                        $id = $datos['id'];
                        echo $id;
                        $nombre = $datos["nombre"];
                        $apellido = $datos['apellido'];
                        $cedula = $datos['cedula'];
                    ?>
                        <tr>
                            <td>Anna Müller</td>
                            <td>anna.mueller@gmail.com</td>
                            <td>0123456789</td>
                            <td>99 Eur</td>
                        </tr>'
                    <?php
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