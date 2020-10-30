<?php

	$template = new Template();
	class Template
	{

		public function __constructor()
		{
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administracion de estudiantes | Codigo facilito</title>
	<link rel="stylesheet" href="<?php echo URL ?>Views/template/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo URL ?>Views/template/css/general.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Administracion de estudiantes</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse">
				<ul class"nav navbar-nav">
					<li><a href="<?php echo URL; ?>">Inicio</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-goggle="dropdown" role="button" aria-expanded="false">Estudiantes</a>
						<ul>
							<li><a href="<?php echo URL; ?>estudiantes">Listado</a></li>
							<li><a href="<?php echo URL; ?>estudiantes/agregar">Agregar</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-goggle="dropdown" role="button" aria-expanded="false">Secciones</a>
						<ul>
							<li><a href="<?php echo URL; ?>secciones">Listado</a></li>
							<li><a href="<?php echo URL; ?>secciones/agregar">Agregar</a></li>
						</ul>
					</li>
				</ul>
			</div>

		</div>
	</nav>

<?php
		}

		public function __destruct()
		{
?>
</body>
</html>
<?php
		}

	}