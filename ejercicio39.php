<?php

$namefile= "file.txt";

$filecontent= "Hi hola";

$createfile= fopen($namefile, "w");
// se pasa primero el archivo a crear y luego el contenido
fwrite($createfile, $filecontent);
// se cierra para poder crear el archivo
fclose($createfile);

?>