<?php
/*MANEJO DE FICHEROS - 4:20:47
 25. Creación, Apertura y Modificación
  - fopen
  - fwrite/fputs  
  - copy
  - unlink
  - rename
  - filesize
  - file
 */
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$solicitud = fopen("texto.txt","a")or die("No se pudo abrir para escribir");
fwrite($solicitud,"\r\n");
fwrite($solicitud,"Asunto: ");
fwrite($solicitud,"\r\n");
fwrite($solicitud,$asunto);
fwrite($solicitud,"\r\n");
fwrite($solicitud,"Mensaje: ");
fwrite($solicitud,"\r\n");
fwrite($solicitud,$mensaje);
fwrite($solicitud,"\r\n");
fwrite($solicitud,"==================================");

echo "La operacion fue correcta<br>";
fclose($solicitud);


$solicitud = fopen("texto.txt","r")or die("No se pudo abrir para escribir");
while(!feof($solicitud)){
    $leer = fgets($solicitud);
    $ver = nl2br($leer);
    echo $ver;

}
fclose($solicitud);



