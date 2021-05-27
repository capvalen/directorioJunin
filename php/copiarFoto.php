<?php

// File name
$filename = $_FILES['file']['name'];

// Valid file extensions
$valid_extensions = array("jpg","jpeg","png");

// File extension
$extension = pathinfo($filename, PATHINFO_EXTENSION);
$array = explode('.', $_FILES['file']['name']);
$punto = end($array);
//echo 'solo extens '.$punto;
// Check extension
if(in_array(strtolower($extension),$valid_extensions) ) {

   // Upload file
	 $final = uniqid().".".$extension;
   if(move_uploaded_file($_FILES['file']['tmp_name'], "../images/perfiles/".$final )){
      echo $final; //"images/perfiles/".
   }else{
      echo 'Ocurrió un error interno';
   }
}else{
   echo 'No se aceptó el tipo de archivo';
}

exit;