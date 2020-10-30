<?php

	$template = new Template();
	class Template
	{

		public function __construct()
		{
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administracion de estudiantes | Codigo facilito</title>
	<link rel="stylesheet" type="text/css" href="<?php echo URL ?>Views/template/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL ?>Views/template/css/general.css">
</head>
<body>
	<nav class="navbar  navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Administracion de estudiantes</a>
				<button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
				<ul class="nav navbar-nav navbar-light">
					<li class="nav-item nav-link"><a href="<?php echo URL; ?>">Inicio</a></li>
					<li class="nav-item nav-link dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Estudiantes</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo URL; ?>estudiantes">Listado</a></li>
							<li><a href="<?php echo URL; ?>estudiantes/agregar">Agregar</a></li>
						</ul>
					</li>

					<li class="nav-item nav-link dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Secciones</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo URL; ?>secciones">Listado</a></li>
							<li><a href="<?php echo URL; ?>secciones/agregar">Agregar</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="https://www.codigofacilito.com/">Codigo Facilito</a></li>
				</ul>

			</div>

		</div>
	</nav>

<?php
		}

		public function __destruct()
		{
?>
	<footer class="narbar-fixed-bottom">
		Todos los derechos reservados<br/>
		Jacuve | web 
	</footer>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="<?php echo URL; ?>Views/template/js/bootstrap.min.js"></script>
</body>
</html>
<?php
		}

	}