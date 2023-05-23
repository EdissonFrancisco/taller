<?php
	session_start();
	// include 'logica/Cliente.php';
	// require 'logica/TelCliente.php';

	if (isset($_GET["sesion"]) && $_GET["sesion"] == 0) {
	    $_SESSION["id"] = "";
	}

    $error = 0;
    if (isset($_GET["error"])) {
    	$error = $_GET["error"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap y CSS -->
	<link rel="stylesheet" href="styles.css/normalize.css">
	<link rel="stylesheet" href="styles.css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Separate Popper and Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
	<!-- libreria de jquery y JavaScript -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<!-- estilos de iconos -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
	<!-- titulo e imagen pesta�a web -->
	<title>Elixir Celestial</title>    
	<link rel="icon" type="image/png" href="img/logoli.png">

	<script type="text/javascript">
		$(function () {
				$('[data-toggle="tooltip"]').tooltip()
			})
	</script>
</head>

<body class="fondo-loging">
	<div class="container w-100 bg-primary mt-5 bg-light rounded shadow">

		<div class="row align-items-stretch">

			<div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded"></div> <!-- coloco imagen con css -->

			<section class="col bg-white rounded-end form-box justify-content-center align-items-center ">

				<!-- nombre y encavezado -->
				<div class="text-center">
					<img src="img/logoli.png" width="100px">
					<h1>Tu Trago</h1>
				</div>
				<!-- botones login y registro -->
				<div class="butonbox">
					<div id="btn"></div>
					<button type="button" class="toggle-btn" id="btnLog">LOG IN</button>
					<button type="button" class="toggle-btn" id="btnReg">REGISTRO</button>
				</div>

				<div id="login" style="left: auto;">
					<!-- formulario login -->
					<form method="POST" class="input-group" action="manejoDatos/autenticar.php">
						<!-- contenido formulario login -->
						<div class="mb-4 input-group">
							<input type="email" name="correo" class="form-control" placeholder="Correo" required="required">
						</div>
						<div class="mb-4 input-group">
							<input type="password" name="clave" class="form-control" placeholder="Clave" required="required">
						</div>
						<div class="d-grid input-group">
							<button type="submit" class="btn btn-primary">Autenticar</button>
						</div>
						<!-- <div class="row my-2 input-group">
							<div class="col text-center">
								<a href="<?php //echo "index.php?pid=" . base64_encode("presentacion/recuperarClave.php") ?>">Recuperar clave</a>
							</div>
						</div> -->
					</form> <!-- fin contenido formulario -->
					<br><br><br>
					<!-- errores de ingreso -->
					<?php if ($error == 1) { ?>
						<script> var errores = '<?= $_GET["error"] ?>'; </script><!-- asigno variable de error a a variable java script -->
						<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
							<strong>Usuario o clave incorrectas</strong>
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
						<br>
					<?php } ?>
					<!-- fin errores ingreso -->
				</div><!-- fin formulario login -->

				<div id="registro">
					<!-- formulario registro -->
					<form method="POST" class="input-group" action="manejoDatos/registro.php">
						<!-- contenido formulario registro -->
						<div class="mb-4 input-group">
							<input type="text" name="nombre" class="form-control" placeholder="Nombre" required="required">
							<input type="text" name="apellido" class="form-control" placeholder="Apellido" required="required">
						</div>
						<div class="mb-4 input-group">
							<input type="number" name="cedula" class="form-control" placeholder="cedula" required="required">
							<input type="text" name="direccion" class="form-control" placeholder="direccion" required="required">
							<input type="text" name="telefono" class="form-control" placeholder="TEL - CEL" required="required">
						</div>
						<div class="mb-4 input-group">
							<input type="email" name="correo" class="form-control" placeholder="Correo" required="required">
							<input type="password" name="clave" class="form-control" placeholder="Clave" required="required">
						</div>
						<div class="d-grid input-group">
							<button type="submit" class="btn btn-primary">REGISTRARSE</button>
						</div>
					</form> <!-- fin contenido formulario -->
					<br><br><br>
					<!-- errores de registro -->
					<?php if ($error == 2) { /*error de correo ya existente*/ ?>
						<script>
							errores = '<?= $_GET["error"] ?>';
						</script><!-- asigno variable de error a a variable java script -->
						<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
							<strong>Correo ya se encuentra registrado</strong>
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div><br>
					<?php } elseif ($error == 3) { //cuenta registrada con exito ?>
						<script>
							errores = '<?= $_GET["error"] ?>';
						</script><!-- asigno variable de error a a variable java script -->
						<div class="alert alert-primary alert-dismissible fade show text-center" role="alert" name="error6">
							<strong>cuenta creada con exito</strong>
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div><br>
					<?php } ?>
					<!-- fin errores de registro -->
				</div>
			</section>
		</div>
	</div>

	<script src='javaScript.js'></script>

</body>

</html>