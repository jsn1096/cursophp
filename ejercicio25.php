<?php
// HERENCIA
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
// usar el extends sirve para coger las mismas propiedades de la clase
// persona para reutilizarlas en la clase trabajador
class trabajador extends persona{
    public $puesto;

    public function presentarsecomotrabajador(){
        echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
    }

}

$objtrabajador= new trabajador(); // instancia o creación de un objeto
$objtrabajador->asignarnombre("Juan N"); // llamando un método
$objtrabajador->puesto="Profesor";

$objtrabajador->presentarsecomotrabajador();


?>