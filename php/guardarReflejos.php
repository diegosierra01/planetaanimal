<?php
session_start();
include_once "conexion.php";
$mascota=$_SESSION['mascota'];

$bicipital=$_POST["bicipital"];
$triceps=$_POST["triceps"];
$flexor1=$_POST["flexor1"];

$flexor2=$_POST["flexor2"];
$patelar=$_POST["patelar"];
$tibial=$_POST["tibial"];
$gastronemio=$_POST["gastronemio"];

$extensor=$_POST["extensor"];
$superficial=$_POST["superficial"];
$profunda=$_POST["profunda"];
$anal=$_POST["anal"];
$panicular=$_POST["panicular"];
$coccigeo=$_POST["coccigeo"];
$miccion=$_POST["miccion"];

 function insertar($posicion,$valor,$miembro,$mascota)
 {
 	mysql_query("INSERT into reflejos(MIEMBRO,MASCOTA,REFLEJO) VALUES((select id from miembros where nombre='$miembro' AND posicion IN(select id from posiciones where posicion='$posicion')),$mascota,$valor)");
  }

insertar('ANTERIOR',$bicipital,'BICIPITAL',$mascota);
insertar('ANTERIOR',$triceps,'TRICEPS',$mascota);
insertar('ANTERIOR',$flexor1,'FLEXOR',$mascota);

insertar('POSTERIOR',$flexor2,'FLEXOR',$mascota);
insertar('POSTERIOR',$patelar,'PATELAR',$mascota);
insertar('POSTERIOR',$tibial,'TIBIAL CRANEAL',$mascota);
insertar('POSTERIOR',$gastronemio,'GASTRONEMIO',$mascota);

insertar('OTRO',$extensor,'EXTENSOR CRUZADO',$mascota);
insertar('OTRO',$superficial,'SENSIBILIDAD SUPERFICIAL',$mascota);
insertar('OTRO',$profunda,'SENSIBILIDAD PROFUNDA',$mascota);
insertar('OTRO',$anal,'REFLEJO ANAL',$mascota);
insertar('OTRO',$panicular,'PANICULAR',$mascota);
insertar('OTRO',$coccigeo,'COCCIGEO',$mascota);
insertar('OTRO',$miccion,'R.MICCION',$mascota);

$_SESSION['reflejos']=true;
if ($_SESSION['sentidos'])
	header("location: verificar-guardado.php");	
else
	header("location: ../servicios/nuevo-paciente/sentidos.html");
?>