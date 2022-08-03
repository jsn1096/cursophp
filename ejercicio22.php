<?php
    //arreglos asociativos
    $frutas=array("m"=>"manzana", "o"=>"ovo", "d"=>"durazno", "b"=>"banana");
    print_r($frutas);
    $fruta=$frutas["o"];
    echo $fruta."<br/>";

    foreach($frutas as $indice=>$valor){
        echo $valor."<br/>";
    }

?>