<?php
// porgrmacion orientada a objetos en PHP (POO)

//Definir una clase = (Molde para crear, mas objetos de 
//tipo coche con caracteristicas parecidas).

class Coche{

    //Atributos o propiedades = (Antes llamado Variables)
    public $color ="Rojo";
    public $marca = "For";
    public $modelo = "Ranger";
    public $velocidad= 200;
    public $cilindrje = 2500;
    public $plazas = 4;

  //Metodos, son  acciones que hace el objeto (Antes llamado funciones) 
  
  public function getcolor(){
    //Busca en esta clase la propiedad X
    return $this->color;
  }

  public function setcolor($color){
    $this->color = $color;
  }
  public function setModelo($modelo){
    $this->modelo = $modelo;
  } 
  

  public function acelerar(){
    $this->velocidad++;
  }

  public function frenar(){
    $this->velocidad--;
  }

  public function getVelocidad(){
    return $this->velocidad;
  }

} // Fin de definicion de la clase

// Crear un objeto  / Instaciar la clase 

$coche =  new Coche();

//Usar los metodos

$coche->setColor("Amarillo");
echo "El color del coche es: ".$coche->getcolor().'<br>';

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "Velocidad a la que viaja el coche:". $coche->getVelocidad();

$coche2 =new Coche();
$coche2->setColor("Rojo");
$coche2->setModelo("Toyota");


var_dump($coche);
var_dump($coche2);

/* DICCIONARIO DE ELEMENTOS UTILIZADOS EN ESTA PARCTICA

class = Es donde se crea la plantilla donde se crearan los objetos que internamente
        tienen atributuos = (caracteristicas del objeto ) y metodos = (Funciones el objeto)
public = Es es un modificador, que determina que se puede acceder desde cualquir lugara la funcion 
funtion = Es un bloque de codigo que se puede llamar y ejecutar en cualquir parte del programa 
getter(get) = Es un metodo que permiete obtener el valor de una propiedad de la clase
              no reciben parametrsi y deben debolver algo o un return.
Setter(set) = Estos metodos permiten asignar a una propiedad sifnificativo
              reciben un parametro el valor a asignar y no devulven dana.
return = Se encarga de finalizar la funcion y delvilver el atgumneto
$this-> = Se utiliza para apuntar al objeto actual  el (OOP)
new = Se utiliza para crear nuevos objetos (Instanacias) en la clase existente
setColor = Es el nombre que se ale asigna a la funcion actail para indicar el modelo carro
echo = permiete imprimir por pantalla   
br = Permite realizara saltos de linea 
var_dump = Se utiuliza para ver los valors de una variable o una array es muy util 


*/





?>

