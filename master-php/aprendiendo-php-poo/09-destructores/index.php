<?php

class Usuario{
    public $nombre;
    public $email;

 
    public function __construct(){

        $this->nombre = "Andres pardo";
        $this->email = "andres@pardo.com";

        echo "Creando u objeto";
    }

    public function __toString(){

        return "hola {$this->nombre}, estas registrado con {$this->email}";
    }

    public function __destruct(){
        echo "Destruyendo el objeto";
    }
}


$usuario = new Usuario();
echo $usuario;

// for($i = 0; $i <= 200; $i++){
//     echo $i . "<br/>";





// **************** DICCIONARIO DE ELEMENTOS UTILIZADOS PARA ESTA PRACTICA ***************
/*
class = Se utiliza para crear la plantila de los metods y objeros a utilizar en la clase
public = Indica que se puede accerder desde cuaquier parte del programa
function = En (oop) Se utiliza para crear las funciones de los metodos y objetos de una clase
__costructor = Es un metodo magico se utiliza para inicializar asignar valores a las
               propiedades de los objetos   
echo = Se utiliza para imprimir por pantalla
__destructor = Es un metodo magico que se utiliza para finalizar el objeto como limpieza
                liberacion de recursos o guardar informacion.
new = Se utiliza para intanciar una clase, de
 esta forma la volvemos un objeto
for = Es un bucles repetitivo el cual va a realizar una operacion hasta que se cumpla
      la condicion o el numero de veces que se debe ejecutar
__toString = Es funcion se encarga de convertir un objeto en una cadena de texto

*/


?>