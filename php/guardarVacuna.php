<?php
session_start();
include_once "conexion.php";
$mascota=$_SESSION['mascota'];

$resultado=mysql_query("SELECT MAX(NUMERO) from vacunas");
$id=floatval(mysql_result($resultado, 0));


foreach($_POST["descripcion"] as $descripcion=>$valor1)
	foreach($_POST["fechaVacunacion"] as $fechaVacunacion=>$valor2)
		foreach($_POST["revacunacion"] as $revacunacion=>$valor3)
			foreach($_POST["fechaRevacunacion"] as $fechaRevacunacion=>$valor4)
				foreach($_POST["observaciones"] as $observaciones=>$valor5)
					{
						if ($descripcion==$fechaVacunacion&&$descripcion==$revacunacion&&$descripcion==$fechaRevacunacion&&$descripcion==$observaciones)
						{
							$id++;
							mysql_query("INSERT into vacunas(NUMERO,ID,FECHA,DESCRIPCION,REVACUNACION,FECHAREVACUNACION,OBSERVACION) VALUES($id,$mascota,'$valor2','$valor1','$valor3','$valor4','$valor5')");
						}
													
					}

$_SESSION['vacuna']=true;
header("location: verificar-guardado.php");
?>