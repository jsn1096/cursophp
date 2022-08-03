<?php
// VARIABLES DE SESIÓN
// sirve para mantener información  en cualquier página mientras el navegador esté abierto
session_start();

$_SESSION["usuario"]="Juan";
$_SESSION["estatus"]="logueado";

echo "Sesión iniciada".":<br/>";
echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];

?>