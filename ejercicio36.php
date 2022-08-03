<!--FUNCIÓN INCLUDE-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio web</title>
</head>
<body>

<!--FUNCIÓN INCLUDE-->

<?php include "ejercicio36_1.php"; ?>
<?php include "ejercicio36_1.php"; ?>
<?php echo "Hola, estoy en la página principal"; ?>

<!-- El include hace lo que puede hacer, si algo está mal no lo hace, pero lo que está bien si lo hace-->

<!--FUNCIÓN INCLUDE_ONCE-->
<!--FUNCIÓN INCLUDE_ONCE identifican que los documentos que se requieren son iguales y solo deja uno-->
<?php include_once "ejercicio36_1.php"; ?>
<?php include_once "ejercicio36_1.php"; ?>


</body>
</html>


