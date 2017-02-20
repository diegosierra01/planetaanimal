<?php
session_start();
include_once "conexion.php";
$mascota=$_SESSION['mascota'];

$oral=$_POST["oral"];
$comOral=$_POST["comOral"];
$conjuntiva=$_POST["conjuntiva"];
$comConjuntiva=$_POST["comConjuntiva"];
$vaginaprepucial=$_POST["vaginal-prepucial"];
$comvaginal=$_POST["comvaginal-prepucial"];

$soplos=$_POST["soplos"];
$comSoplos=$_POST["comSoplos"];
$arritmias=$_POST["arritmias"];
$comArritmias=$_POST["comArritmias"];
$tllc=$_POST["tllc"];
$comTLLC=$_POST["comTLLC"];


 function insertar($valor,$comentario,$nombre,$tipo,$mascota)
 {
      if($tipo)      
        mysql_query("INSERT into evaluacioneso(ORGANO,MASCOTA,EVALUACION,COMENTARIO) VALUES((select id from organos where nombre='$nombre' AND aparato=12),$mascota,'$valor','$comentario')");
        
      if(!$tipo)
        mysql_query("INSERT into evaluacioness(MASCOTA,SINTOMA,EVALUACION,COMENTARIO) VALUES($mascota,(select id from sintomas where nombre='$nombre' AND aparato=12),'$valor','$comentario')");
      
  }

insertar($oral,$comOral,'ORAL',true,$mascota);
insertar($conjuntiva,$comConjuntiva,'CONJUNTIVA',true,$mascota);
insertar($vaginaprepucial,$comvaginal,'VAGINAL O PREPUCIAL',true,$mascota);
insertar($soplos,$comSoplos,'SOLPLOS',true,$mascota);
insertar($arritmias,$comArritmias,'ARRITMIAS',true,$mascota);
insertar($tllc,$comTLLC,'TLLC',true,$mascota);

$_SESSION['cardiovascular']=true;
if ($_SESSION['integumentario'])
	header("location: verificar-guardado.php");	
else
	header("location: ../servicios/nuevo-paciente/integumentario.html");
?>