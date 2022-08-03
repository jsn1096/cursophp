<?php
    // Arreglos de índice numérico
    $frutas=array("fresa", "piña", "naranja", "mango");
    print_r($frutas);

    echo $frutas[2]."<br/>";

    for($indice=0; $indice<4; $indice++){
        echo $frutas[$indice]."<br/>";
    }

?>