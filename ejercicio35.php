<?php
// CONSUMIR UNA API CON PHP
//LA API DE DEVELOPER DAYLYMOTION 
$url="https://api.dailymotion.com/videos?channel=sport&limit=10";

//Para leer los datos del https
$opciones= array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));
//file_get_contents función para leer el conteido y convertir en una string para poder codificar y leer la info
$respuesta=file_get_contents($url, false, stream_context_create($opciones));

$objrespuesta=json_decode($respuesta);

//print_r($objrespuesta);


?>

<ul>
    <?php foreach($objrespuesta->list as $video){ ?>
        <li><?php echo ($video->title)." ! ".($video->channel)."<br/>"; ?></li>
    <?php } ?>
</ul>