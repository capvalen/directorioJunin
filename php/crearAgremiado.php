<?php 
include "conexion.php";
$_POST = json_decode(file_get_contents('php://input'),true); 
$filas = array();

$sqlProx="select proximoColegiado() as id;";
$resultadoProx=$esclavo->query($sqlProx);
if($rowProx=$resultadoProx->fetch_assoc()){
	$proximo = $rowProx['id'];

	$sql="INSERT INTO `colegiados` (`id`, `dni`, `apellidos`, `colegiatura`, `fecha`, `habilitado`, `foto`) VALUES 
	(NULL, '{$_POST['dni']}', UPPER('{$_POST['apellidos']}'), {$proximo}, '{$_POST['fecha']}', UPPER('{$_POST['habilitado']}'), '{$_POST['foto']}');";
	
	if($cadena->query($sql)){
		echo $proximo;
	}else{
		echo "error";
	}
}else{
	echo "error";
}






?>