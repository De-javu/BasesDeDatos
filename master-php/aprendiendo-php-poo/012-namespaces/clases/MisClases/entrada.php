<?php
namespace MisClases;

class Entrada{
    public $titulo;
    public $fecha;

    public function __construct(){
        $this->titulo = "Review del GTA";
        $this->fecha=" 5 de Mayo de 2020";
    }
}

// DICCIONARIO DE FUNCIONES UTLIZADA PARA ESTA PRACTICA 

/*
namespace = Su funcion prirncipal es es agrupar las clases, esto ayuda a que
            no se desorganice el codigo.
class = Se utiliza para crear la plantilla que se utilizara en los objetos
public = Indica que se púede accerder desde cualquier parte del programa 
public funtion __construct() = Es un metodo magico el cual permite crear objetos y metodos de una clase
                            al instante de crear es
$this-> = Se utiliza para acceder a propeidades y metodos de una clase
*/






?>