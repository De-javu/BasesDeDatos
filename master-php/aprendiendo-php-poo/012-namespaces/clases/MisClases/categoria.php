<?php
namespace MisClases;
class Categoria{
    public $nombre;
    public $descripcion;

    public function __construct(){
        $this->nombre = "Accion";
        $this->descripcion ="Catgoria enfocada al  review de videojuegos de accion ";
    }
}

// DICCIONARIO DE FUNCIONES UTILIZADA PARA ESTA PRACTICA 

/*
class = Se utuliza como  platilla para la creacion de metodos 
public = indica que se podra utilizazr desde cualquier parte del programa 
public funtion __construct = Es un metodo magico que permite iniciar los objetos de la clase
$this = Se utiliza para hacer refencial al objeto actual.
-> = Es un operador que se utiliza para acceder a propiedades y metodos.


*/




?>