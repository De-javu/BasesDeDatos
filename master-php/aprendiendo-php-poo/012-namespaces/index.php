<?php

require_once 'autoload.php';


//ESPACIOS DE NOMBRES  Y PAQUETES


use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;


class Principal{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct(){
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();

    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function getCategoria(){
        return $this->categoria;
    }
    public function getEntrada(){
        return $this->entrada;
    }
    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }
    public function setEntrada($entrada){
        $this->entrada = $entrada;
    }

}
$usuario = new UsuarioAdmin();
//var_dump($usuario);
var_dump(get_class_methods($principal));



$principal = new Principal();

$metodos = get_class_methods($principal);
$busqueda = array_search('setEntrada', $metodos);
var_dump($principal->usuario);

//  COMPROBAR SI EXISTE UNA CLASE 

$clase = class_exists('Usuario');
if($clase){
    echo "<h1>La clase se si existe</h1>";
}else{
    echo "<h1>La clase No existe</h1>";
}



// DICCIONARIO DE FUNCIONES UTILIZADAS PARA ESTA PRACTICA

/*
require_onces = Se utiliza para incluir ficheros una unica vez
use = Se utiliza para renombrar, para crea nombre simbolicos
class = Se utiliza para crear plantillas las cuales se convertiran el ls objetos
public = Permite acceder desde caulquier parte del programa  
__cosntrcutor = Es un metodo magico el cual permite crear objetos y metodos de una clase
                 al instante de crear esta.
$this-> = Se utiliza para acceder acceder apropieddaes y metodos de un clase
new = Se utiliza para instanciar una clase y volverla un objeto 
var_dum() = Se utiliza para acceder a los datos internos que se trasportan el programa  
*/

?>

