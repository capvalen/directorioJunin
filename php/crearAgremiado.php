<?php 
include "conexion.php";
$_POST = json_decode(file_get_contents('php://input'),true); 
$filas = array();

/*$sqlProx="select proximoColegiado() as id;";
$resultadoProx=$esclavo->query($sqlProx);
if($rowProx=$resultadoProx->fetch_assoc()){
	$proximo = $rowProx['id'];

	
}else{
	echo "error";
}*/

$sql="INSERT INTO `colegiados` (`id`, `dni`, `apellidos`, `colegiatura`, `fecha`, `habilitado`, `foto`) VALUES 
	(NULL, '{$_POST['dni']}', UPPER('{$_POST['apellidos']}'), -1, '{$_POST['fecha']}', UPPER('{$_POST['habilitado']}'), '{$_POST['foto']}');";
	
if($cadena->query($sql)){
    $idColegiado =mysqli_insert_id ( $cadena); //->lastInsertId();
    
    $sqlUpdate = "UPDATE `colegiados` SET `colegiatura` = ${idColegiado} where `id`= ${idColegiado};";
    $cadena->query($sqlUpdate);
	echo $idColegiado;
}else{
	echo "error";
}

?>
