<?php

    if($_POST){
        // Asignando a estas variables, los valores recibidos del input
        $txtNombre=$_POST["txtNombre"];
        $txtApellido=$_POST["txtApellido"];
        // Concatenamos string con dos variables que llegan por método POST
        echo "Hola ".$txtNombre." ".$txtApellido;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio5.php" method="post">
        Nombre:
        <input type="text" name="txtNombre" id="">
        <br/>
        Apellido:
        <input type="text" name="txtApellido" id="">
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>