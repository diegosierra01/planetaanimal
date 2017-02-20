<?php
session_start();

$guardado=0;

if ($_SESSION['propietario'])
{
	$guardado++;
	if ($_SESSION['fmascota'])
	{
		$guardado++;
		if ($_SESSION['cardiovascular'])
			$guardado++;
		else
			header("location: ../servicios/nuevo-paciente/cardiovascular.html"); 

		if ($_SESSION['consulta'])
			$guardado++;
		else
			header("location: ../servicios/nuevo-paciente/consulta.html"); 

		if ($_SESSION['digestivo'])
			$guardado++;
		else
			header("location: ../servicios/nuevo-paciente/digestivo.html"); 

		if ($_SESSION['ganglios'])
			$guardado++;
		else
			header("location: ../servicios/nuevo-paciente/ganglios.html"); 

		if ($_SESSION['genitales'])
			$guardado++;
		else
			header("location: ../servicios/nuevo-paciente/genitales.html"); 

		if ($_SESSION['inspeccion'])
			$guardado++;
		else
			header("location: ../servicios/nuevo-paciente/inspeccion.html"); 

		if ($_SESSION['integumentario'])
			$guardado++;
		else
			header("location: ../servicios/nuevo-paciente/integumentario.html"); 

		if ($_SESSION['musculoesqueletico'])
			$guardado++;
		else
			header("location: ../servicios/nuevo-paciente/musculo-esqueletico.html"); 

		if ($_SESSION['nervioso'])
			$guardado++;
		else
			header("location: ../servicios/nuevo-paciente/nervioso.html");  

		if ($_SESSION['reflejos'])
			$guardado++;
		else
			header("location: ../servicios/nuevo-paciente/reflejos.html"); 

		if ($_SESSION['respiratorio'])
			$guardado++;
		else
			header("location: ../servicios/nuevo-paciente/respiratorio.html"); 

		if ($_SESSION['sentidos'])
			$guardado++;
		else
			header("location: ../servicios/nuevo-paciente/sentidos.html"); 

		if ($_SESSION['vacuna'])
			$guardado++;
		else
			header("location: ../servicios/nuevo-paciente/vacunas.html"); 
	}
	else
	header("location: ../servicios/nuevo-paciente/mascota.html");
}
else
	header("location: ../servicios/nuevo-paciente/propietario.php");



if ($guardado==15)
{
	$_SESSION['cedula']="";
	$_SESSION['nombre']="";
	$_SESSION['direccion']="";
	$_SESSION['celular']="";
	$_SESSION['telefono']="";
	$_SESSION['barrio']="";
	$_SESSION['mascota']="";
	$_SESSION['cardiovascular']=false;
	$_SESSION['consulta']=false;
	$_SESSION['digestivo']=false;
	$_SESSION['ganglios']=false;
	$_SESSION['genitales']=false;
	$_SESSION['inspeccion']=false;
	$_SESSION['integumentario']=false;
	$_SESSION['fmascota']=false;
	$_SESSION['musculoesquiletico']=false;
	$_SESSION['nervioso']=false;
	$_SESSION['propietario']=false;
	$_SESSION['reflejos']=false;
	$_SESSION['respiratorio']=false;
	$_SESSION['sentidos']=false;
	$_SESSION['vacuna']=false;
	header("location: ../servicios/nuevo-paciente/guardado.html");
}
?>