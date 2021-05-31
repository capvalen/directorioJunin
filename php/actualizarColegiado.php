<?php 
include "conexion.php";
$_POST = json_decode(file_get_contents('php://input'),true); 

$sql ="UPDATE `colegiados` SET `dni`='{$_POST['dni']}',`apellidos`=UPPER('{$_POST['apellidos']}'),`colegiatura`='{$_POST['colegiatura']}',`fecha`='{$_POST['fecha']}',`habilitado`=UPPER('{$_POST['habilitado']}'),`foto`='{$_POST['foto']}' WHERE `id`={$_POST['id']};";

if($cadena->query($sql)){
	echo 'ok';
}else{
	echo "hubo error <br/>\n".$sql;
}

?>