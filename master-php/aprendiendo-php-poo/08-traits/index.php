<?php

trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>El nombre es : ".$this->nombre ."</h1>";
    }

    
    public function mostrarPersona(){
        echo "<h1>La persona es : ".$this->persona ."</h1>";
    }

    public function mostrarjuego(){
        echo "<h1>El video juego es : ".$this->juego ."</h1>";
    }
}
class Coches{
    public $nombre;
    public $marca;

    use Utilidades;

}

class Persona{
    public $nombre;
    public $apellido;
                     
    use Utilidades;
}

class VideoJuego{
    public $nombre;
    public $anio;

    use Utilidades;
}

$coche = new Coches();
$coche->nombre = "Ferrari";
$coche->mostrarNombre();

$persona = new Persona();
$persona->persona = "Andres Pardo";
$persona->mostrarPersona();

$videojuego = new VideoJuego();
$videojuego->juego = "fifa 2020";
$videojuego->mostrarJuego();

// ****************  DICCIONARIO DE METOODS UTILIZADOS PARA ESTA PRACTICA  *****************
/*
trait =  El trait es simular a una clase, con el objetivo de agrupar fincionalidades de 
         agruprar fincionalidades muy especiificas y de una manera coherente. 
public = Se utiliza para indicar quese puede accerder desde cualquier parte del programa
funtion = Las funciones dentro de clases se conocen como metodos, a los cuales e les 
          asignan diferenets permisis de visivilidad (public, private, protected)
$this-> = Se utiliza para acceder al objeto actual dentro de la clase
use = Es una palabra clave la cual se utiliza para llamara el los trait utilizados para 
      reutilizar codigo.
new = Se utiliza para instanciar las clases, crfeando un objeto para luego accerder a los
      metodos y objetosde las clases
-> = se uyiliza en php (oop),, para acceder a las propiedades y metodos de un objeto.
*/



?>