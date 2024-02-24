<?php

// HERENCIA: Es la posibilidad de compartir atributos y metodos entre calses

class Persona
{
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;


    public  function getNombre(){
        return $this->nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function getEdad(){
        return $this->edad;
    }
      
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function hablar(){
        return "EStoy hablando";
    }

    public function caminar(){
        return "Estoy caminando";
    }
}

class Informatico extends Persona {

    public $lenguajes;
    public $experienciaProgramador;

    public function __construct(){
        $this->lenguaje = "HTML, CSS y JS";
        $this->experienciaProgramador = 10;
    }

    public function sabalenguajes($lenguajes){
        $this->lenguajes = $lenguajes;

        return $this->lenguajes;

    }
    public function programar(){
        return "Soy programador";
    }

    public function repararOrdenadores(){
        return "Reparar ordenadores";
    }

    public  function hacerOfimatica(){
        return "Estoy escribieno en word";
    }
}

class TecnicoRedes extends Informatico{
    public $auditarRedes;
    public $experienciaRedes;

    public function __construct(){

        parent::__construct();
        $this->auditarRedes = 'experto';
        $this->experienciaRedes = 5;
    }






    public function auditoria(){
        return "Estoy auditando una red";
    }
}

/*

******************DICCIONARIO DE ELEMENTOS UTILIZADOS EN ESTA CLASE*********************
class = Se utiliza como platilla para crear objetos
public = Se utiliza para acceder a a los metodos desde cualquier parte del programa 
funtion = Se utiliza para crear un aprogramacion mas estructurada 
get (obtener) = Se utiliza para optener el valor de una propiedad de la clase, para 
                utilizar en diferentes metodos 
set (establecer) = Permite bridar acceso a propiedades espesificas para poder asignar 
                   valores fuera de la clase.
return =  Se encarga de devolver la funcion 
$this-> = Se utiliza para acceder a las propiedades y metodos del objeto  
extens = se utiliza para indicar que se aplicara herencia de otra clase
funtion __constructor = Es un metodo magico que se utiliza para inicializar las propiedades
                        del objeto en una clase.
parent::__construct()= Se utiliza para invocar el constructor de la clase padre desde
                    la clase hijo

?>

