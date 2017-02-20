<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">	
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
	<script type="text/javascript" src="http://getbootstrap.com/dist/js/bootstrap.js"></script>
	<link rel="stylesheet" href="../../css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../../css/animate.css">
	<link rel="stylesheet" href="../../css/number.css">
	<title>Centro Medico Veterinario Planeta Animal Tunja</title>
</head>
<body>
	<nav class='se-gris padding-largo text-center'>
		<ul class="no-lista inline-block azul">
			<li class="col-md-3">
				<a href="../../index.html" class="verde pacifico">Planeta Animal</a>
			</li>
			<li class="col-md-3">
				<a href="../../servicios.php">Servicios</a>
			</li>
			<li class="col-md-3">
				<a href="../../contacto.html">Contacto</a>
			</li>
		</ul>
	</nav>


	<nav role="navigation" class="navbar navbar-default">
		<div class="navbar-header">
			<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>			
		</div>
		<div id="navbarCollapse" class="collapse navbar-collapse">
			<ul class="nav nav-tabs" role="navigation">
				<li class="active"><a href="propietario.php">Propietario</a></li>
				<li><a href="mascota.html">Mascota</a></li>
				<li><a href="consulta.html">Consulta</a></li>
				<li><a href="digestivo.html">Sistema digestivo</a></li>
				<li><a href="respiratorio.html">Sistema respiratorio</a></li>
				<li><a href="cardiovascular.html">Sistema cardiovascular</a></li>
				<li><a href="integumentario.html">Sistema integumentario</a></li>
				<li><a href="musculo-esqueletico.html">Sistema musculo-esquelético</a></li>
				<li><a href="nervioso.html">Sistema nervioso</a></li>
				<li><a href="inspeccion.html">Inspección</a></li>
				<li><a href="reflejos.html">Reflejos espinales</a></li>
				<li><a href="sentidos.html">Organos de los sentidos</a></li>
				<li><a href="ganglios.html">Ganglios linfáticos</a></li>
				<li><a href="genitales.html">Genitales</a></li>
				<li><a href="vacunas.html">Vacunas</a></li>
			</ul>
		</div>
	</nav>

	

	<div class="container">
		<div class="page-header">
			<h1>Datos generales <small> Propietario</small></h1>
		</div>

		<form class="form-horizontal" method="post" action="../../php/guardarPropietario.php">
			<div class="form-group">
				<label class="control-label col-xs-3">Nombre:</label>
				<div class="col-xs-9">
					<input type="text" class="form-control" placeholder="Nombre" required name="nombre" value="<?php session_start(); echo $_SESSION['nombre']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-3" >Cédula:</label>
				<div class="col-xs-9">
					<input type="number" class="form-control" placeholder="Cédula" required name="cedula" value="<?php echo $_SESSION['cedula']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-3" >Teléfono:</label>
				<div class="col-xs-9">
					<input type="number" class="form-control" placeholder="Télefono" name="telefono" value="<?php echo $_SESSION['telefono']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-3" >Celular:</label>
				<div class="col-xs-9">
					<input type="number" class="form-control" placeholder="Celular" required name="celular" value="<?php echo $_SESSION['celular']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-3">Barrio:</label>
				<div class="col-xs-9">
					<input type="text" class="form-control" placeholder="Barrio" required name="barrio" value="<?php echo $_SESSION['barrio']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-3">Dirección:</label>
				<div class="col-xs-9">
					<textarea rows="3" class="form-control" placeholder="Dirección" required name="direccion"><?php echo $_SESSION['direccion']; ?></textarea>
				</div>
			</div>
			<br>
			<div class="form-group">
				<div class="col-xs-offset-3 col-xs-9">
					<input type="reset" class="btn btn-default" value="Limpiar">
					<input type="submit" class="btn btn-primary" value="Guardar">
				</div>
			</div>
		</form>
	</div>
	<br><br>
</body>