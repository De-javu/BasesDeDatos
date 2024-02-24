<?php
namespace PanelAdministrador;
 

class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = "Yordy Moreno";
        $this->email ="yordy@moreno.com";
    }
}


// DICCIONARIO DE FUNCIONES UTILIZADAS 

/*
namespace = su funcion principal es agrupar las clases esto ayuda a que no se desorganice 
class = Se utiliza como platilla para crear los objetosd  que se usara en la clase
public = Permiete acceder desde cualquier parte del programa 
__constrcutor = Es un metodo magico el cual permite crear los objetos y metodos de una
                clase despues de creada la clase 
$this = Se utiliza para acceder a los objetos o metodos de una clase en su momento 


*/