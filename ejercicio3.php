<?php
    // Aquí recibimos el nombre mandado desde el ejercicio3.html por el 
    // método get, este if es para ver si tenemos datos se hace, sino no
    if($_GET){
        $nombre=$_GET["nombre"];

        echo "Hola ".$nombre; 
    }

?>