<?php
// ABRIENDO UN ARCHIVO PARA LEER EL CONTENIDO
$archivo="contenido.txt";
// función fopen = file open, con r de read
$archivoabierto=fopen($archivo, "r");
// función fread es para leer el archivo una vez abierto
$contenido=fread($archivoabierto, filesize($archivo));

echo $contenido;

?>