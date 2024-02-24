<?php

class Coche{

    //Atributos o propiedades = (Antes llamado Variables)
    
    //PUBLIC: Podemos acceder desde cualquier lugar, dentro de la calse actual
    //          dentro de las calses que hereden esta clase o fuera de la clase
    public $color;

    //PROTECTED: Podemos accerde desde las clases que los define y desde las clases
    //           que los hereden esta clase
    protected $marca;

    //PRIVATED: Unicamente se pueden accerder desde esta clase
    private $modelo;
    public $velocidad;
    public $cilindrje;
    public $plazas;
   
    //***********************METODO CONSTRUCTOR************** */
    public function __construct($color, $marca, $modelo, $velocidad, $cilindraje, $plaza){
      $this->color = $color;
      $this->marca = $marca;
      $this->modelo = $modelo;
      $this->velocidad = $velocidad;
      $this-> cilindrje = $cilindraje;
      $this-> plazas = $plaza;
    }

  //Metodos, son  acciones que hace el objeto (Antes llamado funciones) 
  
  public function getcolor(){
    //Busca en esta clase la propiedad X
    return $this->color;
  }

  public function setcolor($color){
    $this->color = $color;
  }
  public function setModelo($modelo){
    $this->modelo = $modelo;
  } 

  public function getModelo($modelo){
    $this->modelo = $modelo;
  } 
  
  public function setMarca($marca){
    $this->marca = $marca;
  } 

  public function acelerar(){
    $this->velocidad++;
  }

  public function frenar(){
    $this->velocidad--;
  }

  public function getVelocidad(){
    return $this->velocidad;
  }


  
  // TIPADO
  public function mostrarInformacion( Coche $miObjeto){

    if(is_object($miObjeto)){
      
        $informacion = "<h1>Informaion del coche</h1>";
        $informacion .= "Color: ".$miObjeto->color;
        $informacion .= "<br/> Modelo: ".$miObjeto->modelo;
        $informacion .= "<br/>v elocidad: ".$miObjeto->velocidad;
    

    }else{
      $informacion = "Tu dato es este: ".$miObjeto;
    }
    return $informacion;

  }

} // Fin de definicion de la clase

// DICCIONARIO DE ELEMNTOS UTILIZADOS EN ESTAS CLASES 
/*

class = Es una plantilla que se utiliza para crear objetos
public = Indica que este elemento puede se accedido desde cualquier parte. 
protected = Infica que puede ser accedido desde la propia clase y desde cualquier
            otra que la herede.
privated = Indica que solo púede ser accedido desde la propia clase
funtion __constrcut = Es un metodo magico que se utiliza para inicializar una objeto 
                      Esta funcion permite inicializar las propiedades de un objeto al 
                      momneto de su creacion 
return = Se utiliza para debolver el valor desde una funcion 
this-> = Se utiliza como un apuntador para acceder a las propiedades y metodos 
funtion mostrarInformacion = funcion definida porel usuario para la parctica del tipado la cual
                             Permiete mejoarar la sefuridad ygrantiza que se pasa lo que se 
                             necesita y no otra caracteristica o valor.
if = Se utiliza como un condicional, si se cumple ejecutara un bloque de codigo. 
is_object = Se utiliza para verificar si una varible es un objeto
else = Se utiliza como condicional si la sentencia if es flasa, ejecuara un bloque de codigo

*/



?>