<?php
session_start();
include_once "conexion.php";
$cedula=floatval($_POST["cedula"]);

$cedulaexist=mysql_query("SELECT cedula from duenos where CEDULA=$cedula");
if(mysql_num_rows($cedulaexist)==0)
{
	$_SESSION['cedula'] = $cedula;	
	header("location: ../servicios/nuevo-paciente/propietario.php");
}
else
{
	$consulta=mysql_query("SELECT * from duenos where CEDULA=$cedula");
	$propietario=mysql_fetch_assoc($consulta);
	$_SESSION['cedula']=$propietario['CEDULA'];
	$_SESSION['nombre']=$propietario['NOMBRE'];
	$_SESSION['direccion']=$propietario['DIRECCION'];
	$_SESSION['celular']=$propietario['CELULAR'];
	$_SESSION['telefono']=$propietario['TELEFONO'];
	$_SESSION['barrio']=$propietario['BARRIO'];
	$_SESSION['propietario']=true;
	header("location: ../servicios/nuevo-paciente/mascota.html"); 
} 	

?>