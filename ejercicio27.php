<?php
//métodos estáticos
class unaclase{
    public static function unmetodo(){
        echo "Hola soy un método estático";
    }
}
// Así es la forma tradicional de hacer:
$obj= new unaclase();
$obj->unmetodo();
// al poner la palabra static en el método ya se puede hacer de esta forma:
unaclase::unmetodo();

?>