<?php
$MiObjeto= new stdClass();
$MiObjeto->Usuario=$_GET['usuario'];
$MiObjeto->Clave=$_GET['clave'];
$archivo=fopen('registro.txt', 'a');
fwrite($archivo,json_encode($MiObjeto)."\n");
fclose($archivo);
header("Location: ok.php");
?>