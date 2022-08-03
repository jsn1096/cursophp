<?php
// Conexión a base de la datos
$servidor="localhost"; //127.0.0.1
$usuario="root";
$contrasenia="";

try{

    $conexion=new PDO("mysql:host=$servidor;dbname=album1", $usuario,$contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // traer de la base de datos los datos de la tabla fotos
    $statement=$conexion->prepare("SELECT * FROM fotos");
    $statement->execute();

    $result=$statement->fetchAll();
    //muestra toda la info de la tabla fotos
    print_r($result);
    // muestra solo el nombre
    foreach($result as $res){
        print_r($res["name"]);
    }
    
    
    
}catch(PDOException $error){
    echo "Conexion erronea".$error;
}

?>