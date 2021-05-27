<?php 

include "conexion.php";
$_POST = json_decode(file_get_contents('php://input'),true); 

if($_POST['usuario']!='' and $_POST['pasw']!=''){
	$sql="SELECT * FROM `cole_users` where nick = '{$_POST['usuario']}' and pasw = md5('{$_POST['pasw']}');";
	
	$resultado=$cadena->query($sql);
	if($resultado->num_rows>=1){
		echo "HOLA";
	}else{
		echo "nada";
	}
}


?>