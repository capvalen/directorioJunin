<?php 

include "conexion.php";
$_POST = json_decode(file_get_contents('php://input'),true); 
$filas = array();

if($_POST['texto']==''){
 echo "nada"	;
}else{
	$sql="SELECT *, date_format(fecha, '%d/%m/%Y') as fecha_cole FROM `colegiados`
	where dni = '{$_POST['texto']}' or apellidos like '%{$_POST['texto']}%' or colegiatura ='{$_POST['texto']}'
	order by apellidos asc;";
	$resultado=$cadena->query($sql);
	while($row=$resultado->fetch_assoc()){ 
		$filas[] = $row;
	}
	echo json_encode($filas);
}

?>