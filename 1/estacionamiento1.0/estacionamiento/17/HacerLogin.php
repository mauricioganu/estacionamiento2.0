<?php


$archivo = fopen("registro.txt", "r");

while(!feof($archivo)) 
{
$objeto = json_decode(fgets($archivo));
if ($objeto->Usuario == $_GET['usuario']) 
{	
if ($objeto->Clave == $_GET['clave'])
{
header("Location: ok.php");
fclose($archivo);
exit();
}
else
{
header("Location: no.php");
fclose($archivo);
exit();
}
}
else
{
header("Location: UsuarioInex.php");
fclose($archivo);
exit();
}

}
fclose($archivo);

exit();

?>