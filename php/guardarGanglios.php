<?php
session_start();
include_once "conexion.php";
$mascota=$_SESSION['mascota'];

$pelaje=$_POST["pelaje"];
$comPelaje=$_POST["comPelaje"];
$anales=$_POST["anales"];
$comAnales=$_POST["comAnales"];
$mamarias=$_POST["mamarias"];
$comMamarias=$_POST["comMamarias"];

$parasitos=$_POST["parasitos"];
$comParasitos=$_POST["comParasitos"];
$deshidratacion=$_POST["deshidratacion"];
$comDeshidratacion=$_POST["comDeshidratacion"];


 function insertar($valor,$comentario,$nombre,$tipo,$mascota)
 {
      if($tipo)      
        mysql_query("INSERT into evaluacioneso(ORGANO,MASCOTA,EVALUACION,COMENTARIO) VALUES((select id from organos where nombre='$nombre' AND aparato=15),$mascota,'$valor','$comentario')");
        
      if(!$tipo)
        mysql_query("INSERT into evaluacioness(MASCOTA,SINTOMA,EVALUACION,COMENTARIO) VALUES($mascota,(select id from sintomas where nombre='$nombre' AND aparato=15),'$valor','$comentario')");
      
  }

insertar($pelaje,$comPelaje,'PELAJE',true,$mascota);
insertar($anales,$comAnales,'GLANDULAS ANALES',true,$mascota);
insertar($mamarias,$comMamarias,'GLANDULAS MAMARIAS',true,$mascota);

insertar($parasitos,$comParasitos,'PARASITOS EXTERNOS',false,$mascota);
insertar($deshidratacion,$comDeshidratacion,'DESHIDRATACION',false,$mascota);

$_SESSION['ganglios']=true;
if ($_SESSION['genitales'])
	header("location: verificar-guardado.php");	
else
	header("location: ../servicios/nuevo-paciente/genitales.html");
?>