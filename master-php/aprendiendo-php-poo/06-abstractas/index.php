<?php

//CLASE ABSTRACTA : Una clase abstracta  es una clase que no puede ser instanciada,
//                  solo puede ser heredad. las clases abstacttas pueden contener 
//                  metodos bstrattos y metodos concretos.
 abstract class Ordenador{
    public $encendido;

     abstract public function encender();

    public function apagar(){
        $this->encendido = false;
    }
}

class PcAsus extends Ordenador{
    public $software;

    public function arrancarSoftware(){
        $this->software = true;
    }

    public function encender(){
        $this->encendico = true;

    }

}

$ordenador = new PcAsus();
$ordenador->arrancarSoftware();
$ordenador->encender();
$ordenador->apagar();
var_dump($ordenador);

// DICCIONARIO DE FUNCIONES UTILIZADAS PARA ESTA PRACTICA 

/*
abstract = Es un metodo que se declara en la calse abstracta pero se implemeenta desde
           cualquier clase hija 
class = Se utiliza como plantilla para creaar el molde done va los objestos y metodos 
public =  Indica que se puede acceder desde caulquir parte de programa si restricciones
$this-> = Se ituliza para indicar el valor que tendran los objesto de la clase actualmente
extends = Se utiliza para heredaar a la clase padre desde una clase hijo
false = Se utiliza para indicar que el valor es falso
true =  Se utiliza para indicar que el valor es verdadero
 */