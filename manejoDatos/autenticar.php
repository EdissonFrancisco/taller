<?php 
    session_start();
    require_once '../logica/Cliente.php';

    $correo = $_POST["correo"];
    $clave = $_POST["clave"];

    $cliente = new Cliente("","","","","", $correo, $clave, "");
                
    if ($cliente -> autentica()) {
        $_SESSION["id"] = $cliente -> getIdCliente();
        if (isset($_SESSION["id"])) {
            header("Location: sessionCliente.php");
        }        
    } else {
        header("Location: ../index.php?error=1");//error de correo o clave
    }
