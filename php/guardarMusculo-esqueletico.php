<?php
session_start();
include_once "conexion.php";
$mascota=$_SESSION['mascota'];

$submaxilares=$_POST["submaxilares"];
$comSubmaxilares=$_POST["comSubmaxilares"];
$prescapulares=$_POST["prescapulares"];
$comPrescapulares=$_POST["comPrescapulares"];
$popliteos=$_POST["popliteos"];
$comPopliteos=$_POST["comPopliteos"];


 function insertar($valor,$comentario,$nombre,$tipo,$mascota)
 {
      if($tipo)      
        mysql_query("INSERT into evaluacioneso(ORGANO,MASCOTA,EVALUACION,COMENTARIO) VALUES((select id from organos where nombre='$nombre' AND aparato=16),$mascota,'$valor','$comentario')");
        
      if(!$tipo)
        mysql_query("INSERT into evaluacioness(MASCOTA,SINTOMA,EVALUACION,COMENTARIO) VALUES($mascota,(select id from sintomas where nombre='$nombre' AND aparato=16),'$valor','$comentario')");
      
  }

insertar($submaxilares,$comSubmaxilares,'SUBMAXILARES',true,$mascota);
insertar($prescapulares,$comPrescapulares,'PRESCAPULARES',true,$mascota);
insertar($popliteos,$comPopliteos,'POPLITEOS',true,$mascota);

$_SESSION['musculoesqueletico']=true;
if ($_SESSION['nervioso'])
	header("location: verificar-guardado.php");	
else
	header("location: ../servicios/nuevo-paciente/nervioso.html");
?>