<?php 
include "conexion.php";

$sql="SELECT * FROM `colegiados` where habilitado<>'NO' and habilitado<>'SI' order by apellidos asc;";
$resultado=$cadena->query($sql);
$filas =array();

while($row=$resultado->fetch_assoc()){
	$filas[] = $row;
}

echo json_encode($filas);

?>