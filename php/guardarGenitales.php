<?php
session_start();
include_once "conexion.php";
$mascota=$_SESSION['mascota']; 

$testiculos=$_POST["testiculos"];
$comTesticulos=$_POST["comTesticulos"];
$prepuciopene=$_POST["prepucio-pene"];
$comPrepuciopene=$_POST["comPrepucio-pene"];
$prostata=$_POST["prostata"];
$comProstata=$_POST["comProstata"];
$vulva=$_POST["vulva"];
$comVulva=$_POST["comVulva"];
$vagina=$_POST["vagina"];
$comVagina=$_POST["comVagina"];
$utero=$_POST["utero"];
$comUtero=$_POST["comUtero"];

function insertar($valor,$comentario,$nombre,$tipo,$mascota)
 {
      if($tipo)      
        mysql_query("INSERT into evaluacioneso(ORGANO,MASCOTA,EVALUACION,COMENTARIO) VALUES((select id from organos where nombre='$nombre' AND aparato=13),$mascota,'$valor','$comentario')");
        
      if(!$tipo)
        mysql_query("INSERT into evaluacioness(MASCOTA,SINTOMA,EVALUACION,COMENTARIO) VALUES($mascota,(select id from sintomas where nombre='$nombre' AND aparato=13),'$valor','$comentario')");
      
  }

insertar($testiculos,$comTesticulos,'TESTICULOS',true,$mascota);
insertar($prepuciopene,$comPrepuciopene,'PREPUCIO Y PENE',true,$mascota);
insertar($prostata,$comProstata,'PROSTATA',true,$mascota);
insertar($vulva,$comVulva,'VULVA',true,$mascota);
insertar($vagina,$comVagina,'VAGINA',true,$mascota);
insertar($utero,$comUtero,'UTERO',true,$mascota);
 
$_SESSION['genitales']=true;
if ($_SESSION['vacuna'])
	header("location: verificar-guardado.php");	
else
	header("location: ../servicios/nuevo-paciente/vacunas.html");
?>