<?php 
    require_once '../logica/Cliente.php';

    $correo = $_POST["correo"];
    $clave = $_POST["clave"];

    $cliente = new Cliente("","","","","", $correo, $clave, "");
                
    if ($cliente -> autentica()) {
        $_SESSION["id"] = $cliente -> getIdCliente();
        header("Location: ../sessionCliente.php");
    } else {
        header("Location: ../index.php?error=1");//error de correo o clave
    }
