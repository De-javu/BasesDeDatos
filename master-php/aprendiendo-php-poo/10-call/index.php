<?php
class Persona
{
    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct($nombre, $edad, $ciudad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }

    public function __call($name, $arguments)
    {
        $prefix_metodo = substr($name, 0, 3);

        if ($prefix_metodo == 'get') {
            $nombre_metodo = substr(strtolower($name), 3);

            if(!isset($this->$nombre_metodo)){
                return "El metodo no existe ";
            }


            return $this->$nombre_metodo;
         } else {

            return "El metodo no existe";
        }

    }

}

$persona = new Persona("Andres", 33, "Bogota");
echo $persona->getNombre();
echo $persona->getEdad();
echo $persona->getApellido();
echo $persona->getCiudad();


// DICCIONARIO DE FUNCIONES UTIIZADAS PARA ESTA PRACTICA 
/*
class = Se utiliza como la platilla para los metods y objetos
private = Indica que solo se puede acceder desde la clase directamente
__constructor = Es un metod magico que permite iniciar las propiedades de un objeto cuando 
                se crea.
this-> = Se utiliza para indicar el valor que tendra el metodo u objeto 
__call = Es un metodo magico que se envoca cuando se llama a un metodo que no es accesible
         o no exite un objeto se maneja por medio de dos argumentos,
         $name, Es el nombre de objeto que se esta llamando en el momento.
         $arguments, es un array  de argumento llamados desde el metodo 
substr = Es utilizad para extrarer un parte espesifica de una cadena de texto
if = Se utiliza como condicinal, de cumplirce se ejecutara el codigo asociado  
strtolower = Es utilizado para convertir una cadena de texto a minusculas 
! = indica que es un operador de nehacion 
isset = Se utiliza para evaluar si una variable fue definida o no 
else = se utiliza com condicional de negacion de cumplirce se ejecuata el codigo asociado
return = Se encarga de devolver el valor de una funcion
new = Se utiliza para instanciar una clase y lo vulve un objeto

*/


?>