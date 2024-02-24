<?php

class Usuario{

    const URL_COMPLETA ="http://localhost";
    public $email;
    public $password;

    public function getEmail(){
       return $this->email;
    }
    
    public function getPassword(){
        return$this->password;
    }

    public function setEmail($email){
        $this->$email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

}


$usuario = new Usuario();
echo $usuario::URL_COMPLETA;
var_dump($usuario);



// DICCIONARIO DE ELEMENTOS UTILIZADOS PARA ESTA PRACTICA

/*
class = Se utiliza como platilla donde se crearn los objetos d ela clase
conts = Es un identificador el cual no puede cambiar a difrencia de una variable, para 
        acceder se debe utilizar ::
public = Indica que se puede accerder desde cualquier parte del programa 
return = Se encarga de devolver en valor en la funtion 
$this-> =  Se utlioza para accder allos valores del objeto 
get (Getters) = Se encarga de tomar la propiedad de la clase para que se pueda acceder al objeto
set (setters) = permite poner un valor al objeto desde fuera de clase.
new = Se utiliza para crear instanciar una clase y crear un objeto, de esta forma accedera
       a los objetos y metodos
var_dump() = Se utiliza para accerder a la informacion de variables y array metos que contenga


*/

?>