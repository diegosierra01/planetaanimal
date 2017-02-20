<?php
session_start();
include_once "conexion.php";
$mascota=$_SESSION['mascota'];

$vision=$_POST["vision"];
$comVision=$_POST["comVision"];
$parpados=$_POST["parpados"];
$comParpados=$_POST["comParpados"];
$nasolagrimal=$_POST["nasolagrimal"];
$comNasolagrimal=$_POST["comNasolagrimal"];
$esclerotica=$_POST["esclerotica"];
$comEsclerotica=$_POST["comEsclerotica"];
$cornea=$_POST["cornea"];
$comCornea=$_POST["comCornea"];
$iris=$_POST["iris"];
$comIris=$_POST["comIris"];
$cristalino=$_POST["cristalino"];
$comCristalino=$_POST["comCristalino"];
$oidos=$_POST["oidos"];
$comOidos=$_POST["comOidos"];
$conducto=$_POST["conducto"];
$comConducto=$_POST["comConducto"];
$timpano=$_POST["timpano"];
$comTimpano=$_POST["comTimpano"];

function insertar($valor,$comentario,$nombre,$tipo,$mascota)
 {
      if($tipo)      
        mysql_query("INSERT into evaluacioneso(ORGANO,MASCOTA,EVALUACION,COMENTARIO) VALUES((select id from organos where nombre='$nombre' AND aparato=19),$mascota,'$valor','$comentario')");
        
      if(!$tipo)
        mysql_query("INSERT into evaluacioness(MASCOTA,SINTOMA,EVALUACION,COMENTARIO) VALUES($mascota,(select id from sintomas where nombre='$nombre' AND aparato=19),'$valor','$comentario')");
      
  }

insertar($vision,$comVision,'VISION',true,$mascota);
insertar($parpados,$comParpados,'PARPADOS',true,$mascota);
insertar($nasolagrimal,$comNasolagrimal,'CONDUCTO NASOLAGRIMAL',true,$mascota);
insertar($esclerotica,$comEsclerotica,'ESCLEROTICA',true,$mascota);
insertar($iris,$comIris,'IRIS',true,$mascota);
insertar($cornea,$comCornea,'CORNEA',true,$mascota);
insertar($cristalino,$comCristalino,'CRISTALINO',true,$mascota);
insertar($oidos,$comOidos,'OIDOS',true,$mascota);
insertar($conducto,$comConducto,'CONDUCTO EXTERNO',true,$mascota);
insertar($timpano,$comTimpano,'TIMPANO',true,$mascota);

$_SESSION['sentidos']=true;
if ($_SESSION['ganglios'])
	header("location: verificar-guardado.php");	
else
	header("location: ../servicios/nuevo-paciente/ganglios.html");
?>