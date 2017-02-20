<?php
session_start();
include_once "conexion.php";
$motivo=$_POST["motivo"];
$clinicos=$_POST["clinicos"];
$quirurgicos=$_POST["quirurgicos"];
$tratamientos=$_POST["tratamientos"];
$mascota=$_SESSION['mascota'];

$insert="INSERT into detallesa(ANTECEDENTE,MASCOTA,DESCRIPCION) VALUES (215,$mascota,'$motivo')";
mysql_query($insert);     
$insert="INSERT into detallesa(ANTECEDENTE,MASCOTA,DESCRIPCION) VALUES (216,$mascota,'$clinicos')";
mysql_query($insert);
$insert="INSERT into detallesa(ANTECEDENTE,MASCOTA,DESCRIPCION) VALUES (217,$mascota,'$quirurgicos')";
mysql_query($insert);
$insert="INSERT into detallesa(ANTECEDENTE,MASCOTA,DESCRIPCION) VALUES (218,$mascota,'$tratamientos')";
mysql_query($insert);

$_SESSION['consulta']=true;
if ($_SESSION['digestivo'])
	header("location: verificar-guardado.php");	
else
	header("location: ../servicios/nuevo-paciente/digestivo.html");
?>