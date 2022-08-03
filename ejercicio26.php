<?php
// CONSTRUCTOR
class persona{

    public $nombre; //propiedades
    /*
    Cuando la variable o constante o en este caso llamada propiedad
    es pública se puede dar valores ($nombre="Juan) y mostrar tranquilamente
    o usando una función como abajo la de asignarnombre()
    */
    private $edad; //solo se puede acceder desde la clase que lo definió
    /*
    Cuando es privado solo se puede acceder desde la clase y asignandole
    una función pública e IMPRIMIENDO esa función, claro que el valor
    de la variable debe darse desde la función para que no se pueda
    modificar
    */
    protected $altura; //protected significa que solo se puede acceder
    //bajo la misma clase o las clases heredadas

    function __construct($nuevonombre){
        $this->nombre=$nuevonombre;
    }

    public function asignarnombre($nuevonombre){ //acciones o métodos
        $this->nombre=$nuevonombre;
    }
    public function asignaredad(){
        $this->edad=26;
        return $this->edad;
    }
    public function imprimirnombre(){
        echo "Hola soy ".$this->nombre;
    }
}
// Se asigna directamente el parámetro de nombre porque usamos la función
// __construc();
$objalumno= new persona("Juan nuñez"); // instancia o creación de un objeto
//$objalumno->asignarnombre("Juan"); // llamando un método
$objalumno->imprimirnombre();
?>