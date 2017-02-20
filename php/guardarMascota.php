<?php
session_start();
include_once "conexion.php";
$cedula=$_SESSION['cedula'];
$resultado=mysql_query("SELECT MAX(ID) from mascotas");
$id=floatval(mysql_result($resultado, 0))+1;
$_SESSION['mascota']=$id;
$raza=$_POST["raza"];
$nombre=$_POST["nombre"];
$genero=$_POST["genero"];
$edad=floatval($_POST["edad"]);
$color=$_POST["color"];
$peso=floatval($_POST["peso"]);
$fecha=date("Y-n-j");
$fechaauxiliar=mysql_query("SELECT fechahistoria from mascotas where ID=(SELECT (MAX(ID)) from mascotas)");
$fechahistoria=mysql_result($fechaauxiliar, 0);
$razaauxiliar=mysql_query("SELECT ID from razas where nombre='$raza'");
$razaactual=floatval(mysql_result($razaauxiliar, 0));
$turno = 1;
if($fecha!=$fechahistoria)
{
  $turno = 1;
}else{
  ++$turno;
}

$insert="INSERT into mascotas(ID,RAZA,CEDULA,NOMBRE,GENERO,EDAD,COLOR,PESO,FECHAHISTORIA,TURNO) VALUES ($id,$razaactual,$cedula,'$nombre','$genero',$edad,'$color',$peso,'$fecha',$turno)";
mysql_query($insert);

$_SESSION['fmascota']=true;
if ($_SESSION['consulta'])
	header("location: verificar-guardado.php");	
else
	header("location: ../servicios/nuevo-paciente/consulta.html");
?>