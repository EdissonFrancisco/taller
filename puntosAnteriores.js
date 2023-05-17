<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css/normalize.css">
    <link rel="stylesheet" href="styles.css/style.css">
    <title>TALLER</title>
</head>
<body>
    <!-- form calculadora -->
    <div>
        <h1>Calculadora</h1>
        <form action="phpTaller.php" method="post">
            <div>
                <input class="enjoy-css" name="num1" placeholder="numero 1" />
                <input class="enjoy-css" name="num2" placeholder="numero 2" />
            </div>
            <div>
                <select name="operacion">
                    <option value="suma">Suma</option>
                    <option value="resta" selected>Resta</option>
                    <option value="multiplicacion">Multiplicacion</option>
                    <option value="divicion">Divicion</option>
                </select>
            </div>
            <div>
                <input type="submit" class="button" value="enviar">
            </div>
        </form>
    </div>
    

    <!-- form edad -->
    <div>
        <h1>Edad</h1>
        <form action="phpTaller.php" method="post">
            <div>
                <input class="enjoy-css" name="edad" placeholder="Ingresa tu edad " />
            </div>
            <div>
                <input type="submit" class="button" value="enviar">
            </div>
        </form>
    </div>

    <!-- nombre apellido cedula  -->
    <div>
        <h1>Datos personales</h1>
        <form action="phpTaller.php" method="GET">
            <div>
                <input class="enjoy-css" name="nombre" placeholder="Ingresa tu edad " />
                <input class="enjoy-css" name="apellido" placeholder="Ingresa tu edad " />
                <input class="enjoy-css" name="cedula" placeholder="Ingresa tu edad " />
            </div>
            <div>
                <div>
                    <input type="submit" class="button" value="enviar">
                </div>
            </div>
        </form>
    </div>

    <!-- Calculo de edad con fecha -->
    <div>
        <h1>Calculo de edad</h1>
        <form action="phpTaller.php" method="get">
            <div>
                <label for="fecha">Fecha nacimiento</label>
                <input type="date" name="fechana">
            </div>
            <div>
                <input type="submit" class="button" value="enviar">
            </div>
        </form>
    </div>

</body>
</html>