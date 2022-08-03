<?php
// Una vez que se cierra el navegador se cierra la sesion xq se pierde la conexión
session_start();

if( isset($_SESSION["usuario"])){ //isset() comprueba si una var está definida o no
    echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];
}else{
    echo "No hay datos";
}


?>