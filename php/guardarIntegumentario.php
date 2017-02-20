 <?php
session_start();
include_once "conexion.php"; 
$mascota=$_SESSION['mascota'];

$papula=$_POST["papula"];
$locPapula=$_POST["locPapula"];
$pustula=$_POST["pustula"];
$locPustula=$_POST["locPustula"];
$habon=$_POST["habon"];
$locHabon=$_POST["locHabon"];
$vesicula=$_POST["vesicula"];
$locVesicula=$_POST["locVesicula"];
$placa=$_POST["placa"];
$locPlaca=$_POST["locPlaca"];
$nodulo=$_POST["nodulo"];
$locNodulo=$_POST["locNodulo"];
$tumor=$_POST["tumor"];
$locTumor=$_POST["locTumor"];
$quiste=$_POST["quiste"];
$locQuiste=$_POST["locQuiste"];
$macula=$_POST["recto"];
$locMacula=$_POST["locRecto"];

$comedon=$_POST["comedon"];
$locComedon=$_POST["locComedon"];
$escama=$_POST["escama"];
$locEscama=$_POST["locEscama"];
$costra=$_POST["costra"];
$locCostra=$_POST["locCostra"];
$collarete=$_POST["collarete"];
$locCollarete=$_POST["locCollarete"];
$erosion=$_POST["erosion"];
$locErosion=$_POST["locErosion"];
$excoriacion=$_POST["excoriacion"];
$locExcoriacion=$_POST["locExcoriacion"];
$ulcera=$_POST["ulcera"];
$locUlcera=$_POST["locUlcera"];
$hiperpigmentacion=$_POST["hiperpigmentacion"];
$locHiperpigmentacion=$_POST["locHiperpigmentacion"];
$hipopigmentacion=$_POST["hipopigmentacion"];
$locHipopigmentacion=$_POST["locHipopigmentacion"];
$cicatriz=$_POST["cicatriz"];
$locCicatriz=$_POST["locCicatriz"];
$liquenificacion=$_POST["liquenificacion"];
$locLiquenificacion=$_POST["locLiquenificacion"];

 function insertar($valor,$comentario,$nombre,$tipo,$mascota)
 {
      if($tipo)      
        mysql_query("INSERT into evaluacioneso(ORGANO,MASCOTA,EVALUACION,COMENTARIO) VALUES((select id from organos where nombre='$nombre' AND aparato=14),$mascota,'$valor','$comentario')");
        
      if(!$tipo)
        mysql_query("INSERT into evaluacioness(MASCOTA,SINTOMA,EVALUACION,COMENTARIO) VALUES($mascota,(select id from sintomas where nombre='$nombre' AND aparato=14),'$valor','$comentario')");
      
  }


insertar($papula,$locPapula,'PAPULA',false,$mascota);
insertar($pustula,$locPustula,'PUSTULA',false,$mascota);
insertar($habon,$locHabon,'HABON',false,$mascota);
insertar($vesicula,$locVesicula,'VESICULA',false,$mascota);
insertar($placa,$locPlaca,'PLACA',false,$mascota);
insertar($nodulo,$locNodulo,'NODULO',false,$mascota);
insertar($tumor,$locTumor,'TUMOR',false,$mascota);
insertar($quiste,$locQuiste,'QUISTE',false,$mascota);
insertar($macula,$locMacula,'MACULA',false,$mascota);
insertar($comedon,$locComedon,'COMEDON',false,$mascota);
insertar($escama,$locEscama,'ESCAMA',false,$mascota);
insertar($costra,$locCostra,'COSTRA',false,$mascota);
insertar($collarete,$locCollarete,'COLLARETE EPIDERMICO',false,$mascota);
insertar($erosion,$locErosion,'EROSION',false,$mascota);
insertar($excoriacion,$locExcoriacion,'EXCORIACION',false,$mascota);
insertar($ulcera,$locUlcera,'ULCERA',false,$mascota);
insertar($hiperpigmentacion,$locHiperpigmentacion,'HIPERPIGMENTACION',false,$mascota);
insertar($hipopigmentacion,$locHipopigmentacion,'HIPOPIGMENTACION',false,$mascota);
insertar($cicatriz,$locCicatriz,'CICATRIZ',false,$mascota);
insertar($liquenificacion,$locLiquenificacion,'LIQUENIFICACION',false,$mascota);

$_SESSION['integumentario']=true;
if ($_SESSION['musculoesqueletico'])
	header("location: verificar-guardado.php");	
else
	header("location: ../servicios/nuevo-paciente/musculo-esqueletico.html");
?>