<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/animate.css">
	<title>Centro Medico Veterinario Planeta Animal Tunja</title>
</head>
<body>
	<nav class='se-gris padding-largo text-center'>
		<ul class="no-lista inline-block azul">
			<li class="col-md-3">
				<a href="index.html" class="verde pacifico">Planeta Animal</a>
			</li>
			<li class="col-md-3">
				<a href="servicios.php">Servicios</a>
			</li>
			<li class="col-md-3">
				<a href="contacto.html">Contacto</a>
			</li>
		</ul>
	</nav>

	<div class="alert alert-info text-center">
		<?php
			include_once "php/usuario.php";				
		?>
	</div>

	<section>
		<div class="text-center mediano">
			<h1 class="pacifico grande azul">Servicios</h1>	
			<p>Servicios de calidad</p>
			<div class="col-md-3 col-sm-4 inline-block">
				<article class="animated fadeIn">
					<a href="servicios/nuevo-paciente/verificar-propietario.html">
						<h2 class="pacifico">Nuevo Paciente</h2>
						<img src="imagenes/doctora.jpg" class="col-md-10 quitar-float col-xs-8">
					</a>
				</article>
				<article class="animated fadeIn">
					<a href="servicios/consulta-paciente/consulta.html">
						<h2 class="pacifico">Consultar Paciente</h2>
						<img src="imagenes/animales.jpg" class="col-md-10 quitar-float col-xs-8">
					</a>
				</article>
			</div>
			<div class="col-md-6 col-sm-4 inline-block">
				<article class="animated fadeIn">
					<a href="servicios/nueva-consulta/constantes.html">
						<h2 class="pacifico">Nueva Consulta</h2>
						<img src="imagenes/doctor.jpg" class="col-md-10 quitar-float col-xs-8">
					</a>
				</article>	
			</div>
			<div class="col-md-3 col-sm-4 inline-block">
				<article class="animated fadeIn">
					<a href="servicios/generar-reporte/reporte.html">
						<h2 class="pacifico">Generar Reporte</h2>
						<img src="imagenes/vacuna-perro.jpg" class="col-md-10 quitar-float col-xs-8">
					</a>
				</article>
				<article class="animated fadeIn">
					<a href="php/salir.php">
						<h2 class="pacifico">Cerrar Sesion</h2>
						<img src="imagenes/salir.jpg" class="col-md-10 quitar-float col-xs-8">
					</a>
				</article>
			</div>
		</div>
	</section>
	<br><br>
</body>
</html>