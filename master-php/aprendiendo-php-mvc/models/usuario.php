<?php

require_once 'ModeloBase.php';

class Usuario extends ModeloBase
{
    public $nombre;
    public $apellido;
    public $email;
    public $password;

    public function __construct()
    {
        parent::__construct();
    }


    function getNombre()
    {
        return $this->nombre;
    }
    function getApellido()
    {
        return $this->apellido;
    }
    function getEmail()
    {
        return $this->email;
    }
    function getPassword()
    {
        return $this->password;
    }

    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    function setEmail($email)
    {
        $this->email = $email;
    }
    function setPassword($password)
    {
        $this->password = $password;
    }

}

// DICCIONARIO DE FINCIONES UTILIZADAS  PARA ESTA PRACTICA
/*
requiere_once = Se utiliza para incluir fichero de otras partes del prrgrama una unica vez
class = Se utiliza como plantilla para crrear metodos y atributos que se utilizaran el programa
extends = Permite realizar el llamando de  una clase padre o (base) y utilizar sus atrubutos y metodos
public = Se utiliza para indicar que la funcion se podra accerder desde cualquier parte del programa
__construct = Es  un metodo magioc que se utliza para inicializar la clase una vez creada
parent::__construct = Se utiliza para llamara las propiedades del costructor de una
                       clase padre, que se van a utilizar junto al costructor de la clase
                       hija, grantizando que la propirdades padre tambie se iniciaran.
getter =Se utiliza para optener el valor de una propiedad
setter = Se utiliza para asignar valor a una propiedad
returnt = Se utiliza para devolver un valor o  resultado en una funcion 
$this-> = Se utiliza para acceder a las propiedades o metodos.

NOATA: E este fivehero nos encargamos decrea una clase con las plantillas d elos datso que se
       trabajaran  y tendra una herencia desde la clase padre qe contiene la conecion a la 
       base de datos por lo que se crea un costrcutor que carge esta informacio  antes de 
       crear el objeto, se crean las platillas de los metods y ojbetos de la clase y estos 
       seran los utilizados desde el modelo control y el modelo vista.
*/

?>