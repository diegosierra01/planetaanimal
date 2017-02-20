<?php
session_start();
include_once "conexion.php";
$mascota=$_SESSION['mascota'];

$postura=$_POST["postura"];
$comPostura=$_POST["comPostura"];
$marcha=$_POST["marcha"];
$comMarcha=$_POST["comMarcha"];
$trote=$_POST["trote"];
$comTrote=$_POST["comTrote"];
$articulaciones=$_POST["articulaciones"];
$comArticulaciones=$_POST["comArticulaciones"];
$claudicacion=$_POST["claudicacion"];
$comClaudicacion=$_POST["comClaudicacion"];
$huesos=$_POST["huesos"];
$comHuesos=$_POST["comHuesos"];
$tejidos=$_POST["tejidos"];
$comTejidos=$_POST["comTejidos"];


 function insertar($valor,$comentario,$nombre,$tipo,$mascota)
 {
      if($tipo)      
        mysql_query("INSERT into evaluacioneso(ORGANO,MASCOTA,EVALUACION,COMENTARIO) VALUES((select id from organos where nombre='$nombre' AND aparato=17),$mascota,'$valor','$comentario')");
        
      if(!$tipo)
        mysql_query("INSERT into evaluacioness(MASCOTA,SINTOMA,EVALUACION,COMENTARIO) VALUES($mascota,(select id from sintomas where nombre='$nombre' AND aparato=17),'$valor','$comentario')");
      
  }


insertar($postura,$comPostura,'POSTURA EN ESTACION',true,$mascota);
insertar($marcha,$comMarcha,'VALORACION EN LA MARCHA',true,$mascota);
insertar($trote,$comTrote,'VALORACION DEL TROTE',true,$mascota);
insertar($articulaciones,$comArticulaciones,'ARTICULACIONES',true,$mascota);
insertar($claudicacion,$comClaudicacion,'CLAUDICACION',true,$mascota);
insertar($huesos,$comHuesos,'HUESOS',true,$mascota);
insertar($tejidos,$comTejidos,'TEJIDOS BLANDOS',true,$mascota);

$_SESSION['inspeccion']=true;
if ($_SESSION['reflejos'])
	header("location: verificar-guardado.php");	
else
	header("location: ../servicios/nuevo-paciente/reflejos.html");
?>