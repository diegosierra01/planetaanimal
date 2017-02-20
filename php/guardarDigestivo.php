<?php
session_start();
include_once "conexion.php";
$mascota=$_SESSION['mascota'];

$dientes=$_POST["dientes"];
$comDientes=$_POST["comDientes"];
$lengua=$_POST["lengua"];
$comLengua=$_POST["comLengua"];
$tonsilas=$_POST["tonsilas"];
$comTonsilas=$_POST["comTonsilas"];
$faringe=$_POST["faringe"];
$comFaringe=$_POST["comFaringe"];
$esofago=$_POST["esofago"];
$comEsofago=$_POST["comEsofago"];
$estomago=$_POST["estomago"];
$comEstomago=$_POST["comEstomago"];
$delgado=$_POST["delgado"];
$comDelgado=$_POST["comDelgado"];
$grueso=$_POST["grueso"];
$comGrueso=$_POST["comGrueso"];
$recto=$_POST["recto"];
$comRecto=$_POST["comRecto"];
$ano=$_POST["ano"];
$comAno=$_POST["comAno"];
$higado=$_POST["higado"];
$comHigado=$_POST["comHigado"];
$bazo=$_POST["bazo"];
$comBazo=$_POST["comBazo"];

$dolor=$_POST["dolor"];
$comDolor=$_POST["comDolor"];
$vomito=$_POST["vomito"];
$comVomito=$_POST["comVomito"];
$regurgitacion=$_POST["regurgitacion"];
$comRegurgitacion=$_POST["comRegurgitacion"];
$diarrea=$_POST["diarrea"];
$comDiarrea=$_POST["comDiarrea"];
$deshidratacion=$_POST["deshidratacion"];
$comDeshidratacion=$_POST["comDeshidratacion"];
$otros=$_POST["otros"];
$comOtros=$_POST["comOtros"];

 function insertar($valor,$comentario,$nombre,$tipo,$mascota)
 {
      if($tipo)      
        mysql_query("INSERT into evaluacioneso(ORGANO,MASCOTA,EVALUACION,COMENTARIO) VALUES((select id from organos where nombre='$nombre' AND aparato=10),$mascota,'$valor','$comentario')");
        
      if(!$tipo)
        mysql_query("INSERT into evaluacioness(MASCOTA,SINTOMA,EVALUACION,COMENTARIO) VALUES($mascota,(select id from sintomas where nombre='$nombre' AND aparato=10),'$valor','$comentario')");
      
  }

insertar($dientes,$comDientes,'DIENTES',true,$mascota);
insertar($lengua,$comLengua,'LENGUA',true,$mascota);
insertar($tonsilas,$comTonsilas,'TONSILAS',true,$mascota);
insertar($faringe,$comFaringe,'FARINGE',true,$mascota);
insertar($esofago,$comEsofago,'ESOFAGO',true,$mascota);
insertar($estomago,$comEstomago,'ESTOMAGO',true,$mascota);
insertar($grueso,$comGrueso,'INTESTINO GRUESO',true,$mascota);
insertar($delgado,$comDelgado,'INTESTINO DELGADO',true,$mascota);
insertar($recto,$comRecto,'RECTO',true,$mascota);
insertar($ano,$comAno,'ANO',true,$mascota);
insertar($higado,$comHigado,'HIGADO',true,$mascota);
insertar($bazo,$comBazo,'BAZO',true,$mascota);
insertar($dolor,$comDolor,'DOLOR A LA PALPACION',false,$mascota);
insertar($vomito,$comVomito,'VOMITO',false,$mascota);
insertar($regurgitacion,$comRegurgitacion,'REGURGITACION',false,$mascota);
insertar($diarrea,$comDiarrea,'DIARREA',false,$mascota);
insertar($deshidratacion,$comDeshidratacion,'DESHIDRATACION',false,$mascota);
insertar($otros,$comOtros,'OTROS',false,$mascota);

$_SESSION['digestivo']=true;
if ($_SESSION['respiratorio'])
	header("location: verificar-guardado.php");	
else
	header("location: ../servicios/nuevo-paciente/respiratorio.html");

?>