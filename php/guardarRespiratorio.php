<?php
session_start();
include_once "conexion.php";
$mascota=$_SESSION['mascota'];

$trufa=$_POST["trufa"];
$comTrufa=$_POST["comTrufa"];
$cavidad=$_POST["cavidad"];
$comCavidad=$_POST["comCavidad"];
$laringe=$_POST["laringe"];
$comLaringe=$_POST["comLaringe"];
$traquea=$_POST["traquea"];
$comTraquea=$_POST["comTraquea"];
$sonidos=$_POST["sonidos"];
$comSonidos=$_POST["comSonidos"];

$estornudo=$_POST["estornudo"];
$comEstornudo=$_POST["comEstornudo"];
$tos=$_POST["tos"];
$comTos=$_POST["comTos"];
$secresion=$_POST["secresion"];
$comSecresion=$_POST["comSecresion"];
$tumefaccion=$_POST["tumefaccion"];
$comTumefaccion=$_POST["comTumefaccion"];
$inspiratoria=$_POST["inspiratoria"];
$comInspiratoria=$_POST["comInspiratoria"];
$espiratoria=$_POST["espiratoria"];
$comEspiratoria=$_POST["comEspiratoria"];


 function insertar($valor,$comentario,$nombre,$tipo,$mascota)
 {
      if($tipo)      
        mysql_query("INSERT into evaluacioneso(ORGANO,MASCOTA,EVALUACION,COMENTARIO) VALUES((select id from organos where nombre='$nombre' AND aparato=11),$mascota,'$valor','$comentario')");
        
      if(!$tipo)
        mysql_query("INSERT into evaluacioness(MASCOTA,SINTOMA,EVALUACION,COMENTARIO) VALUES($mascota,(select id from sintomas where nombre='$nombre' AND aparato=11),'$valor','$comentario')");
      
  }


insertar($trufa,$comTrufa,'TRUFA',true,$mascota);
insertar($cavidad,$comCavidad,'CAVIDAD NASAL',true,$mascota);
insertar($laringe,$comLaringe,'LARINGE',true,$mascota);
insertar($traquea,$comTraquea,'TRAQUEA',true,$mascota);
insertar($sonidos,$comSonidos,'SONIDOS PULMONARES',true,$mascota);
insertar($estornudo,$comEstornudo,'ESTORNUDO',false,$mascota);
insertar($tos,$comTos,'TOS',false,$mascota);
insertar($secresion,$comSecresion,'SECRESION NASAL',false,$mascota);
insertar($tumefaccion,$comTumefaccion,'TUMEFACCION NASAL',false,$mascota);
insertar($espiratoria,$comEspiratoria,'DISNEA ESPIRATORIA',false,$mascota);
insertar($inspiratoria,$comInspiratoria,'DISNEA INSPIRATORIA',false,$mascota);

$_SESSION['respiratorio']=true;
if ($_SESSION['cardiovascular'])
	header("location: verificar-guardado.php");	
else
	header("location: ../servicios/nuevo-paciente/cardiovascular.html");
?>