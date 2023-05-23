<?php 
    session_start();

    include '../logica/Cliente.php';

    $clientes = new Cliente($_SESSION["id"]);
    $consulta = $clientes -> consultar();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css/normalize.css">
	<link rel="stylesheet" href="../styles.css/target.css">
    <title>Cliente</title>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="../img/logoli.png" alt="Logo de la marca">
        </div>
        <a class="btn" href="#"><button>Salir</button></a>
    </header>

    <main class="fondo container">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title">BIENVENIDO</p>
                    <p>Coloca el cursor aquí</p>
                </div>
                <div class="flip-card-back">
                    <p class="title">
                        <?php echo $clientes->getNombre() . "\n" . $clientes->getApellido(); ?>
                    </p>
                    <p>Este es tu inicio en la plataforma</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>