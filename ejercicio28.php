<?php
// Conexión a base de la datos
$servidor="localhost"; //127.0.0.1
$usuario="root";
$contrasenia="";

try{

    $conexion=new PDO("mysql:host=$servidor;dbname=album1", $usuario,$contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Conexión establecida";
    
}catch(PDOException $error){
    echo "Conexion erronea".$error;
}

?>