<?php 
    session_start();
    require_once 'logica/Cliente.php';
    $clientes = new Cliente($_SESSION["id"]);
    $clientes -> consultar();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css/normalize.css">
	<link rel="stylesheet" href="styles.css/target.css">
    <title>Document</title>
</head>
<body>
    <main class="fondo container">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title">BIENBENIDO</p>
                    <p></p>
                </div>
                <div class="flip-card-back">
                    <p class="title">
                        <?php echo $clientes -> getNombre() . "\n" . $clientes -> getApellido(); ?>
                    </p>
                    <p>clik me</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>