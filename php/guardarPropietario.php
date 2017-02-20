<?php
include_once "conexion.php";
$cedula=floatval($_POST["cedula"]);
$nombre=$_POST["nombre"];
$direccion=$_POST["direccion"];
$celular=floatval($_POST["celular"]);
$telefono=floatval($_POST["telefono"]);
$barrio=$_POST["barrio"];

mysql_query("INSERT INTO duenos(CEDULA,NOMBRE,DIRECCION,CELULAR,TELEFONO,BARRIO) VALUES($cedula,'$nombre','$direccion',$celular,$telefono,'$barrio')");

$_SESSION['propietario']=true;
if ($_SESSION['fmascota'])
	header("location: verificar-guardado.php");	
else
	header("location: ../servicios/nuevo-paciente/mascota.html");
	
?>