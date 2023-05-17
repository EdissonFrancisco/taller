<?php

if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $opcion = $_REQUEST['operacion'];

    $res = 0;

    switch ($opcion) {
        case 'suma':
            $res = $num1 + $num2;
            echo "la suma es: " . $res;
            break;
        case 'resta':
            $res = $num1 - $num2;
            echo "la resta es: " . $res;
            break;
        case 'multiplicacion':
            $res = $num1 * $num2;
            echo "la multiplicacion es: " . $res;
            break;
        case 'divicion':
            if($num1 == 0 || $num2 == 0) {
                echo 'La divicion por cero no esta definida';
            } else {
                $res = $num1 / $num2;
                echo "la divicion es: " . $res;
            }
            break;
        default:
            echo 'seleccione una opcion';
    }
}

if (isset($_POST['edad'])) {
    $edad = $_POST['edad'];
    if ($edad >= 18) {
        echo 'su edad es: ' . $edad . '<br>';
        echo 'Es mayor de edad';
    } else {
        echo 'su edad es: ' . $edad . '<br>';
        echo 'No es mayor de edad';
    }
}

if (isset($_GET['nombre']) && isset($_GET['apellido']) && isset($_GET['cedula'])) {
    $nom = $_GET['nombre'];
    $ape = $_GET['apellido'];
    $cedula = $_GET['cedula'];

    echo 'Nombre: ' . $nom . '<br>Apellido: ' . $ape . '<br>Cedula: ' . $cedula;
}

if (isset($_GET['fechana'])) {
    $fecha = $_GET['fechana'];
    $dias = explode("-", $fecha);
    $dias = mktime(0, 0, 0, $dias[1], $dias[2], $dias[0]);
    $edad = (int)((time() - $dias) / 31556926);

    // Dar formato a la fecha
    $fechaFormateada = date('d-m-Y', $dias);

    if ($edad >= 18) {
        echo 'Su fecha de nacimiento es: ' . $fechaFormateada . '<br>';
        echo 'Su edad es: ' . $edad . ' por tanto: Es mayor de edad';
    } else {
        echo 'Su fecha de nacimiento es: ' . $fechaFormateada . '<br>';
        echo 'Su edad es: ' . $edad . ' por tanto: No es mayor de edad';
    }
}
?>
<form action="index.html">
    <div>
        <input type="submit" value="volver">
    </div>
</form>