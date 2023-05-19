<?php 
    require '../logica/Cliente.php';

    $correo = $_POST["correo"];
    $clave = $_POST["clave"];

    $cliente = new Cliente("","","","","", $correo, $clave, "");
                
    if ($cliente -> autentica()) {
        header("Location: ../sessionCliente.php");
    } else {
        header("Location: ../index.php?error=1");//error de correo o clave
    }
