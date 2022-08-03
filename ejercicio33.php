<?php
//FUNCIÓN PARA JSON DECODE
$jsoncontenido='[{"name":"Juan", "apellido":"Nuñez"}, {"name":"Nicole", "apellido":"Castro"}]';

    $resultado= json_decode($jsoncontenido);
    //print_r($resultado);
    //la flecha es para acceder a las propiedades de $persona
    foreach($resultado as $persona){
        echo ($persona->name)." ".($persona->apellido)."<br/>";
    }

?>