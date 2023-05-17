<?php
    $conexion = new mysqli("localhost", "root", "", "my_proyecto");
    if ($conexion->connect_errno) {
        echo "fallos de conexion";
        exit();
    } else {
        echo "Conexxion exitosa";
    }

?>

