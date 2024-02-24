<?php

class Configuracion{
    public static $color;
    public static $newsletter;
    public static $entorno;

    public static function getColor(){
        return self::$color;
    }

    public static function getNewsletter(){
          return self::$newsletter;
    }

    public static function getEntorno(){
        return self::$entorno;
    }

    public static function setColor($color){
        self::$color = $color;
    }

    public static function setNewsletter($newsletter){
        self::$newsletter = $newsletter;
    }

    public static function setEntorno($entorno){
        self::$entorno = $entorno;

    } 

 
}

//******************  DICCIONARIO DE ELEMNTOS UTILIZADOS EN PARA ESTA PRACTICA ************
/*
class = Se utiliza como platilla para crear los los objetos de esa classe
public = Indica que se puede acceder desde cualquier parte del programa sin problema
static = Se utiliza para declarar metodos de una clase como estaticos.
get (Getters) = Se utuliza para obtener el valor de una propirdad de la clase,  para poder
                ser utilizada en diferentes metodos
return = permiete retornar un valor dentro de un afuncion  
self:: = Se utiliza para acceder a las clases estaticas.
set (setters) = permite poner valor al objetos desde fuera de la clase 

*/





?>