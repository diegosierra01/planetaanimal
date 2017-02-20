<?php
session_start();
include_once "conexion.php";
$mascota=$_SESSION['mascota'];

$posicionamiento=$_POST["posicionamiento"];
$locPosicionamiento=$_POST["locPosicionamiento"];
$reaccion=$_POST["reaccion"];
$locReaccion=$_POST["locReaccion"];

$depresion=$_POST["depresion"];
$locDepresion=$_POST["locDepresion"];
$estupor=$_POST["estupor"];
$locEstupor=$_POST["locEstupor"];
$coma=$_POST["coma"];
$locComa=$_POST["locComa"];

 function insertar($valor,$comentario,$nombre,$tipo,$mascota)
 {
      if($tipo)      
        mysql_query("INSERT into evaluacioneso(ORGANO,MASCOTA,EVALUACION,COMENTARIO) VALUES((select id from organos where nombre='$nombre' AND aparato=18),$mascota,'$valor','$comentario')");
        
      if(!$tipo)
        mysql_query("INSERT into evaluacioness(MASCOTA,SINTOMA,EVALUACION,COMENTARIO) VALUES($mascota,(select id from sintomas where nombre='$nombre' AND aparato=18),'$valor','$comentario')");
      
  }


insertar($posicionamiento,$locPosicionamiento,'POSICIONAMIENTO TACTIL Y VISUAL',true,$mascota);
insertar($reaccion,$locReaccion,'REACCION TONICA DEL CUELLO',true,$mascota);
insertar($depresion,$locDepresion,'DEPRESION',false,$mascota);
insertar($estupor,$locEstupor,'ESTUPOR',false,$mascota);
insertar($coma,$locComa,'COMA',false,$mascota);

$_SESSION['nervioso']=true;
if ($_SESSION['inspeccion'])
	header("location: verificar-guardado.php");	
else
	header("location: ../servicios/nuevo-paciente/inspeccion.html");
?>