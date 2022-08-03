<?php
// VALORES INPUT FILE
    if($_POST){
        print_r($_POST);
        //Se recibe la información con $_FILE
        print_r($_FILES["archivo"]["name"]);
        //Para esta función, la carpeta necesita permisos de lectura y escritura
        //Esta función pide 2 datos, el nombre temporal del archivo,
        //(lo que se copia(archivo temporal), a donde se copia)
        move_uploaded_file($_FILES["archivo"]["tmp_name"], $_FILES["archivo"]["name"]);
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
    <!--Propiedad enctype nos permite enviar información-->
    <form action="ejercicio32.php" enctype="multipart/form-data" method="post">

    Imagen 1:
    <input type="file" name="archivo" id="">
    <br/>    
    <input type="submit" name="enviar" value="Enviar información">

    </form>

</body>
</html>