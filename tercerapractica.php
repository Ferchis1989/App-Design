<?php
class Persona{
    private $nombre;//atributos o propiedades
    private $edad;
    //constructor, primer funcion
    //que se llama instancia o objeto
    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    //public-private-protected
    private function definirNombre (){
        return $this->nombre;
    }
    public function saludar (){
        echo "<p>".$this->definirNombre()."</p>";
    }
}
$persona3 = new Persona("Erick",21);
$persona3->saludar();
$persona2 = new Persona("Mau",21);
$persona2->saludar();
//herencia
class Animal{
    public function saludar(){
        return "Hola soy un animal";
    }
}
class Perro extends Animal{
    public function hacersonido(){
        return "GUAU GUAU!!!!";
    }
}
$perrito = new Perro();
echo "<p>".$perrito->saludar()."</p>";
echo "<p>".$perrito->hacersonido()."</p>";

//metodos estaticos
class Miclase{
    public static function metodoEstatico(){
        return "Esta es una funcion estatica";
    }
}
echo "<p>".Miclase::metodoEstatico()."</p>";

$miobjeto = new Miclase();
echo "<p>".$miobjeto->metodoEstatico()."</p>";

//Interfaces
interface interfaceAnimal{
    public function Hablar();
    public function Gritar();
}
//la clase que implementa debe
// especificar la logica de los metodos
class Ganado implements interfaceAnimal{
    public function saludo(){
        echo "<p>Que royal </p>";
    }
    public function Hablar(){
        echo "<p>Buenas tardes caballero</p>";
    }
    public function Gritar(){
        echo "<p>Que quieres!!!!</p>";
}
}
$lavaca =new Ganado();
echo $lavaca->saludo();
echo $lavaca->Hablar();
echo $lavaca->Gritar();

//Clases abstractas
abstract class abstractAnimal{
    protected $nombre;
    abstract public function Hablar();
    public function __construct($nombre){
        $this->nombre = $nombre;
    }
}
class Gato extends abstractAnimal{
    public function Hablar(){
        return "<p>MI-aw!!</p>";
    }
}
$gatillo = new Gato("Mishifu");
$gatillo->Hablar();

?>