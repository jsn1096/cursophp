<?php
// VALORES DE INPUT TEXT
$txtnombre="";
$rdglenguaje="";

$chkphp="";
$chkhtml="";
$chkcss="";

$lsanime="";

$txtnombre="";

if ($_POST){
    //aquí se usa if ternario:
    $txtnombre=(isset($_POST["txtnombre"]))?$_POST["txtnombre"]:"";
    $rdglenguaje=(isset($_POST["lenguaje"]))?$_POST["lenguaje"]:"";

    $chkphp= (isset($_POST["chkphp"]))?"checked":"";
    $chkhtml= (isset($_POST["chkhtml"]))?"checked":"";
    $chkcss= (isset($_POST["chkcss"]))?"checked":"";

    $lsanime= (isset($_POST["lsanime"]))?$_POST["lsanime"]:"";

    $txtcomentario= (isset($_POST["txtcomentario"]))?$_POST["txtcomentario"]:"";
    // Instrucciones de insertar
    //rutina de cálculo
    //Aquí se pueden alterar los valores de las variables para mostrar
    //diferentes valores modificados
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php if($_POST){ ?>

        <strong>Hola:</strong> <?php echo $txtnombre;?><br/>
        <strong>Tu lenguaje es:</strong> <?php echo $rdglenguaje; ?><br/>
        <strong>Estas aprendiendo:</strong>
        <?php echo (isset($_POST["chkphp"]))?"php":""; ?>
        <?php echo (isset($_POST["chkhtml"]))?"html":""; ?>
        <?php echo (isset($_POST["chkcss"]))?"css":""; ?>

        <br/><strong>Te gusta el ánime:</strong> <?php echo $lsanime; ?><br/>
        <strong>Tu comentario es:</strong> <?php echo $txtcomentario; ?><br/>

        <?php }?>
    <form action="ejercicio31.php" method="post">
        Nombre:<br/>
        <input value="<?php echo $txtnombre;?>" type="text" name="txtnombre" id="">
        <br/>
        ¿te gusta?:<br/>
        <!-- el checked sirve para que se quede seleccionado el item  -->
        php: <input type="radio" <?php echo ($rdglenguaje=="php")?"checked":""; ?> name="lenguaje" value="php" id="">
        <br/> html: <input type="radio" <?php echo ($rdglenguaje=="html")?"checked":""; ?> name="lenguaje" value="html" id="">
        <br/> css: <input type="radio" <?php echo ($rdglenguaje=="css")?"checked":""; ?> name="lenguaje" value="css" id=""> <br/>

        Estás aprendiendo...
        <br/> php:<input type="checkbox" <?php echo $chkphp;?> name="chkphp" id="">
        <br/> html:<input type="checkbox" <?php echo $chkhtml;?> name="chkhtml" id="">
        <br/> css:<input type="checkbox" <?php echo $chkcss;?> name="chkcss" id=""><br/>

        ¿Qué ánime te gusta? <br/>
        <select name="lsanime" id="">
            <!--En este caso en vez de checked es selected -->
            <option value="">[Ninguna serie]</option>
            <option value="naruto" <?php echo ($lsanime=="naruto")?"selected":"";?> >Naruto</option>
            <option value="dragonball" <?php echo ($lsanime=="dragonball")?"selected":"";?>>Dragon Ball Z</option>
            <option value="pokemon" <?php echo ($lsanime=="pokemon")?"selected":"";?>>pokemon</option>
        </select>
        <br/>¿tienes alguna duda?<br/>
        <textarea name="txtcomentario" id="" cols="30" rows="10">
            <?php echo $txtcomentario;?>
        </textarea>

        <br/>
        <input type="submit" value="enviar información">
    </form>
</body>
</html>